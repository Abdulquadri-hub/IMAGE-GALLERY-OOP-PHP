<?php

class User
{
    public function login($POST)
    {
        // Login user
        $_SESSION['error'] = "";

        if ($_SESSION['error'] === "") 
        {
                $arr['email'] = esc($POST['email']);
                $arr['password'] = esc($POST['password']);

                $database = new Database();
                $query = $query = "select * from image_users where email = :email && password = :password limit 1";
                $data = $database->query($query, $arr);

                if (is_array($data)) 
                {
                    $data = $data[0];
                    $_SESSION['user_url'] = $data->url_address;
                    $_SESSION['user_email'] = $data->email;
                    redirect("photos");
                    // die;
                }
                
        }
    }
    public function signup($POST)
    {
        // Add user
        $_SESSION['error'] = "";

        if ($_SESSION['error'] === "") 
        {
                $arr['email'] = esc($POST['email']);
                $arr['password'] = esc($POST['password']);
                $arr['date'] = date("Y-m-d H:i:s");
                $arr['image'] = "";
                $arr['url_address']= randomString(10);

                $database = new Database();
                $query = $query = "insert into image_users (email,password,date,image,url_address) values (:email,:password,:date,:image,:url_address)";
                $database->query($query, $arr);
                redirect("login");
        }
    }

    public function get_single_user($url_address)
    {
        $database = new Database();
        $query = "select * from images where url_address = :url limit 1";
        $arr['url'] = $url_address;
        $data = $database->query($query,$arr);
        return $data[0];
    }

    static public function is_logged_in()
    {
        if (isset($_SESSION['user_url']) && isset($_SESSION['user_email'])) 
        {
            return true;
        }
        return false;
    }
}