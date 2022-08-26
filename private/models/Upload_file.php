<?php

class Upload_file 
{
    public function upload($POST, $FILES)
    {
        // upload the file
        $_SESSION['error'] = "";
        $destination = "";

        $allowed[] = 'image/jpeg';
        $allowed[] = 'video/mp4';
        if ($FILES['file']['name'] != "" && $FILES['file']['error'] == 0)
        {
            if (in_array($FILES['file']['type'], $allowed)) 
            {
                
            }else{
                $_SESSION['error'] = "Only jpeg files are allowed";
            }
        }

        if ($_SESSION['error'] === "") 
        {
            $folder = "uploads/";
            if (!is_dir($folder)) 
            {
                mkdir($folder,0777,true);
            }
                $destination = $folder . randomString(8).  "/" . $FILES['file']['name'];
                mkdir(dirname($destination));
                move_uploaded_file($FILES['file']['tmp_name'], $destination);

                $arr['title'] = esc($POST['title']);
                $arr['date'] = date("Y-m-d H:i:s");
                $arr['user_url'] = $_SESSION['user_url'];
                $arr['image'] = $destination;
                $arr['views'] = 0;
                $arr['url_address']= randomString(10);

                $database = new Database();
                $query = "insert into images (title,date,user_url,image,views,url_address) values (:title, :date,:user_url,:image,:views,:url_address)";
                $database->query($query, $arr);
                redirect("photos");
                die;
        }
    }

    // upload videos
    public function upload_videos($POST, $FILES)
    {
        // upload the file
        $_SESSION['error'] = "";
        $destination = "";

        // type of file
        $allowed[] = 'video/mp4';

        if ($FILES['file']['name'] != "" && $FILES['file']['error'] == 0)
        {
            if (in_array($FILES['file']['type'], $allowed)) 
            {
                
            }else{
                $_SESSION['error'] = "Only jpeg files are allowed";
            }
        }

        if ($_SESSION['error'] === "") 
        {
            $folder = "uploads_videos/";
            if (!is_dir($folder)) 
            {
                mkdir($folder,0777,true);
            }
                $destination = $folder . randomString(8).  "/" . $FILES['file']['name'];
                mkdir(dirname($destination));
                move_uploaded_file($FILES['file']['tmp_name'], $destination);

                $arr['title'] = esc($POST['title']);
                $arr['date'] = date("Y-m-d H:i:s");
                $arr['user_url'] = $_SESSION['user_url'];
                $arr['video'] = $destination;
                $arr['views'] = 0;
                $arr['url_address']= randomString(10);
                show($arr);

                $database = new Database();
                $query = "insert into videos (title,date,user_url,video,views,url_address) values (:title, :date,:user_url,:video,:views,:url_address)";
                echo $query;
                $database->query($query, $arr);
                redirect("videos");
                die;
        }
    }
}