<div id="container" style="margin-left : auto; margin-right:auto; width:500px;">
	<div id="heading">Login</div>
	<div id="loginForm">
		<?php echo validation_errors(); ?>
		<?php echo form_open('admin/verfiylogin'); ?>
		<div class="form-item">
			<span> <label for="username"> Username : </label> </span>
			<span> <input id="username" name="username" type="text" /> </span>
		</div>
		<div class="form-item">
			<span> <label for="pass"> Password : </label> </span>
			<span> <input id="password" name="password"  type="password"/> </span>
		</div>
		<div>
			<input type="submit" value="Submit" />
		</div>
	</div>
</div>