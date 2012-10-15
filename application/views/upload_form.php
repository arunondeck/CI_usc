<div id="container">
	<div id="heading">Upload Video </div>
	<div id="uploadForm" style="float:left; width:70%">
		<?php echo "<BR>".validation_errors(); ?>
		<?php if(isset($file_error)) echo "<BR><em>".$file_error."<BR><BR></em>"; ?>
		<?php echo form_open_multipart('admin/validateUpload');?>
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
					$options = array('News'  => 'News','Company'=>'Company','Leadership'=>'Leadership','Devices'=>'Devices','Investors'=>'Investors');
					$attr = 'id="category_select"  size="5"';
					echo form_multiselect('category[]', $options,'',$attr);
					?>	
				</span>
			</div>	
			<div class="form-item">
				<div>
					<span> <label for="file"> Select Video : </label> </span>
					<span> <input accept="video/*" name ="file" type="file" id="file" size="53"> </input> </span>
				</div>
			</div>
			<div class="form-item">
				<span> <label for="editorpick" value='0'> Editor's Pick </label> </span>
				<span> <input type="checkbox" name="editorpick" id="editorpick"/> </span>
			</div>
			<div class="form-item">
				<span> <input type="submit" value="Upload" /></span>
			</div>
		</form>
	</div>
	<div id="upload_note" style="float:left; width:30%; font-size:11px; padding-top:20px;">
		<div>
			<strong>About uploading</strong>
			<p>Uploads usually take 1-5 minutes per MB on a high-speed connection, and converting your video takes an additional 3-5 minutes per MB. </p>
		</div>
	</div>
</div>