<?php
namespace App\Controllers;
use App\Models\DatatableModel;
use App\Models\RequestModel;
use CodeIgniter\Controller;
class DatatableController extends Controller
{
    //Show users list

    public function index(){
          $userModel = new DatatableModel();
          $Req = new RequestModel();
          $data['users'] = $userModel->orderBy('id', 'DESC')->findAll();
          $data['am'] = $Req->orderBy('id', 'DESC')->findAll();
          return view('user_view', $data);
      }
    // public function index(){
    //     $dataModel = new SampleModel();
    //     $data['client'] = $dataModel->orderBy('id', 'DESC')->findAll();
    //     return view('client_view', $data);
    // }

  }
