<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class StaffController2 extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "staff2") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("SecondDistrict/home2");
    }
}
