<?php

Class Contact extends Controller{ 


    public function index(){
        

        $User = $this->load_model('User');
        $image_class = $this->load_model('Image');
        $Message = $this->load_model('Message');

        //just type true in check login and user must be login
        $user_data = $User->check_login();

        
        if(is_object($user_data)){

            $data['user_data'] = $user_data;
            
        }

        $DB = Database::newInstance();

        $data['errors'] = array();
        if(count($_POST) > 0){

            $data['POST'] = $_POST;
            $data['errors'] = $Message->create($_POST);

            if(!is_array($data['errors']) && $data['errors']){
                
                redirect("contact?success=true");


            }
        }

        $data['page_title'] = "Contact";


        $this->view("contact",$data);
    }



}
