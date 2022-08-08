<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FileUploadModel;
use App\Models\DatatableModel;

class FileUpload extends BaseController
{
	public function dropzone()
    {
        $file = new FileUploadModel();
        $data =[
          'client_files' => $file->findAll()
        ];

        return view('filemanager/ClientUpload', $data);
	}

	public function data(){
				$userModel = new DatatableModel();
				$data['users'] = $userModel->orderBy('id', 'DESC')->findAll();
				return view('/filemanager/ClientFile', $data);
		}

	public function FileUploadStore()
    {
        $image = $this->request->getFile('file');

        $imageName = $image->getName();
$data['client'] = $model->where('id', $id)->first();
        $image->move('images', $imageName);

		$imageUpload = new FileuploadModel();
$data['client'] = $model->where('id', $id)->first();
		$data = [
			"files" => $imageName
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

          return view('/filemanager/FileTable', $data);

      }
}
