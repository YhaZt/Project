<?php

namespace App\Controllers;
use App\Models\RequestModel;
use App\Models\UserModel;
class RequestController extends BaseController
{
    public function index()
    {
        return view('ClientUser/Request');
    }
    public function reqform()
    {
      $session = session();
      $name = $session->get('name');
      $data = [
        'request' =>$this->request->getVar('request'),
        'name' => $session->get('name'),
        'request' =>$this->request->getVar('request'),
        'name' => $session->get('name'),
        'phone_no' => $session->get('phone_no'),
        'email' => $session->get('email'),
        'client_id' => $session->get('client_id'),
      ];
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
          // $name = $this->request->getVar('name');
          $phone_no = $this->request->getVar('phone_no');
          $email = $this->request->getVar('email');
          $str = str_replace(' ', '', $name);
          $imageName = $image->getName();
          $path = 'ClientUserFiles/'.$str.'/';
          $directory = $path;
    if (file_exists($directory) && is_dir($directory))
    {
    echo "Sure, exists and is dir";
    }else{
    echo "Not exists. Creating...";
    mkdir($directory, 0777, true);
    }
          $image->move('ClientUserFiles/'.$str.'/', $imageName);

      $imageUpload = new RequestModel();

      $data = [
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
              $userModel = new RequestModel();
              $data = [
                'client_detail' =>  $userModel->where('status', 'pending')->orderBy('id', 'DESC')->findAll()
              ];
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
