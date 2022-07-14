<?php

namespace App\Controllers;

class Student extends BaseController
{
    private function check_session($feild,$value)
    {
        $sess_data=session()->get('userdata');
        return $sess_data[$feild]==$value;
    }
    
    public function index(){
         if(!session()->has('userdata'))
            return redirect()->to('/login');


            
        
            return view('student/dashboard');
    }


}
    ?>