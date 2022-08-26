<?php

/*
* About controller class 
*/

class About extends Controller 
{
    public function index($id = null)
    {
        $data['page_title'] = "About";
        $this->view("catalog/about",$data);
    }
}
