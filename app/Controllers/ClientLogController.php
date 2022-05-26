<?php

namespace App\Controllers;

use App\Models\ClientLogModel;

class ClientLogController extends BaseController
{
    public function addclient()
    {
        if ($this->request->getMethod() == "post") {

            $rules = [
              "FName"           =>"required",
              "MName"           =>"required",
              "LName"           =>"required",
              "Age"             =>"required",
              "Gender"          =>"required|min_length[3]|max_length[50]",
              "MNumber"         =>"required|min_length[11]|max_length[11]",
              "Occupation"      =>"required|min_length[3]|max_length[50]",
              "Address"         =>"required|min_length[3]|max_length[50]",
              "Purpose"         =>"required|min_length[3]|max_length[50]",
            ];

            if (!$this->validate($rules)) {

                return view('add-client', [
                    "validation" => $this->validator,
                ]);
            } else {

                $memberModel = new ClientLogModel();

                $data = [
                  'FirstName'       => $this->request->getVar('FName'),
                  'MiddleName'      => $this->request->getVar('MName'),
                  'LastName'        => $this->request->getVar('LName'),
                  'Age'             => $this->request->getVar('Age'),
                  'Gender'          => $this->request->getVar('Gender'),
                  'MobileNumber'    => $this->request->getVar('MNumber'),
                  'Occupation'      => $this->request->getVar('Occupation'),
                  'Address'         => $this->request->getVar('Address'),
                  'Purpose'         => $this->request->getVar('Purpose'),
                ];

                $memberModel->save($data);

                $session = session();
                $session->setFlashdata("success", "client created successfully");
                return redirect()->to(base_url('listclient'));
            }
        }
        return view('add-client');
    }

    public function listclient()
    {
         $list = new ClientLogModel();

         $client = $list->findAll();

         return view('list-client', ["members" => $client,
        ]);
     }

    public function editclient($id = null)
    {
        $memberModel = new ClientLogModel();

        $member = $memberModel->where("id", $id)->first();

        if ($this->request->getMethod() == "post") {

            $rules = [
              "FName"           =>"required",
              "MName"           =>"required",
              "LName"           =>"required",
              "Age"             =>"required",
              "Gender"          =>"required|min_length[3]|max_length[50]",
              "MNumber"         = >"required|min_length[11]|max_length[11]",
              "Occupation"      =>"required|min_length[3]|max_length[50]",
              "Address"         =>"required|min_length[3]|max_length[50]",
              "Purpose"         =>"required|min_length[3]|max_length[50]",
            ];

            if (!$this->validate($rules)) {

                return view('edit-client', [
                    "validation" => $this->validator,
                    "member" => $member,
                ]);
            } else {

                $data = [
                  'FirstName'       => $this->request->getVar('FName'),
                  'MiddleName'      => $this->request->getVar('MName'),
                  'LastName'        => $this->request->getVar('LName'),
                  'Age'             => $this->request->getVar('Age'),
                  'Gender'          => $this->request->getVar('Gender'),
                  'MobileNumber'    => $this->request->getVar('MNumber'),
                  'Occupation'      => $this->request->getVar('Occupation'),
                  'Address'         => $this->request->getVar('Address'),
                  'Purpose'         => $this->request->getVar('Purpose'),
                ];

                $memberModel->update($id, $data);

                $session = session();
                $session->setFlashdata("success", "Client updated successfully");
                return redirect()->to(base_url('listclient'));
            }
        }

        return view('edit-client', [
            "member" => $member,
        ]);
    }

    // public function deleteclient($id = null)
    // {
    //     $memberModel = new ClientLogModel();
    //     $member = $memberModel->delete($id);
    //
    //     $session = session();
    //     $session->setFlashdata("success", "Client deleted successfully");
    //
    //     return redirect()->to(base_url('listclient'));
    // }
}
