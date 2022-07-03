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
            'firstname'=>[
                'label'=>'First Name',
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Please Enter Your Name',
                ]
            ],
            'lastname'=>[
                'label'=>'Last Name',
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Please Enter Your Last Name',
                ]
            ],
            'dob'=>[
                'label'=>'Date Of Birth',
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Please Enter Your Date Of Birth',
                ]
            ],
            'mobile'=>[
                'label'=>'Mobile',
                'rules'=>'required|numeric|regex_match[/^[0-9]{10}$/]',
                'errors'=>[
                    'required'=>'Please Enter Your mobile',
                    'regex_match' => 'Mobile number must be a valid mobile number.'
                ]
            ],
            'branch'=>[
                'label'=>'Branch',
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Please select Your branch',
                ]
            ],
            'semester'=>[
                'label'=>'semester',
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Please select Your semester',
                ]
            ],
            'gender'=>[
                'label'=>'gender',
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Please select Your gender',
                ]
            ],
            'email'=>[
                'label'=>'email',
                'rules'=>'required|valid_email',
                'errors'=>[
                    'required'=>'Please Enter Your email',
                ]
            ],
            'password'=>[
                'label'=>'password',
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Please Enter Your password',
                ]
            ],
            'confirmPassword'=>[
                'label'=>'Name',
                'rules'=>'required|matches[password]',
                'errors'=>[
                    'required'=>'Please Enter Your confirmPassword',
                    'matches' => 'Confirm password and password must be same.'
                ]
            ]

        ]);

        if(!$validation){

            return view('/registration',['validation'=>$this->validator]);

        }

        return view("login");


    }

    public function about(){
        return view("aboutUS");
    }

    public function contact(){
        return view("contactUS");
    }


}
