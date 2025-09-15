<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminloginModel;
use CodeIgniter\HTTP\ResponseInterface;

class Forms extends BaseController
{
    public function index()
    {
       
       
    }

    public function signup(){
        return view('admin/sign_up');
    }

    public function dashboard(){
        return view('admin/dashboard',);
    }
}
