<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClientFileUpload;

class ClientFileUpload extends BaseController
{
	public function dropzone()
    {
        $file = new ClientFileUpload();
        $data =[
          'client_files' => $file->findAll()
        ];

        return view('upload-view', $data);
	}

	public function FileUploadStore()
    {
        $image = $this->request->getFile('file');

        $imageName = $image->getName();

        $image->move('images', $imageName);

		$imageUpload = new ClientFileUpload();

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
          $userModel = new ClientFileUpload();
          $data['client_files'] = $userModel->orderBy('id', 'DESC')->findAll();

          return view('upload-table', $data);

      }
}
