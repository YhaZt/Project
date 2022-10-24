<?php

	namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FileUploadModel;
use App\Models\ClientModel;

class FileUploadController extends BaseController
{
	public function dropzone()
    {
        $file = new FileUploadModel();
        $data =[
          'client_files' => $file->findAll()
        ];

        return view('upload-view', $data);
	}

	public function FileUploadStore()
    {
				$id = $this->request->getVar('id');
				$town = $this->request->getVar('town');
				$brgy = $this->request->getVar('brgy');
				$hos = $this->request->getVar('hos');
				$diag = $this->request->getVar('diag');
		    $image = $this->request->getFile('file');
        $imageName = $image->getName();
				$path = 'ClientFiles/'.$hos.'/'.$town.'/'.$brgy.'/'.$diag.'/'.$id.'/';
				$directory = $path;
if (file_exists($directory) && is_dir($directory))
{
  echo "Sure, exists and is dir";
}else{
  echo "Not exists. Creating...";
  mkdir($directory, 0777, true);
}
        $image->move('ClientFiles/'.$hos.'/'.$town.'/'.$brgy.'/'.$diag.'/'.$id.'/', $imageName);

		$imageUpload = new FileuploadModel();

		$data = [
			"clientID" => $id,
			"files" => $directory . $imageName
		];

		$imageUpload->insert($data);

        return json_encode(array(
			"status" => 1,
			"files" => $imageName

		));

    }
    public function index(){
          $userModel = new FileUploadModel();
          $data['client_files'] = $userModel->orderBy('id', 'DESC')->findAll();

          return view('upload-table', $data);

      }
}
