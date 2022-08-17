<?php

Class Home extends Controller{ 


    public function index(){
    
        //check if its a search
        $search = false;
        if(isset($_GET['find'])){

            $find = addslashes($_GET['find']);
            $search = true;

        }



        $User = $this->load_model('User');
        $Special_skills = $this->load_model('Special_skills');

        $image_class = $this->load_model('Image');
        //just type true in check login and user must be login
        $user_data = $User->check_login();

        
        if(is_object($user_data)){

            $data['user_data'] = $user_data;
        }

        $DB = Database::newInstance();

        //search
        if($search){
            $arr['description'] = "%" . $find . "%";

            $ROWS = $DB->read("select * from products where description like :description ",$arr); 

        }else{

            $ROWS = $DB->read("select * from products"); 

        }
        $data['page_title'] = "Home";

        if($ROWS){

            foreach($ROWS as $key => $row){
                
                $ROWS[$key]->image = $image_class->get_thumb_post($ROWS[$key]->image);

            }

        }

        $ROWS2 = $DB->read("select * from special_skills order by id desc"); 


        //Get all slider information
        $Slider = $this->load_model('Slider');
        $data['slider'] = $Slider->get_all();

        $data['ROWS'] = $ROWS;
        $data['ROWS2'] = $ROWS2;

        //search on display
        $data['show_search'] = true;
        $this->view("index",$data);
    }



}
