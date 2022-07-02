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
    public function registration()
    {
        return view('/registration');

    }
    public function register()
    {
        // if($this->input-)
        $validation=$this->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'dob'=>'required',
            'mobile'=>'required',
            'branch'=>'required',
            'smester'=>'required',
            'gender'=>'required',
            'email'=>'required',
            'password'=>'required',
            'confirmPassword'=>'required'

        ]);

        if(!$validation){

            return view('/registration',['validation'=>$this->validator]);

        }


    }

    public function about(){
        return view("aboutUS");
    }

    public function contact(){
        return view("contactUS");
    }


}
