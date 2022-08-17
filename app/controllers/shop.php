<?php

Class Shop extends Controller{ 

    public function index(){


        //pagination formula
        $limit = 4;
        $page_number = isset($_GET['pg']) ? (int)$_GET['pg'] : 1 ;
        $page_number = $page_number < 1 ? 1 : $page_number;
        $offset = ($page_number - 1) * $limit;

        //check if its a search
        $search = false;
        if(isset($_GET['find'])){

            $find = addslashes($_GET['find']);
            $search = true;

        }

        $User = $this->load_model('User');
        $image_class = $this->load_model('Image');
        $user_data = $User->check_login();

        
        if(is_object($user_data)){

            $data['user_data'] = $user_data;
        }

        $DB = Database::newInstance();

        //search
        if($search){
            $arr['description'] = "%" . $find . "%";

            $ROWS = $DB->read("select * from products where description like :description limit $limit offset $offset",$arr); 

        }else{

            $ROWS = $DB->read("select * from products limit $limit offset $offset"); 

        }


        if($ROWS){

            foreach($ROWS as $key => $row){
                
                $ROWS[$key]->image = $image_class->get_thumb_post($ROWS[$key]->image);

            }

        }



        $data['ROWS'] = $ROWS;
        $data['page_title'] = "Shop";
        //search on display
        $data['show_search'] = true;
        $this->view("shop",$data);
    }

   


}
