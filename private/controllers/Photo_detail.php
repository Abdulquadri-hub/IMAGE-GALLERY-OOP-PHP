<?php

/*
* Photo_detail controller class 
*/

class Photo_detail extends Controller 
{
    public function index($url_address = "")
    {
        $data['page_title'] = "Photo details";
        
        $load_images = new Load_images();
        
        $data['single_image'] = $load_images->get_single_image($url_address);
        $data['random_images'] = $load_images->get_images();
        $this->view("catalog/Photo_detail",$data);
    }
}
