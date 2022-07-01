<?php

namespace App\Controllers;

class AccessController extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('registration');
    }

    public function about(){
        return view("aboutUS");
    }

    public function contact(){
        return view("contactUS");
    }


}
