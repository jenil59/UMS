<?php

namespace App\Controllers;

use App\Libraries\Hash;
use App\Models\StudentModel;

use function PHPUnit\Framework\isEmpty;

class AccessController extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    private function check_session($feild,$value)
    {
        $sess_data=session()->get('userdata');
        return $sess_data[$feild]==$value;
    }
    
    public function login()
    {
        
        if(session()->has('userdata'))
        {
           return  redirect()->to('/student');
        }

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

            return view('/login',['validation'=>$this->validator]);

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
                return redirect()->to('/login')->withInput();
            }
            $check=Hash::check_password($this->request->getPost('password'),$rData['Pass']);
            var_dump($check);
            if(!$check)
            {
                $session->setFlashdata('faildStatus','1');
                return redirect()->to('/login')->withInput();
            }
            $session->set('userdata',$rData);
           return redirect()->to('/student');
            
        }

        return view('login');
       
    }
    public function registration()
    {
        if(session()->has('userdata'))
        {
           return  redirect()->to('/student');
        }

        return view('/registration');

    }
    
    public function register()
    {
        if(session()->has('userdata'))
        {
           return  redirect()->to('/student');
        }

        
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
                'rules'=>'required|valid_email|is_unique[tlb_student_details.email]',
                'errors'=>[
                    'required'=>'Please Enter Your email',
                    "valid_email" => "Email address is not in format",
                    "is_unique" => "Email address already exists"

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

        
        $date=date_create_from_format("d/m/Y",$this->request->getPost('dob'));
        $new_date = date_format($date,"Y-m-d");
        $data=[
            'first_name'=>$this->request->getPost('firstname'),
            'Last_Name'=>$this->request->getPost('lastname'),
            'gender'=>$this->request->getPost('gender'),
            'dob'=>$new_date,
            'Mobile'=>$this->request->getPost('mobile'),
            'Email'=>$this->request->getPost('email'),
            'Pass'=>$this->request->getPost('password'),
            'Branch'=>$this->request->getPost('branch'),
            'Sem'=>$this->request->getPost('semester'),
            'Enrollment'=>190102
        ];
        $login=new StudentModel();
        $login->insert($data);
        $session=session();
        $session->setFlashdata('status', '1');
        return redirect()->to('/login');
    }

    public function about(){
        return view("aboutUS");
    }

    public function contact(){
        return view("contactUS");
    }


    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }


}
