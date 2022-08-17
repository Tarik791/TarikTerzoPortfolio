<?php $this->view("admin/header", $data); ?>   

<?php $this->view("admin/sidebar", $data); ?>   


<style type="text/css">

    .add_edit_panel{

        width:  500px;
        height: 650px;
        background-color: #eae8e8;
        box-shadow: 0px 0px 10px #aaa;
        position: absolute;
        padding: 6px;
        
    }



    .show{
        display: block;

    }

    .hide{
        display: none;
    }


    .edit_product_images{

        display: flex;
        width: 100%;
        

    }

    .edit_product_images img{

    flex: 1;
    width: 10px;
    height: 100px;
    margin: 2px;


}
</style>
<div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Product Categories<button class="btn btn-primary btn-xs" onclick="show_add_new(event)"><i class="fa fa-plus"></i> Add New</button></h4>
                                <!---add new product--->    
                              <div class="add_new add_edit_panel hide">


                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Add New Product</h4>
                      <form class="form-horizontal style-form" method="post">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Product Name:</label>
                              <div class="col-sm-10">
                                  <input id="description" name="description" type="text" class="form-control" autofocus>
                              </div>
                          </div>

                          <br><br style="clear:both;">

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Quantity:</label>
                              <div class="col-sm-10">
                       
                                  <textarea id="quantity" name="quantity" type="text" class="form-control" autofocus ></textarea>
                              </div>
                          </div>


                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Link:</label>
                              <div class="col-sm-10">
                       
                                  <input id="link" name="link" type="text" class="form-control" autofocus ></input>
                              </div>
                          </div>


                          <br><br style="clear:both;">

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Example:</label>
                              <div class="col-sm-10">
                       
                                  <textarea id="example" name="example" type="text" class="form-control" autofocus ></textarea>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Category:</label>
                              <div class="col-sm-10">

                                  <select id="category" name="category" class="form-control">
                                      <option></option>
                                      <?php if(is_array($categories)): ?>
                                        <?php foreach($categories as $categ): ?>

                                            <option value="<?=$categ->id?>"><?=$categ->category?></option>

                                        <?php endforeach; ?>

                                        <?php endif; ?>
                                    </select>
                              </div>
                          </div>

                            <br><br style="clear:both;">

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Image:</label>
                              <div class="col-sm-10">
                                  <input  onchange="display_image(this.files[0],this.name, 'js-product-images-add')" id="image" name="image" type="file" class="form-control" autofocus>
                              </div>
                          </div>
                          <br><br style="clear:both;">

                            <br><br style="clear:both;">

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Image2(optional):</label>
                              <div class="col-sm-10">
                                  <input onchange="display_image(this.files[0],this.name, 'js-product-images-add')" id="image2" name="image2" type="file" class="form-control" autofocus>
                              </div>
                          </div>
                          <br><br style="clear:both;">

                          <br><br style="clear:both;">

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Image3(optional):</label>
                            <div class="col-sm-10">
                                <input onchange="display_image(this.files[0],this.name, 'js-product-images-add')" id="image3" name="image3" type="file" class="form-control" autofocus>
                            </div>
                        </div>
                        <br><br style="clear:both;">


                        <br><br style="clear:both;">

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Image4(optional):</label>
                            <div class="col-sm-10">
                                <input onchange="display_image(this.files[0],this.name,'js-product-images-add')" id="image4" name="image4" type="file" class="form-control" autofocus>
                            </div>
                        </div>
                        <br><br style="clear:both;">

                        <div class="js-product-images-add edit_product_images">
                                
                        <img src="" alt="">
                        <img src="" alt="">
                        <img src="" alt="">
                        <img src="" alt="">
                            
                        </div>

                          

                        <button type="button" class="btn btn-warning" onclick="show_add_new(event)" style="position: absolute; bottom: 10px; left: 10px;">Close</button>

                        <button type="button" onclick="collect_data(event)" class="btn btn-primary" style="position: absolute; bottom: 10px; right: 10px;">Save</button>


                      </form>
                        <br><br>


                              </div>
                            <!---add n ew product end-->



                             <!---edit new product--->    
                             <div class="edit_product add_edit_panel hide">


                        <h4 class="mb"><i class="fa fa-angle-right"></i> Edit Product</h4>
                        <form class="form-horizontal style-form" method="post">
                        <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Product Name:</label>
                              <div class="col-sm-10">
                                  <input id="edit_description" name="description" type="text" class="form-control" autofocus>
                              </div>
                          </div>

                          <br><br style="clear:both;">

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Quantity:</label>
                              <div class="col-sm-10">
                                  <textarea id="edit_quantity" name="quantity" type="text" class="form-control" autofocus></textarea>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Link:</label>
                              <div class="col-sm-10">
                       
                                  <input id="edit_link" name="link" type="text" class="form-control" autofocus ></input>
                              </div>
                          </div>

                          <br><br style="clear:both;">

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Example:</label>
                              <div class="col-sm-10">
                       
                                  <textarea id="edit_example" name="example" type="text" class="form-control" autofocus ></textarea>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Category:</label>
                              <div class="col-sm-10">

                                  <select id="edit_category" name="category" class="form-control">
                                      <option></option>
                                      <?php if(is_array($categories)): ?>
                                        <?php foreach($categories as $categ): ?>

                                            <option value="<?=$categ->id?>"><?=$categ->category?></option>

                                        <?php endforeach; ?>

                                        <?php endif; ?>
                                    </select>
                              </div>
                          </div>

                            <br><br style="clear:both;">

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Image:</label>
                              <div class="col-sm-10">
                                  <input id="edit_image" onchange="display_image(this.files[0],this.name, 'js-product-images-edit')" name="image" type="file" class="form-control" autofocus>
                              </div>
                          </div>
                          <br><br style="clear:both;">


                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Image2(optional):</label>
                              <div class="col-sm-10">
                                  <input id="edit_image2" onchange="display_image(this.files[0],this.name, 'js-product-images-edit')" name="image2" type="file" class="form-control" autofocus>
                              </div>
                          </div>
                          <br><br style="clear:both;">


                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Image3(optional):</label>
                            <div class="col-sm-10">
                                <input id="edit_image3" onchange="display_image(this.files[0],this.name, 'js-product-images-edit')" name="image3" type="file" class="form-control" autofocus>
                            </div>
                        </div>
                        <br><br style="clear:both;">


                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Image4(optional):</label>
                            <div class="col-sm-10">
                                <input id="edit_image4" onchange="display_image(this.files[0],this.name, 'js-product-images-edit')" name="image4" type="file" class="form-control" autofocus>
                            </div>
                        </div>
                  
                        <br>
                        <div class="js-product-images edit_product_images-edit">
                                            

                        </div>
                        

                        <button type="button" class="btn btn-warning" onclick="show_edit_product(0,'',false)" style="position: absolute; bottom: 10px; left: 10px;">Cancel</button>

                        <button type="button" onclick="collect_edit_data(event)" class="btn btn-primary" style="position: absolute; bottom: 10px; right: 10px;">Save</button>


                        </form>
                        <br><br>


                            </div>
                            <!---edit n ew product end-->

                              <hr>
                              <thead>
                              <tr>
                              <th>Product ID</th>
                                  <th>Product name</th>
                                  <th class="hidden-phone"> Quantity</th>
                                  <th class="hidden-phone"> Link</th>
                                  <th><i class="fa fa-bookmark"> Example</th>
                                  <th> <i class="fa fa-edit">Category</i> </th>
                                  <th> <i class="fa fa-edit">Date</i> </th>

                              </tr>
                              </thead>
                              <tbody id="table_body">

                              <?= $tbl_rows; ?>

                            
                           
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

<script>

    var EDIT_ID = 0;
    //show window
    function show_add_new(){

        var show_edit_box = document.querySelector(".add_new");
        var product_input = document.querySelector("#description");

        if(show_edit_box.classList.contains("hide")){

            show_edit_box.classList.remove("hide");
            product_input.focus();

        }else{

            show_edit_box.classList.add("hide");
            product_input.value = "";
        }



    }



        //show window
        function show_edit_product(id,product,e){
        
        var show_add_box = document.querySelector(".edit_product");
        var edit_description_input = document.querySelector("#edit_description");

        if(e){


        
        var a = (e.currentTarget.getAttribute("info"));
        
        var info = JSON.parse(a.replaceAll("'",'"'));
        
        //console.log(e);
        EDIT_ID = info.id;
        
        //show_add_box.style.left = (e.clientX - 700) + "px";
        show_add_box.style.top = (e.clientY - 100) + "px";

        edit_description_input.value = info.description;

        var edit_quantity_input = document.querySelector("#edit_quantity");
        edit_quantity_input.value = info.quantity;

        var edit_link_input = document.querySelector("#edit_link");
        edit_link_input.value = info.link;

        var edit_example_input = document.querySelector("#edit_example");
        edit_example_input.value = info.example;

        var edit_category_input = document.querySelector("#edit_category");
        edit_category_input.value = info.category;

        var product_images_input = document.querySelector(".js-product-images");
        product_images_input.innerHTML = `<img style='width:100px;' src="<?=ROOT?>${info.image}" />`;
        product_images_input.innerHTML += `<img style='width:100px;'  src="<?=ROOT?>${info.image2}" />`;
        product_images_input.innerHTML += `<img style='width:100px;'  src="<?=ROOT?>${info.image3}" />`;
        product_images_input.innerHTML += `<img style='width:100px;'  src="<?=ROOT?>${info.image4}" />`;

       

    }
        if(show_add_box.classList.contains("hide")){

            show_add_box.classList.remove("hide");
            edit_description_input.focus();

        }else{

            show_add_box.classList.add("hide");
            edit_description_input.value = "";
        }


        }
       

    //collect information with ajax
    function collect_data(e){



        var product_input = document.querySelector("#description");
        if(product_input.value.trim() == "" || !isNaN(product_input.value.trim())){

            alert("Please enter a valid product name");
            return;
        }
    

        var quantity_input = document.querySelector("#quantity");
        if(quantity_input.value.trim() == "" || !isNaN(quantity_input.value.trim())){

            alert("Please enter a valid quantity");
            return;
        }

        var link_input = document.querySelector("#link");
        if(link_input.value.trim() == "" || !isNaN(link_input.value.trim())){

            alert("Please enter a valid link");
            return;
        }

        var example_input = document.querySelector("#example");
        if(example_input.value.trim() == "" || !isNaN(example_input.value.trim())){

            alert("Please enter a valid example");
            return;
        }



        var category_input = document.querySelector("#category");
        if(category_input.value.trim() == "" || isNaN(category_input.value.trim())){

            alert("Please enter a valid category");
            return;
        }



        var image_input = document.querySelector("#image");
        if(image_input.files.length == 0){

            alert("Please enter a valid main image");
            return;
        }

        //Create a form 
        var data = new FormData();


        var image2_input = document.querySelector("#image2");
        if(image2_input.files.length > 0){

            data.append('image2', image2_input.files[0]);

        }


        var image3_input = document.querySelector("#image3");
        if(image3_input.files.length > 0){

            data.append('image3', image3_input.files[0]);

        }


        var image4_input = document.querySelector("#image4");
        if(image4_input.files.length > 0){

            data.append('image4', image4_input.files[0]);

        }



        data.append('description',product_input.value.trim());
        data.append('quantity',quantity_input.value.trim());
        data.append('link',link_input.value.trim());
        data.append('example',example_input.value.trim());
        data.append('category',category_input.value.trim());
        data.append('data_type','add_product');
        data.append('image', image_input.files[0]);

        send_data_files(data);
      
    }



    //collect information with ajax
    function collect_edit_data(e){



        var product_input = document.querySelector("#edit_description");
        if(product_input.value.trim() == "" || !isNaN(product_input.value.trim())){

            alert("Please enter a valid product name");
            return;
        }
    

        var quantity_input = document.querySelector("#edit_quantity");
        if(quantity_input.value.trim() == "" || !isNaN(quantity_input.value.trim())){

            alert("Please enter a valid quantity");
            return;
        }

        var link_input = document.querySelector("#edit_link");
        if(link_input.value.trim() == "" || !isNaN(link_input.value.trim())){

            alert("Please enter a valid Link");
            return;
        }


        var example_input = document.querySelector("#edit_example");
        if(example_input.value.trim() == "" || !isNaN(example_input.value.trim())){

            alert("Please enter a valid example");
            return;
        }



        var category_input = document.querySelector("#edit_category");
        if(category_input.value.trim() == "" || isNaN(category_input.value.trim())){

            alert("Please enter a valid category");
            return;
        }





        //Create a form 
        var data = new FormData();


        var image_input = document.querySelector("#edit_image");
        if(image_input.files.length > 0){

            data.append('image', image_input.files[0]);

        }


        var image2_input = document.querySelector("#edit_image2");
        if(image2_input.files.length > 0){

            data.append('image2', image2_input.files[0]);

        }


        var image3_input = document.querySelector("#edit_image3");
        if(image3_input.files.length > 0){

            data.append('image3', image3_input.files[0]);

        }


        var image4_input = document.querySelector("#edit_image4");
        if(image4_input.files.length > 0){

            data.append('image4', image4_input.files[0]);

        }



        data.append('description',product_input.value.trim());
        data.append('quantity',quantity_input.value.trim());
        data.append('link',link_input.value.trim());
        data.append('example',example_input.value.trim());
        data.append('category',category_input.value.trim());
        data.append('data_type','edit_product');
        data.append('id', EDIT_ID);

        send_data_files(data);

    }


    //sending information with ajax
   function send_data(data = {}){


 		var ajax = new XMLHttpRequest();
 
		ajax.addEventListener('readystatechange', function(){

			if(ajax.readyState == 4 && ajax.status == 200)
			{
				handle_result(ajax.responseText);
			}
		});

		ajax.open("POST","<?=ROOT?>ajax_product",true);
		ajax.send(JSON.stringify(data));
	}


      //sending information with ajax
   function send_data_files(formData){


        var ajax = new XMLHttpRequest();

        ajax.addEventListener('readystatechange', function(){

        if(ajax.readyState == 4 && ajax.status == 200)
        {
            handle_result(ajax.responseText);
        }
        });

        ajax.open("POST","<?=ROOT?>ajax_product",true);
        ajax.send(formData);
        }

    //function for result
    function handle_result(result){
        console.log(result);
        if(result != ""){
			var obj = JSON.parse(result);

			if(typeof obj.data_type != 'undefined')
			{

				if(obj.data_type == "add_new")
				{
					if(obj.message_type == "info")
					{
						alert(obj.message);
						show_add_new();

						var table_body = document.querySelector("#table_body");
						table_body.innerHTML = obj.data;
					}else
					{
						alert(obj.message);
					}
				}else
				if(obj.data_type == "edit_product")
				{

					if(obj.message_type == "info")
					{
						show_edit_product(0,'',false);

						var table_body = document.querySelector("#table_body");
						table_body.innerHTML = obj.data;
					}else{
						alert(obj.message);
					}
 
				}else
				if(obj.data_type == "disable_row")
				{

					var table_body = document.querySelector("#table_body");
					table_body.innerHTML = obj.data;

				}else
				if(obj.data_type == "delete_row")
				{

					var table_body = document.querySelector("#table_body");
					table_body.innerHTML = obj.data;

					alert(obj.message);
				}


			}
		}
	}

function display_image(file,name, element){


    var index = 0;

    if(name === "image2"){

        index = 1;
        
    }else
    if(name === "image3"){

        index = 2;

    }else
    if(name === "image4"){

        index = 3;


    }

    var image_holder = document.querySelector("."+element);

    var images = image_holder.querySelectorAll("IMG");

    images[index].src = URL.createObjectURL(file);

}

    function edit_row(id){

        send_data({
            data_type: ""

        });

    }


    function delete_row(id){


        if(!confirm("Are you sure you want to delete this row?")){

            return;

        }

        

        send_data({
            data_type: "delete_row",
            id: id

        });

    }

    function disable_row(id,state){

        send_data({
            data_type: "disable_row",
            id: id,
            current_state:state

        });


    }
</script>
<?php $this->view("admin/footer", $data); ?>