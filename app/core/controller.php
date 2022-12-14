<?php

Class Controller {

    //load view, frontend
    public function view($path,$data = []){
        
        // extract data

        if(is_array($data)){

            extract($data);

        }



        if(file_exists("../app/views/" . THEME .  $path . ".php")){

            include "../app/views/" . THEME . $path . ".php";
        
        }else{

            include "../app/views/" . THEME . "404.php";
        }
    }

    //load files from models
    public function load_model($model){

        if(file_exists("../app/models/" . strtolower($model) . ".class.php")){

            include "../app/models/" . strtolower($model) . ".class.php";
            return $a = new $model();
        }

        return false;
    }
}