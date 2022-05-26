<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class StaffController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "client") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("ClientUser/home");
    }
}
