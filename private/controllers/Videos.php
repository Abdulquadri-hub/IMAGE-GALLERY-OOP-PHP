<?php

/*
* Videos controller class 
*/

class Videos extends Controller 
{
    public function index($id = null)
    {
        $data['page_title'] = "Videos";

        $load_videos = new Load_videos();

        $find = isset($_GET['search']) ? $_GET['search'] : "";
        $data['videos'] = $load_videos->get_videos($find);

        $this->view("catalog/Videos",$data);
    }
}
