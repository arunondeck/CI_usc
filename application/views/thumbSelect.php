<div id="container" style="margin-left:100px; position:relative; top:100px;">
	<div id="videoAdded">
		<div>
			<?php echo heading("Please select thumbnail for Video ".$formData['title'],3); ?>
		</div>
		<?php
			$attributes = array('id' => 'thumbnailForm');
			echo form_open($dest,$attributes);
			foreach($imagePath as $url ) : 
		?>

		<div class="thumbSelection">		
				
			<?php		
				$myimage = getimagesize($url);
				if($myimage['1']>$myimage['0'] || $myimage['1'] == $myimage['0'])
				{
					$factor = 124/$myimage['1'];
					$newWidth = $myimage['0']*$factor;
					$newHeight = 124;
				}
				else
				{
					$factor = 146/$myimage['0'];
					$newHeight = $myimage['1']*$factor;	
					$newWidth = 146;
				}				
				$imageProp = array('src' => $url, 'style'=>'width:'.$newWidth.'px; height:'.$newHeight.'px;  border: 1px solid;');
				echo img($imageProp); 
				
			?>
			<input name="thumb" type="radio" value="<?php echo $url?>" onclick="document.getElementById('thumbnailForm').submit();"/>
			
		</div>
		<?php endforeach; ?>
		<input name="title" type="hidden" value="<?php echo $formData['title'];?>"/>
		<?php echo form_close();?>
		
	</div>
	<div style="padding:2px;">
		<span> Available thumbnails for video. Select thumbnail to display.</span>
	<?php
		/*
		echo anchor("admin/add", "Add another Video");
		echo br(2);
		echo anchor("admin/home", "Go to Admin Home");
		echo br(2);
		echo anchor("video/view", "Go to Unilife Home");
		*/
	?>
	</div>
</div>