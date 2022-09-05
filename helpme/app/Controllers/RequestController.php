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
          $image = $this->request->getFile('file');
          $request = $this->request->getVar('request');
          $name = $this->request->getVar('name');
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
        "client_name" => $str,
        "request" => $request,
        "client_files" => $directory . $imageName
      ];

      $imageUpload->insert($data);

          return json_encode(array(
        "status" => 1,
        "client_files" => $imageName

      ));

      }
      public function table(){
            $userModel = new FileUploadModel();
            $data['client_files'] = $userModel->orderBy('id', 'DESC')->findAll();

            return view('ClientUser/RequestTable', $data);

        }

      public function transac(){
      return view('ClientUser/Transaction');
      }
      public function Feed()
      {
        return view('ClientUser/Feedback');
      }



}
