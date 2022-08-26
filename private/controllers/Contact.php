<?php

/*
* Contact controller class 
*/

class Contact extends Controller 
{
    public function index($id = null)
    {
        $data['page_title'] = "Contact";
        $this->view("catalog/contact",$data);
    }
}
