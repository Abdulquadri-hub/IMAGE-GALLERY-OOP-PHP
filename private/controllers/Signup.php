<?php

/*
* Signup controller class 
*/

class Signup extends Controller 
{
    public function index($id = null)
    {
        $data['page_title'] = "Signup";
        if(count($_POST) > 0 )
        {
            $user = new User();
            $user->signup($_POST);
        }
        $this->view("catalog/signup",$data);
    }
}
