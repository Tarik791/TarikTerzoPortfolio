<?php

Class Admin extends Controller{ 

    public function index(){


        $User = $this->load_model('User');
        $user_data = $User->check_login(true, ["admin"]);

        
        if(is_object($user_data)){

        $data['user_data'] = $user_data;
        }

        $data['page_title'] = "Admin";
        $this->view("admin/index",$data);
    }


    //method for categories section
    public function categories(){


        $User = $this->load_model('User');
        $user_data = $User->check_login(true, ["admin"]);

        
        if(is_object($user_data)){

        $data['user_data'] = $user_data;
        }



        $DB = Database::newInstance();
        $categories_all = $DB->read("select * from categories order by id desc");
        $categories = $DB->read("select * from categories where disabled = 0 order by id desc");

        //Load model category
        $category = $this->load_model("Category");
        $tbl_rows = $category->make_table($categories_all);
        $data['tbl_rows'] = $tbl_rows;
        $data['categories'] = $categories;


        $data['page_title'] = "Admin";
        //active in sidebar
        $data['current_page'] = "categories";
        $this->view("admin/categories",$data);
    }



      //method for products section
      public function products(){


        $User = $this->load_model('User');
        $user_data = $User->check_login(true, ["admin"]);

        
        if(is_object($user_data)){

        $data['user_data'] = $user_data;
        }



        $DB = Database::newInstance();
        $products = $DB->read("select * from products order by id desc");

        $categories = $DB->read("select * from categories where disabled = 0 order by id desc");
        
        //Load model category
        $product = $this->load_model("Product");
        $category = $this->load_model("Category");

        $tbl_rows = $product->make_table($products, $category);
        $data['tbl_rows'] = $tbl_rows;
        $data['categories'] = $categories;


        $data['page_title'] = "Admin";
        //active in sidebar
        $data['current_page'] = "products";
        $this->view("admin/products",$data);
    }


    public function users($type = "customers"){


        $User = $this->load_model('User');
        $user_data = $User->check_login(true, ["admin"]);

        
        if(is_object($user_data)){

        $data['user_data'] = $user_data;

        }



       if($type == "admins"){

        $users = $User->get_admins();


       }else{

        $users = $User->get_customers();

       }



        $data['users'] = $users;

        $data['page_title'] = "Admin - $type";
        //active in sidebar
        $data['current_page'] = "users";
        $this->view("admin/users",$data);
    }

    public function settings($type = ''){


        $User = $this->load_model('User');
        $Settings = new Settings();


        $user_data = $User->check_login(true, ["admin"]);

        
        if(is_object($user_data)){

        $data['user_data'] = $user_data;

        }

        //Select the right page
        if($type == "socials"){
        
        //Save
        if(count($_POST) > 0){

            $errors = $Settings->save_settings($_POST);
            header("Location: " . ROOT . "admin/settings/socials");
            die;
        }

        $data['settings'] = $Settings->get_all_settings();

    }else
    if($type == "slider_images"){

        $data['action'] = "show";

        
        $Slider = $this->load_model('Slider');

        //read all slider images
        $data['rows'] = $Slider->get_all();

        if(isset($_GET['action']) && $_GET['action'] == "add"){


            $data['action'] = "add";

            //IF new row was posted
            if(count($_POST) > 0){
                
                $Image = $this->load_model('Image');

                $data['errors'] = $Slider->create($_POST, $_FILES, $Image);

                $data['POST'] = $_POST;

                header("Location: " . ROOT . "admin/settings/slider_images");
                die;
            }

        }else
        if(isset($_GET['action']) && $_GET['action'] == "edit"){
        

            $data['action'] = "edit";
            $data['id'] = null;
            if(isset($_GET['id'])){

                $data['id'] = $_GET['id'];

            }

        
        }else
        if(isset($_GET['action']) && $_GET['action'] == "delete"){


            $data['action'] = "add";

        
        }else
        if(isset($_GET['action']) && $_GET['action'] == "delete_confirmed"){

        
        
        }


    }

        $data['type'] = $type;
        $data['page_title'] = "Admin - $type";
        //active in sidebar
        $data['current_page'] = "settings";
        $this->view("admin/settings",$data);
    }



    public function messages($type = ''){

        $type = 'Messages';

        $User = $this->load_model('User');
        $Message = $this->load_model('Message');


        $user_data = $User->check_login(true, ["admin"]);

        
        if(is_object($user_data)){

        $data['user_data'] = $user_data;

        }

        $mode = "read";
        if(isset($_GET['delete'])){

            $mode = "delete";

        } 

        if(isset($_GET['delete_confirmed'])){

            $mode = "delete_confirmed";
            $id = $_GET['delete_confirmed'];
            $messages = $Message->delete($id);

        } 
        

      



        if($mode == "delete"){

            $id = $_GET['delete'];
            $messages = $Message->get_one($id);

        }else{

            $messages = $Message->get_all();

        }


        $data['mode'] = $mode;
        $data['messages'] = $messages;

        $data['page_title'] = "Admin - $type";
        //active in sidebar
        $data['current_page'] = "Messages";
        $this->view("admin/messages",$data);
    }
     


    public function blogs($type = ''){

        $type = 'Blog Posts';

        $User = $this->load_model('User');
        $post_class = $this->load_model('post');
        $image_class = $this->load_model('Image');



        $user_data = $User->check_login(true, ["admin"]);

        
        if(is_object($user_data)){

        $data['user_data'] = $user_data;

        }

        $mode = "read";
        if(isset($_GET['delete'])){

            $mode = "delete";

        } 


        if(isset($_GET['add_new'])){

            $mode = "add_new";

        } 
        
        if(isset($_GET['edit'])){

            $mode = "edit";

        } 


        if(isset($_GET['delete_confirmed'])){

            $mode = "delete_confirmed";
            $id = $_GET['delete_confirmed'];
            $blogs = $post_class->delete($id);

        } 
        

      


        if($mode == "edit"){

            $id = $_GET['edit'];
            $blogs = $post_class->get_one($id);

            $data['POST'] = (array)$blogs;



        }else
        if($mode == "delete"){

            $id = $_GET['delete'];
            $blogs = $post_class->get_one($id);

            if($blogs){

                
                    
                if(file_exists($blogs->image)){

                    $blogs->image = $image_class->get_thumb_post($blogs->image);
                }

                $blogs->user_data = $User->get_user($blogs->user_url);
      

            

        }

        }else{

            $blogs = $post_class->get_all();


            if($blogs){

                foreach($blogs as $key => $row){
                    
                    if(file_exists($blogs[$key]->image)){

                        $blogs[$key]->image = $image_class->get_thumb_post($blogs[$key]->image);
                    }

                    $blogs[$key]->user_data = $User->get_user( $blogs[$key]->user_url);
          
    
                }
    
            }

        }

        //if something was posted
        if(count($_POST) > 0){


            if($mode == "edit"){


                $post_class->edit($_POST, $_FILES, $image_class);

            }else{

                $post_class->create($_POST, $_FILES, $image_class);

            }


            if(isset($_SESSION['error']) && $_SESSION['error'] != ""){

                $data['errors'] = $_SESSION['error'];
                $data['POST'] = $_POST;

            }else{

                redirect("admin/blogs");

            }

        }
        $data['mode'] = $mode;
        $data['blogs'] = $blogs;
        $data['page_title'] = "Admin - $type";
        //active in sidebar
        $data['current_page'] = "blogs";
        $this->view("admin/blogs",$data);
    }



    public function special_skills(){


        $User = $this->load_model('User');
        $Special_skills = $this->load_model('Special_skills');
        $user_data = $User->check_login(true, ["admin"]);

        
        if(is_object($user_data)){

        $data['user_data'] = $user_data;
        }

        //Save
        if($_SERVER['REQUEST_METHOD'] == "POST"){


            $Special_skills->create($_POST);
            redirect("admin/special_skills");
        }

        //delete
        if(isset($_GET['delete'])){

            $id = $_GET['delete'];

            $special_skills = $Special_skills->delete($id);
            redirect("admin/special_skills");

        } 

        $special_skills = $Special_skills->get_all();


        $data['special_skills'] = $special_skills;

        $data['page_title'] = "Admin";
        $this->view("admin/special_skills",$data);
    }
   



}
