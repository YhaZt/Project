<?php
namespace App\Controllers;
use App\Models\DatatableModel;
use CodeIgniter\Controller;
class DatatableController extends Controller
{
    //Show users list

    public function index(){
          $userModel = new DatatableModel();
          $data['users'] = $userModel->orderBy('id', 'DESC')->findAll();
          return view('user_view', $data);
      }
    // public function index(){
    //     $dataModel = new SampleModel();
    //     $data['client'] = $dataModel->orderBy('id', 'DESC')->findAll();
    //     return view('client_view', $data);
    // }

  }
