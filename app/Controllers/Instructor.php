<?php

namespace App\Controllers;
use App\Libraries\Hash;
use App\Models\StudentModel;

class Instructor extends BaseController
{
    function __construct()
    {
        if(session()->has('userdata') && session()->get('userdata')['role']=='0')
        {
            header("Location: /student");
            exit;
        }


        
    }

    public function index()
    {
        return view('teacher/login');
    }

    public function getAccess()
    {
        
        if(count($this->request->getPost())==0){
            return view('login');
        }

        $validation=$this->validate([
            'username'=>[
                'label'=>'email',
                'rules'=>'required|valid_email',
                'errors'=>[
                    'required'=>'Please Enter Your email',
                    'valid_email'=>'Email Address Is not Valid'
                ]
            ],
            'password'=>[
                'label'=>'password',
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Please Enter Your password',
                ]
            ]


        ]);

        if(!$validation){

            return view('/teacher',['validation'=>$this->validator]);

        }


        if($this->request->getPost('loginSubmit'))
        {
            $session=session();
            $login =new StudentModel();
            $login_condotion_array=[
                'Email'=>$this->request->getPost('username'),
                'Pass'=>$this->request->getPost('password')
            ];
            $rData=$login->where('Email',$this->request->getPost('username'))->first();
            if($rData==NULL)
            {
                $session->setFlashdata('faildStatus','1');
                return redirect()->to('/teacher')->withInput();
            }
            $check=Hash::check_password($this->request->getPost('password'),$rData['Pass']);
            var_dump($check);
            if(!$check)
            {
                $session->setFlashdata('faildStatus','1');
                return redirect()->to('/teacher')->withInput();
            }
            $rData['role']='0';
            $session->set('userdata',$rData);

           return redirect()->to('/teacher');
            
        }
    }
    
    public function login()
    {
        
    }

    
}
