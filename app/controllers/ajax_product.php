<?php 

class Ajax_product extends Controller {


   //šaljemo podatke iz ajax kontrolera
   public function index(){


    //hvatamo podatke
    //$_SESSION['error'] = "";

    //$data = file_get_contents("php://input");


    $data = (object)$_POST;


    
    //šaljemo podatke
    if(is_object($data) && isset($data->data_type)){

        $DB = Database::getInstance();
        $product = $this->load_model('Product');
        $category = $this->load_model('Category');
        $image_class = $this->load_model('Image');

        //Dodavanje kategorije
        if($data->data_type == 'add_product')
        {

          
            //add new product
            $check = $product->create($data, $_FILES, $image_class);
            
            if($_SESSION['error'] != "")
            {
                
                //error
                $arr['message'] = $_SESSION['error'];
                $_SESSION['error'] = "";
                $arr['message_type'] = "error";
                $arr ['data'] = "";
                $arr ['data_type'] = "add_new";

             
                echo json_encode($arr);

            }else{

                //info
                $arr['message'] = "Product added successfully!";
                $arr['message_type'] = "info";
                $cats = $product->get_all();
                $arr['data'] = $product->make_table($cats, $category);
                $arr['data_type'] = "add_new";


                echo json_encode($arr);


            }
        }else
        if($data->data_type == 'disable_row')
        {

        //da li je omogućeno ili neomogućeno stanje
        $disabled = ($data->current_state == "Enabled") ? 1 : 0;

        $id = $data->id;

        $query = "update categories set disabled = '$disabled' where id = '$id' limit 1";
        $DB->write($query);

          //error
          $arr['message'] = "";
          $_SESSION['error'] = "";
          $arr['message_type'] = "info";

          $cats = $product->get_all();
          $arr['data'] = $product->make_table($cats);

          $arr['data_type'] = "disable_row";

       
          echo json_encode($arr);


        }else
        if($data->data_type == 'edit_product'){

            //error
            $product->edit($data, $_FILES, $image_class);
            $arr['message'] = "Your row was successfully edited";
            $_SESSION['error'] = "";
            $arr['message_type'] = "info";


            $cats = $product->get_all();
            $arr['data'] = $product->make_table($cats, $category, $image_class); 
             
            $arr['data_type'] = "edit_product";

            echo json_encode($arr);



        }else
        if($data->data_type == 'delete_row')

        {
               //error
               $product->delete($data->id);
               $arr['message'] = "Your row was successfully deleted";
               $_SESSION['error'] = "";
               $arr['message_type'] = "info";


               $cats = $product->get_all();
               $arr['data'] = $product->make_table($cats); 
                
               $arr['data_type'] = "delete_row";

               echo json_encode($arr);

        }


    }

    }





}




?>