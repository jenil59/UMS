<?php

namespace App\Controllers;

use App\Models\LoginModel;

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
                    'required'=>'Please Enter Your First Name',
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
                ],
            'agree'=>[
                'label'=>'agree',
                'rules'=>'required',
                'error'=>[
                    'required'=>'Mark this checkbox to continue '
                    ]
            ]

        ]);

        if(!$validation){

            return view('/registration',['validation'=>$this->validator]);

        }

        
        $p_data=$this->request->getPost();
        
        $data=[
            'first_name'=>$this->request->getPost('firstname'),
            'Last_Name'=>$this->request->getPost('lastname'),
            'gender'=>$this->request->getPost('gender'),
            'dob'=>$this->request->getPost('dob'),
            'Mobile'=>$this->request->getPost('mobile'),
            'Email'=>$this->request->getPost('email'),
            'Pass'=>$this->request->getPost('password'),
            'Branch'=>$this->request->getPost('branch'),
            'Sem'=>$this->request->getPost('semester')
        ];
        var_dump($data);
        
        $login=new LoginModel();
        // $login->insert();
        

        return view("login");


    }

    public function about(){
        return view("aboutUS");
    }

    public function contact(){
        return view("contactUS");
    }


}
