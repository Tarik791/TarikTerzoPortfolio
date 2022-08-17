<?php

class Special_skills{

    protected $error = array();

    //insert into database
    public function create($DATA){

        $this->error = array();

        $DB = Database::newInstance();

        $arr['skill']   = $DATA['skill'];
        $arr['message']   = $DATA['message'];
        $arr['date'] = date("Y-m-d H:i:s");

        if(empty($arr['skill'])){

            $this->error[] = "Please enter a valid skill";


        }

        if(empty($arr['message'])){

            $this->error[] = "Please enter a valid message";


        }



        if(count($this->error) == 0){

            $query = "insert into special_skills (skill, message, date) values (:skill, :message, :date)";
            $check = $DB->write($query,$arr); 

            if($check){

                return true;
  
            }

        }

        return $this->error;

       

    }


    public function get_one($id){

        $id = (int)$id;

        $DB = Database::newInstance();
        $data = $DB->read("select * from special_skills where id = '$id' limit 1");
        return $data[0];

    }

    public function delete($id){

        $DB = Database::newInstance();
        $id = (int)$id;
        $query = "delete from special_skills where id = '$id' limit 1";
        $DB->write($query);

    }


    public function get_all(){

        $DB = Database::newInstance();
        return $DB->read("select * from special_skills order by id desc");


    }


}