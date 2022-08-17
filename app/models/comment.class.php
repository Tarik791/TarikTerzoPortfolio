<?php

Class Comment{



    //insert into database
    public function create($DATA){

        $this->error = array();

        $DB = Database::newInstance();

        $arr['name'] = ucwords($DATA['name']);
        $arr['message'] = htmlspecialchars($DATA['message']);
        $arr['date']  = date("Y-m-d H:i:s");

        if(!preg_match("/^[a-zA-Z ]+$/", trim($arr['name']))){

            $this->error[] = "Please enter a valid name";


        }


        if(empty($arr['message'])){

            $this->error[] = "Please enter a valid message";


        }






        if(count($this->error) == 0){

            $query = "insert into comment (name, message, date) values (:name, :message,:date)";
            $check = $DB->write($query,$arr); 

            if($check){

                return true;
  
            }

        }

        return $this->error;

       

    }







    //get all categories
    public function get_all(){


        $DB = Database::newInstance();
        return $DB->read("select * from comment order by id desc");
        




    }




}