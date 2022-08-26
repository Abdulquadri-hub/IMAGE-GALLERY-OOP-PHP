<?php

class Load_images 
{
    public function get_images($find = "")
    {
        $database = new Database();
        $limit = 10;
        $page_number = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $page_number = $page_number < 1 ? 1 : $page_number;

        $offset = ($page_number - 1) * $limit;

        if ($find == "") 
        {
            $query = "select * from images order by id desc limit $limit offset $offset";
            return $database->query($query);
        }else{

            $query = "select * from images where title like '%$find%' order by id desc limit $limit offset $offset";
            return $database->query($query);
        }
    }

    public function get_total()
    {
        $database = new Database();
        $query = "select * from images";
        return count($database->query($query));
    }

    public function get_single_image($url_address)
    {
        $database = new Database();
        $query = "update images set views = views + 1 where url_address = :url limit 1";
        $arr['url'] = $url_address;
        $database->query($query,$arr);

        $query = "select * from images where url_address = :url limit 1";
        $arr['url'] = $url_address;
        $data = $database->query($query,$arr);
        return $data[0];
    }
}
