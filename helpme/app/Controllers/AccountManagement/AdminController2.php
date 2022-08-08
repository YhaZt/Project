<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController2 extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "admin2") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("admin2/home");
    }
}
