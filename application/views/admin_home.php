<div id="container">
	<div id="heading">Video List</div>
	<div class="add_vid">
		<?php //echo anchor('admin/add','Add New Video');?>
		<ul class="menu" id="menu">
			<li><a href="javascript:void(0);" class="menulink">Add New Video</a>
				<ul>
					<li><?php echo anchor('admin/add','Add Ooyala Video');?></li>
					<li><?php echo anchor('admin/upload','Upload Video');?></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="logout"><?php echo anchor('admin/logout','Logout <em>' . $username) . '</em>'; ?></div>
	<div id="videoList">
		<?php include('edit_home.php'); ?>
	</div>
	<div id="message" style="margin-left:30px;"> <?php if(isset($message)) echo $message; ?></div>
	<script type="text/javascript">
		var menu=new menu.dd("menu");
		menu.init("menu","menuhover");
	</script>
</div>