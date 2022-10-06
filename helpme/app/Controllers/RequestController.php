<?php

namespace App\Controllers;
use App\Models\RequestModel;
use App\Models\UserModel;
class RequestController extends BaseController
{

  function __construct()
      {
          $this->session = \Config\Services::session();
          $this->session->start();
      }

    private function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'name' => $user['name'],
            'phone_no' => $user['phone_no'],
            'email' => $user['email'],
            'isLoggedIn' => true,
            "role" => $user['role']
        ];

        session()->set($data);
        return true;
    }

    public function index()
    {
        return view('ClientUser/Request');
    }

    public function reqform()
    {

      $file = new RequestModel();
      $request = new RequestModel();
      $session = session();
      $id = $session->get('id');
      $name = $session->get('name');
      $data = [
        'data' => $request->where('client_id', $id)->orderBy('rupdated_at', 'desc')->first(),
        'date' =>$session->get('created_at'),
        'id' => $id,
        'request' =>$this->request->getVar('request'),
        'name' => $session->get('name'),
        'phone_no' => $session->get('phone_no'),
        'email' => $session->get('email'),
        'client_id' => $session->get('client_id'),
      ];
      // var_dump($data);
      return view ('ClientUser/RequestForm', $data);
    }




    public function drop()
      {
          $file = new RequestModel();
          $data =[
            'client_files' => $file->findAll()
          ];

          return view('ClientUser/RequestForm', $data);
    }

    public function FileStore()
      {

          $session = session();
          $name = $session->get('name');
          $image = $this->request->getFile('file');
          $request = $this->request->getVar('request');
          $phone_no = $this->request->getVar('phone_no');
          $email = $this->request->getVar('email');
          $id = $this->request->getVar('id');
          $str = str_replace(' ', '', $name);
          $imageName = $image->getName();
          $path = 'ClientUserFiles/'.$request.'/'.$str.'/';
          $directory = $path;
    if (file_exists($directory) && is_dir($directory))
    {
    echo "Sure, exists and is dir";
    }else{
    echo "Not exists. Creating...";
    mkdir($directory, 0777, true);
    }
          $image->move('ClientUserFiles/'.$request.'/'.$str.'/', $imageName);

      $imageUpload = new RequestModel();

      $data = [
        "client_id"      => $id,
        "phone_no" => $phone_no,
        "email" => $email,
        "client_name" => $str,
        "request" => $request,
        "status" => 'pending',
        "client_files" => $directory . $imageName
      ];

      $imageUpload->insert($data);

          return json_encode(array(
        "client_files" => $imageName,
        "status" => pending

      ));

      }
      public function table(){
            $userModel = new FileUploadModel();
            $data['client_files'] = $userModel->orderBy('id', 'DESC')->findAll();
            return view('ClientUser/RequestTable', $data);
        }
        public function rtable(){

          // $id = $this->request->getFile('id');
          $session = session();
          $id = $session->get('id');
              $userModel = new RequestModel();
              $data = [
                'id' => $session->get('id'),
                'client_detail' =>  $userModel->where('status', 'pending')->where('client_id' , $id)->orderBy('id', 'DESC')->findAll(),
                'logged' => $session->get('id'),

              ];
               // $this->session->set($data);
               // echo $this->session->get("username");
              return view('ClientUser/Request', $data);
              // echo '<pre>';
              // print_r($data);
              //   echo '</pre>';
          }

          // public function reqtable()
          // {
          //   return view('ClientUser/RTable');
          // }

      public function transac(){
      return view('ClientUser/Transaction');
      }
      public function tran(){
            $userModel = new RequestModel();
            $data = [
              'Approved' =>  $userModel->where('status', 'approve')->orderBy('id', 'DESC')->findAll(),
              'Declined' =>  $userModel->where('status', 'decline')->orderBy('id', 'DESC')->findAll()
            ];
            return view('ClientUser/Transaction', $data);
            // echo '<pre>';
            // print_r($data);
            //   echo '</pre>';
        }
      public function Feed()
      {
        return view('ClientUser/Feedback');
      }





}
