<?php

namespace App\Controllers;

class Student extends BaseController
{
    public function index()
    {
        return view('dashboard');
    }
    public function dashboard()
    {
        return view('student/dashboard');

    }
}

?>