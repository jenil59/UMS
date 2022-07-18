<?php

namespace App\Controllers;

use App\Libraries\Hash;
use App\Models\StudentModel;


class Student extends BaseController
{
    function __construct()
    {
        // echo $this->router->fetch_method();
        // die();
        // if(!session()->has('userdata')){
        //     header("Location: /student ");
        //     exit;
        // }
            
    }
    
    // public function index(){
    //         return view('student/login');
    // }

    public function dashboard(){

        return view('student/dashboard');
    }

    

    public function logout()
    {
        print_r(session()->get('userdata'));
        
        session()->destroy();

        print_r(session()->get('userdata'));



        return redirect()->to('/student');
    }



}
    ?>