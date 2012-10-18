<div id="container" style="margin-left:100px; position:relative; top:100px;">
	<div>
		<div>
			<?php echo heading("Account Settings",3); ?>
		</div>
		<div id="passwrdForm" style='padding-left:30px;'>
			<p>	Enter new password</p>
			<?php 
				$config=array('method'=>'post','id'=>'passchange');//,'onsubmit'=>'return validate(this)');
				echo form_open('admin/changePassword',$config); 
			?>
			<div class='form-item'>
				<span>
					<label for='password'> New Password: </label>
					<input id='password' type='password' name='password' value='' />
				</span>
			</div>
			<input id='submit' type='button' value='Change Password' style='margin-left:15%;'/>
			<?php echo form_close(); ?>
		</div>
	</div>
	<div id="links" style='margin-top:35px;height:150px;'>
	<?php
		echo anchor("admin/home", "Go to Admin Home");
		echo br(2);
		echo anchor("video/view", "Go to Unilife Home");
	?>
	</div>
</div>
<script type='text/javascript'>
	function validate(form)
	{
		var e = form.elements;
		if(e['password'].value != e['confirm-password'].value) 
		{
			alert('Your passwords do not match. Re-enter');
			return false;
		}
		form.submit();
	}
</script>