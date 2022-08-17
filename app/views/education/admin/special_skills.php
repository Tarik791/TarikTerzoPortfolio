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

<form method="post" enctype="multipart/form-data">
<table class="table table-striped table-advance table-hover">

		<thead>
		<tr><th>Your skill</th><th>Skill message</th><th>Date</th><th>Edit</th></tr>
	</thead>
	<tbody>

    <?php if(isset($special_skills) && is_array($special_skills)):?>
			<?php foreach($special_skills as $special_skill):?>

				<tr>
					<td><?=$special_skill->skill?></td>
					<td><?=$special_skill->message?></td>
                    <td><?=date("jS M Y H:i a",strtotime($special_skill->date))?></td>
			
	
					<td>
                        <a href="<?=ROOT?>admin/special_skills?delete=<?=$special_skill->id?>"> <i class="fa fa-trash-o"></i> Delete</a>
						
					</td>
				</tr>
                <?php endforeach;?>
            <?php endif;?>
	</tbody>

    <h2>Add New Row</h2>
		<div class="form-group">
			<label  for="skill">Create your skill</label>

				<input autofocus id="skill" value="" type="text" class="form-control" name="skill">

		</div>

		<div class="form-group">
			<label for="text">Create your message for skill</label>

	
				<textarea  class="form-control" name="message" cols="30" rows="10"></textarea>

		</div>

		<input type="submit" value="Add" class="btn btn-primary">

</table>
</form>


<?php $this->view("admin/footer",$data); ?>