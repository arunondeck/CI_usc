<?php echo link_tag('css/uploader.css'); ?>

<?php include('header.php'); ?>
<div id="container" style="margin-left : auto; margin-right:auto; width:500px;">
		<div id="heading">
		<?php
			echo heading("Edit Video",2);
		?>
	</div>
	<script>
		var category=null;
		function selectCategory()
		{
			var select = document.getElementById('category_select');			
			if(category==null)
				category = select.options[select.selectedIndex].text;
			else
				category=category+","+select.options[select.selectedIndex].text;
			//alert(category);
			document.getElementById("category").value = category;
		}
	</script>
	<?php
		//echo "<PRE>";
		//print_r($video_result);
		//echo "</PRE>";
		
		
	?>

	<div id="addForm">
		<?php echo validation_errors(); ?>
		<?php echo form_open('admin/validateAdd'); ?>
		<div style="height:30px;">
			<span> <label for="title"> Title : </label> </span>
			<span> <input id="title" name="title" type="text" size="53" value="<?php echo $video_result['title'];?>" /> </span>
		</div>
		<div>
			<span> <label for="description"> Description : </label> </span>
			<span> 
				<textarea id="description" rows="3" cols="40" name="description" style="resize:none;" value="<?php echo $video_result['description'];?>">
				</textarea> 
			</span>
		</div>
		<div>
			<span> <label for="category_select"> Select Category : </label> </span>
			<span> <select id="category_select" multiple="multiple" size="5" name="category[]" onchange='selectCategory()'>
						<option>News</option>
						<option>About Us</option>
						<option>Factory</option>
						<option>Devices</option>
						<option>Press</option>
					</select>
			</span>
		</div>	
		<!--
		<div style="height:30px;">
			<span> <label for="category"> Category : </label> </span>
			<span> <input id="category" name="category"  disabled="disabled" type="text"  size="53"/> </span>
		</div>				
		-->
		<div>
			<span> <label for="url"> Ooyala Video Id : </label> </span>
			<span> <input id="url" name="url"  type="text"  size="53"/> </span>
			<span style="display: block; margin-left: 115px;"> 
				<font size="2"> eg: embedCode=<strong>dzMzdkMzqhU1YBlRMqpQr1Pwpv8Z8eHw</strong> </font> 
			</span>
		</div>
		<div>
			<span> <label for="editorpick" value='0'> Editor's Pick </label> </span>
			<span> <input type="checkbox" name="editorpick" id="editorpick"/> </span>
		</div>
		<div>
			<span> <input type="submit" value="Submit" /> </span>
		</div>
	</div>
</div>
