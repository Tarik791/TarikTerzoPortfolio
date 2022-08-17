<?php

Class Profile extends Controller{ 

    public function index($url_address = null){


        $User = $this->load_model('User');
        $user_data = $User->check_login(true);

        if($url_address){
            $_SESSION['user_url'] = isset($_SESSION['user_url']) ? $_SESSION['user_url'] : '';
			$url_address = $url_address == 'home' ? $_SESSION['user_url'] : $url_address;
            $profile_data = $User->get_user($url_address);

        }else{

            $profile_data = $user_data;

        }

        if(is_object($user_data)){
            $data['user_data'] = $user_data;

        }

        
        if(is_object($user_data)){

        $data['user_data'] = $user_data;
        }

        $data['profile_data'] = $profile_data;
        $data['page_title'] = "Profile";
        $this->view("profile",$data);
    }



}
