<?php

/*
* Login controller class 
*/

class Login extends Controller 
{
    public function index($id = null)
    {
        $data['page_title'] = "Login";
        if(count($_POST) > 0 )
        {
            $user = new User();
            $user->login($_POST);
        }
        $this->view("catalog/login",$data);
    }
}
