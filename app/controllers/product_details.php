<?php

Class Product_details extends Controller{ 


    public function index($id){


        $id = (int)$id;
        
        $User = $this->load_model('User');
        $user_data = $User->check_login(true);

        
        if(is_object($user_data)){

            $data['user_data'] = $user_data;
        }

        $DB = Database::newInstance();

        $ROW = $DB->read("select * from products where id = :id",['id'=>$id]); 

        $data['page_title'] = "Product Details";
        $data['ROW'] = is_array($ROW) ? $ROW[0] : false;

        $data['page_title'] = "Home";
        $this->view("product-details",$data);
    }



}
