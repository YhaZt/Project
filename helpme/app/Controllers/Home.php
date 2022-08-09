<?php

namespace App\Controllers;
use App\Models\UserModel;

class Home extends BaseController
{
    
    public function index()
    {
        return view('FirstDistrict/Dashboard/Dashboard');
    }
    public function dat()
    {
        return view('data');
    }
    public function carpel(){
      return 'okay';
    }
    public function UNI(){
      $info = new UserModel();
      $data['us'] = $info->findAll();
      return view('uni',$data);
    }
    public function test(){
      $info = new UserModel();
      $data['us'] = $info->findAll();
      return view('test',$data);
    }

}
