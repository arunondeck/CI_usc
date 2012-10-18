<div id="container" style="margin-left:100px; position:relative; top:100px;">
	<div id="videoAdded">
		<div>
			<?php echo heading("Account Settings",3); ?>
		</div>
		<div id="msg" style="margin-top:8%; margin-left:15%;">
			<?php
				echo 'Password changed successfully'; 
			?>
		</div>
	</div>
	<div id="links" style="margin-top:70px;">
	<?php
		echo anchor("admin/home", "Go to Admin Home");
		echo br(2);
		echo anchor("video/view", "Go to Unilife Home");
	?>
	</div>
</div>