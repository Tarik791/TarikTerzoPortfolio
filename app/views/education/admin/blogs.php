<?php $this->view("admin/header",$data); ?>

<?php $this->view("admin/sidebar",$data); ?>

<style type="text/css">
	
	.details{

		background-color: #eee;
		box-shadow: 0px 0px 10px #aaa;
		width: 100%;
		position: absolute;
		min-height: 100px;
		left: 0px;
		padding: 10px;
		z-index: 2;
	}

</style>
<table class="table table-striped table-advance table-hover">


    <?php if($mode == "read"):  ?>

        <a href="<?=ROOT?>admin/blogs?add_new=true">
            <input type="button" class="btn btn-warning pull-right" value="Add new Post">
        </a>

        <thead>
		    <tr><th>Title</th><th>Owner</th><th>Post</th><th>Image</th><th>Date Created</th><th>Action</th></tr>
	    </thead>

        <tbody>
		<?php if(isset($blogs) && is_array($blogs)):?>
			<?php foreach($blogs as $blog):?>

				<tr style="position: relative;">
                    <td><?=$blog->title?></td><td>
                    <a href="<?=ROOT?>profile/<?=$blog->user_url?>"><?=$blog->user_data->name?></a></td>
                    <td><?=$blog->post?></td>

                        <td><img src="<?=ROOT . $blog->image?>" style="width: 150px;;" alt=""></td>

                        <td><?=date("jS M Y H:i a",strtotime($blog->date))?></td>

			
					<td>


                        <a href="<?=ROOT?>admin/blogs?edit=<?=$blog->url_address?>"> <i class="fa fa-pencil-o"></i> Edit
                        </a>

                        <a href="<?=ROOT?>admin/blogs?delete=<?=$blog->url_address?>"> <i class="fa fa-trash-o"></i> Delete</a>

						
					</td>
					
				</tr>
			<?php endforeach;?>
            <?php endif;?>
            </tbody>

            <?php elseif($mode == "edit"):?>
            

                <span style="font-size: 18px; color: blue;">
                
                </span>  
                <br>
                     <?php if(isset($errors)): ?>
                         <span style="font-size: 18px; color: blue;">
                     <?=$errors?>
                     </span>  
                 <br>
                 <?php endif; ?>

                 <h2>Edit Post</h2>


                <form method="post" enctype="multipart/form-data">

                         <label for="title">
                                 Post Title
                             </label>
                             <input id="title" class="form-control" value="<?= isset($POST['title']) ? $POST['title']: ''; ?>" type="text" name="title">
     
                             <label for="image">
                                 Post image
                             </label>
                             <input id="image" class="form-control" type="file" name="image">
                             <input type="hidden" name="url_address" value="<?= isset($POST['url_address']) ? $POST['url_address']: ''; ?>">

     
                             <label for="post">
                                 Post text
                             </label>
                             <textarea id="post" class="form-control" type="text" name="post"><?=isset($POST['post']) ? $POST['post']: ''; ?></textarea>
                            <br>
                            <input type="submit" class="btn btn-success pull-right" value="Save">

                            <hr>

                            <img src="<?=ROOT?><?=isset($POST['image']) ? $POST['image']: ''; ?>" style="width: 200px;">
                     </form>
     


            <?php elseif($mode == "add_new"):?>

            
            <span style="font-size: 18px; color: blue;">
                
           </span>  
           <br>

                <form method="post" enctype="multipart/form-data">
                <?php if(isset($errors)): ?>
                    <span  style="font-size: 18px; color: blue;">
                <?=$errors?>
                </span>  
            <br>
            <h2>Add New Post</h2>

           <?php endif; ?>
                    <label for="title">
                            Post Title
                        </label>
                        <input id="title" class="form-control" value="<?= isset($POST['title']) ? $POST['title']: ''; ?>" type="text" name="title">

                        <label for="image">
                            Post image
                        </label>
                        <input id="image" class="form-control" type="file" name="image">

                        <label for="post">
                            Post text
                        </label>
                        <textarea id="post" class="form-control" type="text" name="post"><?= isset($POST['post']) ? $POST['post']: ''; ?></textarea>
                       <br>
                       <input type="submit" class="btn btn-success pull-right" value="Post">
                    
                </form>

        <?php elseif($mode == "delete_confirmed"):?>

            <span style="font-size: 18px; color: red;">
                Your blog was deleted successfully
           </span>  
           <a href="<?=ROOT?>admin/blogs">
                <input type="button" class="btn btn-success pull-right" value="Back to blogs">
                </a>

		<?php elseif($mode == "delete" && is_object($blogs)):?>


            <span style="font-size: 18px; color: red;">
                Are you sure you want delete this blog?
           </span>
           
           <thead>
           <tr><th>Title</th><th>Owner</th><th>Post</th><th>Image</th><th>Date Created</th><th>Action</th></tr>
	        </thead>
            <tbody>

            <tr style="position: relative;">
                    <td><?=$blogs->title?></td><td>
                    <a href="<?=ROOT?>profile/<?=$blogs->user_url?>"><?=$blogs->user_data->name?></a></td>
                    <td><?=$blogs->post?></td>

                        <td><img src="<?=ROOT . $blogs->image?>" style="width: 150px;;" alt=""></td>

                        <td><?=date("jS M Y H:i a",strtotime($blogs->date))?></td>

			
					<td>

			
					
				</tr>
                
                
                <a href="<?=ROOT?>admin/blogs?delete_confirmed=<?=$blogs->url_address?>">
                <input type="button" class="btn btn-warning pull-right" value="Delete">
                </a>
	</tbody>

        <?php endif;?>

</table>
 

<?php $this->view("admin/footer",$data); ?>