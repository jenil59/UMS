<?php
namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Noauth implements FilterInterface{

    public function before(RequestInterface $request,$arguments = null)
    {
        // var_dump(session()->get('isLoggin'));die();


        if (session()->get('userdata')) {

			if (session()->get('userdata')['role'] == "0") {
				return redirect()->to('student');
			}

			if (session()->get('userdata')['role'] == "1") {
				return redirect()->to('teacher');
			}
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {

    }

}



?>