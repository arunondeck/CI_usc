<?php include('header_admin.php'); ?>
<div id="container">
		<div id="heading">Add New Video</div>
	<div id="addForm">
		<?php echo validation_errors(); ?>
		<?php echo form_open('admin/validateAdd'); ?>
		<div class="form-item">
			<span> <label for="title"> Title : </label> </span>
			<span> <input id="title" name="title" type="text" size="53" /> </span>
		</div>
		<div class="form-item">
			<span> <label for="description"> Description : </label> </span>
			<span> <textarea id="description" rows="3" cols="40" name="description" style="resize:none;"></textarea> </span>
		</div>
		<div class="form-item">
			<span> <label for="category_select"> Select Category : </label> </span>
			<span> 
				<?php
				$options = array('News'  => 'News','About Us'=>'About Us','Factory'=>'Factory','Devices'=>'Devices','Press'=>'Press');
				$attr = 'id="category_select"  size="5"';
				echo form_multiselect('category[]', $options,'',$attr);
			?>	
			</span>
		</div>	
		<!--
		<div style="height:30px;">
			<span> <label for="category"> Category : </label> </span>
			<span> <input id="category" name="category"  disabled="disabled" type="text"  size="53"/> </span>
		</div>				
		-->
		<div class="form-item">
			<div>
				<span> <label for="url"> Ooyala Video Id : </label> </span>
				<span> <input id="url" name="url"  type="text"  size="53"/> </span>
				<span class="desc"> 
					<font > eg: embedCode= <em>dzMzdkMzqhU1YBlRMqpQr1Pwpv8Z8eHw</em> </font> 
				</span>
			</div>
		</div>
		<div class="form-item">
			<span> <label for="editorpick" value='0'> Editor's Pick </label> </span>
			<span> <input type="checkbox" name="editorpick" id="editorpick"/> </span>
		</div>
		<div class="form-item">
			<span> <input type="submit" value="Submit" /> </span>
		</div>
	</div>
</div>