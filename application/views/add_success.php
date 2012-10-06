<div id="container" style="margin-left:100px; position:relative; top:100px;">
	<div id="videoAdded">
		<div>
			<?php echo heading("Video ".$formData['title']." added successfully.",3); ?>
		</div>
		<div id="thumbAdded">
			<?php
				$imageProp = array('src' => $imagePath, 'style'=>'width:640px; height:360px;');
				echo img($imageProp); 
			?>
		</div>
	</div>
	<div id="links">
	<?php
		
		echo anchor("admin/add", "Add another Video");
		echo br(2);
		echo anchor("admin/home", "Go to Admin Home");
		echo br(2);
		echo anchor("video/view", "Go to Unilife Home");
	?>
	</div>
</div>