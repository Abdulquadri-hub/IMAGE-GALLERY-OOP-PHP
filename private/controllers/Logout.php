<?php

/*
* Logout controller class 
*/

class Logout extends Controller 
{
    function index($id = null)
    {
/**
 *  logout user
 */ 
        if (isset($_SESSION['user_url'])) 
        {
            unset($_SESSION['user_url']);
        }
        if (isset($_SESSION['user_email'])) 
        {
            unset($_SESSION['user_email']);
        }
        
        redirect("photos");
    }
}
