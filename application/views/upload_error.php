<div id="container" style="margin-left:100px; position:relative; top:100px;">
	<div id="videoAdded">
		<div>
			<?php echo heading("Video ".$formData['title']." was not added.",3); ?>
		</div>
		<div id="thumb">
			<div> Invalid Video Id specified </div>
		</div>
	</div>
	
	<?php
		echo br(2);
		echo anchor("admin/add", "Add another Video");
		echo br(2);
		echo anchor("admin/home", "Go to Admin Home");
		echo br(2);
		echo anchor("video/view", "Go to Unilife Home");
	?>
</div>