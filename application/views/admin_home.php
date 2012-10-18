<div id="container">
	<div id="heading">Video List</div>
	<div class="add_vid">
		<?php //echo anchor('admin/add','Add New Video');?>
		<ul class="menu" id="menu">
			<li><a href="javascript:void(0);" class="menulink">Video Settings</a>
				<ul>
					<li><?php echo anchor('admin/add','Add Ooyala Video');?></li>
					<li><?php echo anchor('admin/upload','Upload Video');?></li>
					<li><?php echo anchor('admin/sortVideo','Arrange Videos');?></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="logout"><?php echo anchor('admin/logout','Logout <em>' . $username) . '</em>'; ?></div>
	<div style='text-align:right; margin:10px 10px 0 0;'> 
		<?php echo'<em>'; echo anchor('admin/changepassword','Change Password'); echo'</em>';?> 
	</div>
	<div id="videoList">
		<?php include('edit_home.php'); ?>
	</div>
	<div id="message" style="margin-left:30px;"> <?php if(isset($message)) echo $message; ?></div>
	<script type="text/javascript">
		var menu=new menu.dd("menu");
		menu.init("menu","menuhover");
	</script>
</div>