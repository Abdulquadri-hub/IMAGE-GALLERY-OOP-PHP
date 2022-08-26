<?php

/*
* Upload controller class 
*/

class Upload extends Controller 
{
    public function index($id = null)
    {
        // this need to be included
        // the user_call_array_function is INDEX
    }

    public function image()
    {
        if (!User::is_logged_in()) 
        {
            redirect("login");
            die;
        }

        $data['page_title'] = "Upload Image";

        if(isset($_FILES['file']))
        {
            $upload_file = new Upload_file();
            $upload_file->upload($_POST,$_FILES);
        }
        $this->view("catalog/upload_image",$data);
    }

    public function videos($id = null)
    {
        if (!User::is_logged_in()) 
        {
            redirect("login");
            die;
        }

        $data['page_title'] = "Upload Videos";

        if (isset($_FILES['file'])) 
        {
            $upload_file = new Upload_file();
            $upload_file->upload_videos($_POST,$_FILES);
        }
        $this->view("catalog/upload_videos",$data);
    }
}