<?php

Class Message{

    protected $error = array();

    //insert into database
    public function create($DATA){

        $this->error = array();

        $DB = Database::newInstance();

        $arr['firstname']   = ucwords($DATA['firstname']);
        $arr['subject']   = $DATA['subject'];
        $arr['message']   = $DATA['message'];
        $arr['email']     = $DATA['email'];
        $arr['date'] = date("Y-m-d H:i:s");

        if(!preg_match("/^[a-zA-Z ]+$/", trim($arr['firstname']))){

            $this->error[] = "Please enter a valid firstname";


        }

        if(!preg_match("/^[a-zA-Z ]+$/", trim($arr['subject']))){

            $this->error[] = "Please enter a valid subject name";


        }

        if(empty($arr['message'])){

            $this->error[] = "Please enter a valid message name";


        }


        if(!filter_var($arr['email'], FILTER_VALIDATE_EMAIL)){

            $this->error[] = "Please enter a valid email name";


        }



        if(count($this->error) == 0){

            $query = "insert into contact (firstname, subject, message, email, date) values (:firstname, :subject, :message, :email, :date)";
            $check = $DB->write($query,$arr); 

            if($check){

                return true;
  
            }

        }

        return $this->error;

       

    }


    public function delete($id){

        $DB = Database::newInstance();
        $id = (int)$id;
        $query = "delete from contact where id = '$id' limit 1";
        $DB->write($query);

    }

    public function get_one($id){

        $id = (int)$id;

        $DB = Database::newInstance();
        $data = $DB->read("select * from contact where id = '$id' limit 1");
        return $data[0];

    }

    public function get_all(){

        $DB = Database::newInstance();
        return $DB->read("select * from contact order by id desc");


    }



}