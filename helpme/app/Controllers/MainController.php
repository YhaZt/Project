<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;

class MainController extends Controller
{

  public function staff(){
  return view ('FirstDistrict/home');
  }
  public function admin(){
  return view ('admin/home');
  }
  public function staff2(){
  return view ('SecondDistrict/home2');
  }
  public function admin2(){
  return view ('admin2/home');
  }
  public function client(){
    return view ('ClientUser/home');
    }
}
