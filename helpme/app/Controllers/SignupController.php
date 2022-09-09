<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\LoginModel;

class SignupController extends BaseController
{

  public function verification($length){
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    return substr(str_shuffle($str_result),
    0, $length);
  }

  public function verify($id = null){
    $user = new LoginModel();
    $info = $user->where('token', $id)->first();
    if($info){
      $data = [
        'status' => 'active',
        'token' => $this->verification(50)
      ];
      $user->set($data)->where('token', $id)->update();
      $session = session();
      $session->setFlashdata('msg', 'Account activated!');

      return redirect()->to('login');
    }else{
      echo 'expired link';
    }
  }
  public function Register()
  {
    helper(['form']);
    return view('account/sign');
  }
  public function ClientRegister()
  {
    helper(['form']);
    return view('account/clientsign');
  }

  public function store()
  {
    $token = $this->verification(50);
    helper(['form']);
    $rules = [
      'name'          => 'required',
      'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[tbl_users.email]',
      'phone_no'      => 'required|min_length[11]|max_length[11]',
      'password'      => 'required|min_length[4]|max_length[50]',
      'confirmpassword'  => 'matches[password]',
      'role'  =>'required'
    ];

    if($this->validate($rules)){
      $LoginModel = new LoginModel();
      $data = [
        'name'     => $this->request->getVar('name'),
        'email'    => $this->request->getVar('email'),
        'phone_no' => $this->request->getVar('phone_no'),
        'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        'role'     => $this->request->getVar('role'),
        'status'   => 'inactive',
        'token'    => $token
      ];
      $LoginModel->save($data);
      $session = session();
      $session->setFlashdata('msg', 'Please check your email address to confirm your Registration');
      $to = $this->request->getVar('email');

      $name = $this->request->getVar('name');
      $subject = 'Please confirm your registration';
      $message = 'Hi  ' .$name .'!<br><center><h1>Welcome to HelpMe: Tracker!</h1></center>
      <center><h4>OrMin Financial Assistance Management System with Tracker and File Tagging System</h4></center>

      Please CONFIRM your registration by clicking this <a href="' . base_url('/verify') . '/' . $token.' ">link</a>';




      $this->sendMail($to, $subject, $message);
      return redirect()->to('login');
    }else{
      $data['validation'] = $this->validator;
      return view('account/sign', $data);
    }

  }



  public function email()
  {
    return view('form_view');
  }
  function sendMail($to,$subject,$message) {
    $to = $to;
    $subject = $subject;
    $message = $message;

    $email = \Config\Services::email();
    $email->setTo($to);
    $email->setFrom('helpmetracker@gmail.com', 'Confirm Registration');

    $email->setSubject($subject);
    $email->setMessage($message);
    if ($email->send())
    {
      echo 'Email successfully sent';
    }
    else
    {
      $data = $email->printDebugger(['headers']);

    }
  }



}
