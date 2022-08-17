<?php

Class Blog extends Controller{ 


    public function index(){
        
    
        //check if its a search
         //$search = false;
         //if(isset($_GET['find'])){

             //$find = addslashes($_GET['find']);
             //$search = true;

         //}



        $User = $this->load_model('User');
        $image_class = $this->load_model('Image');
        $Comment = $this->load_model('Comment');

        //just type true in check login and user must be login
        $user_data = $User->check_login();

        
        if(is_object($user_data)){

            $data['user_data'] = $user_data;
        }

        $DB = Database::newInstance();

        //search
        //if($search){
            // $arr['title'] = "%" . $find . "%";

            // $ROWS = $DB->read("select * from blogs where title like :title ",$arr); 

        //}else{

            $ROWS = $DB->read("select * from blogs order by id desc"); 

         //}
        $data['page_title'] = "Blog";

        if($ROWS){

            foreach($ROWS as $key => $row){
                
                $ROWS[$key]->image = $image_class->get_thumb_blog_post($ROWS[$key]->image);


                $ROWS[$key]->user_data = $User->get_user($ROWS[$key]->user_url);

            }

        }

        $data['errors'] = array();

        if(count($_POST) > 0){

            $data['POST'] = $_POST;
            $data['errors'] = $Comment->create($_POST);

        }

        $comments = $Comment->get_all();
        $data['comments'] = $comments;


        $data['ROWS'] = $ROWS;
        //search on display
        //$data['show_search'] = true;
        $this->view("blog",$data);
    }



}
