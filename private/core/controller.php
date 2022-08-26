<?php

/*
* main Controller class: this have all the common function for all controlllers
*/

class Controller 
{
/*
* view method
*/

    public function view($view,$data = array()){
        // extract($data);

        if(file_exists(ROOT."/private/views/".$view. ".php"))
        {
            include(ROOT."/private/views/".$view. ".php");
        }else{
            require(ROOT."/private/views/404.php");
        }
    }
/*
* Load_model method
*/
    public function load_model($model){
        if (file_exists(ROOT."/private/models/".ucfirst($model).".php")) {
            require(ROOT."/private/models/".ucfirst($model).".php");
            return $model = new $model();
        }
        return false;
    }


}
