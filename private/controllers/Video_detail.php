<?php

/*
* Video_detail controller class 
*/

class Video_detail extends Controller 
{
    public function index($url_address)
    {
        $data['page_title'] = "Video_details";
        
        $load_videos = new  Load_videos();

        $data['single_video'] = $load_videos->get_single_videos($url_address);
        $data['random_videos'] = $load_videos->get_videos();
        $this->view("catalog/Video_detail",$data);
    }
}
