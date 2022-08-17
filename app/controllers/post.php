<?php

Class Post extends Controller{ 


    public function index($url_address = ''){
        
    
        //check if its a search
        $search = false;
        if(isset($_GET['find'])){

            $find = addslashes($_GET['find']);
            $search = true;

        }



        $User = $this->load_model('User');
        $image_class = $this->load_model('Image');

        //just type true in check login and user must be login
        $user_data = $User->check_login();

        
        if(is_object($user_data)){

            $data['user_data'] = $user_data;
        }

        $DB = Database::newInstance();

        //search
        if($search){
            $arr['title'] = "%" . $find . "%";

            $ROWS = $DB->read("select * from blogs where title like :title ",$arr); 

        }else{

            $arr = array();
            $arr['url_address'] = $url_address;
            $ROWS = $DB->read("select * from blogs where url_address = :url_address limit 1", $arr); 

        }
        $data['page_title'] = "Post - Unknown";

        if($ROWS){
   
            $data['page_title'] = $ROWS[0]->title;
            //$ROWS[0]->image = $image_class->get_thumb_blog_post($ROWS[0]->image);

            $ROWS[0]->user_data = $User->get_user($ROWS[0]->user_url);


        }


        $data['ROW'] = $ROWS[0];
        //search on display
        $data['show_search'] = true;
        $this->view("single_post",$data);
    }



}
