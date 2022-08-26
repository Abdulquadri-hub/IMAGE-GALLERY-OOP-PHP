<?php

/*
* Home controller class 
*/

class Home extends Controller 
{
    public function index($id = null)
    {
        $data['page_title'] = "Photos";

        //pagination
        $pag = new Pagination();
        $data['page_next'] = $pag->generate_link($pag->current_page_number() + 1);
        $data['page_prev'] = $pag->generate_link($pag->current_page_number() - 1);
        $data['page_1'] = $pag->generate_link(1);
        $data['page_2'] = $pag->generate_link($pag->current_page_number() + 1);
        $data['page_3'] = $pag->generate_link($pag->current_page_number() + 2);
        $data['page_4'] = $pag->generate_link($pag->current_page_number() + 3);
        $data['page_current'] = $pag->current_page_number();


        // load images
        $load_images = new Load_images();
        $data['page_total'] = $load_images->get_total();

        $find = isset($_GET['search']) ? $_GET['search'] : "";
        $data['images'] = $load_images->get_images($find);


        $this->view("catalog/index", $data);
    }
}
