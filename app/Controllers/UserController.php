<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{

  public function verification($length){
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
     return substr(str_shuffle($str_result),
     0, $length);
  }

    public function passwordreset($token = null){
      $user = new UserModel();
      $u = $user->where('token', $token)->findAll();
      $data = [
        'token' => $token,

      ];
      if($u){
        return view('account/changepass', $data);
      }else{
        echo 'invalid token';
      }
    }



public function changep(){
// $token = $this->verification(50) ;
  helper(['form']);
  $password = $this->request->getVar('password');
  $confirmpassword = $this->request->getVar('confirmpassword');
  $token = $this->request->getVar('token');
  $rules = [
      'password'      => 'required|min_length[4]|max_length[50]',
      'confirmpassword'  => 'matches[password]'
  ];

  if($this->validate($rules))
  {

    $user = new UserModel();
    $data = [
        'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        'token' => $this->verification(50)
    ];
    $user->set($data)
                 ->where('token',  $token)
                 ->update();

      return redirect()->to('login');
  }else{
    $data['validation'] = $this->validator;
    echo view('account/changepass', $data);
  }
}
    public function reset(){
      $email = $this->request->getVar('email');
      $user = new UserModel();
      $val = $user->where('email', $email)->findAll();
      if($val){
        foreach($val as $v){
          $token = $v['token'];
          $name= $v['name'];

        }

        $to = $email;
        $subject = 'Password reset';
        $message = 'Hi  ' .$name .'!<br><center><h1>Welcome to HelpME: Tracker!</h1></center>
          <center><h4>you have requested for password reset.</h4></center>
          Please click this  <a href="' . base_url('/passwordreset') . '/' . $token.' ">link</a> to change your password' ;
          $this->sendMail($to, $subject, $message);
          return redirect()->to('changepass');
      }else{
        return redirect()->to('login');
      }

    }

    public function update($password = null){
      $user = new $UserModel();
      $user->where('id', $id)->first();
    }



    public function changepass()
    {
      return view('account/changepass');
    }

      public function forgotpass()
      {
        return view('account/forgotpass');
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
    $email->setFrom('helpmetracker@gmail.com', 'Password Reset');


    $email->setSubject($subject);
    $email->setMessage($message);
    if ($email->send())
{
        echo 'Email successfully sent';
    }
else
{
        $data = $email->printDebugger(['headers']);
        print_r($data);
    }
}








    public function login()
    {
        $data = [];

        if ($this->request->getMethod() == 'post') {

            $rules = [
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|validateUser[email,password]'
            ];

            $errors = [
                'password' => [
                    'validateUser' => "Email or Password didn't match",
                ],
            ];

            if (!$this->validate($rules, $errors)) {

                return view('Login/index', [
                    "validation" => $this->validator,
                ]);

            } else {
                $model = new UserModel();

                $user = $model->where('email', $this->request->getVar('email'))
                    ->first();

                // Stroing session values
                $this->setUserSession($user);

                // Redirecting to dashboard after login
                if($user['status'] == "active" && $user['role'] == "admin"){

                    return redirect()->to(base_url('admin'));

                }elseif($user['status'] == "active" && $user['role'] == "staff"){

                    return redirect()->to(base_url('home'));

                }elseif($user['status'] == "active" && $user['role'] == "staff2"){

                    return redirect()->to(base_url('home2'));

                }elseif($user['status'] == "active" && $user['role'] == "admin2"){

                    return redirect()->to(base_url('admin2'));

                }elseif($user['status'] == "active" && $user['role'] == "client"){

                    return redirect()->to(base_url('client'));
                }
            }
        }

        return view('Login/index');
    }

    private function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'name' => $user['name'],
            'phone_no' => $user['phone_no'],
            'email' => $user['email'],
            'isLoggedIn' => true,
            "role" => $user['role']
        ];

        session()->set($data);
        return true;
    }

    public function logout()
    {      $session = session();

        session()->destroy();
        return redirect()->to('login');
    }
}
