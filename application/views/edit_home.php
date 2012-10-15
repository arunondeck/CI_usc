<?php //include('header.php'); ?>
<?php //echo link_tag('css/uploader.css'); ?>

<script>

$(document).ready(function() {	

	//select all the a tag with name equal to modal
	$('a[name=modal]').click(function(e) {
		//Cancel the link behavior
		e.preventDefault();
		
		//Get the A tag
		var id = $(this).attr('href');
	
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(1000);	
		$('#mask').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
              
		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);
	
		//transition effect
		$(id).fadeIn(2000); 
	
	});
	
	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		
		$('#mask').hide();
		$('.window').hide();
	});		
	
	//if mask is clicked
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});		
	
	$('.formThumb').hover(function(){
		$(this).parent().siblings('span').fadeIn();
	});
	
	$('.formThumb').mouseout(function(){
		$(this).parent().siblings('span').fadeOut();
	});
	
	$(window).resize(function () {
	 
 		var box = $('#boxes .window');
 
        //Get the screen height and width
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
      
        //Set height and width to mask to fill up the whole screen
        $('#mask').css({'width':maskWidth,'height':maskHeight});
               
        //Get the window height and width
        var winH = $(window).height();
        var winW = $(window).width();

        //Set the popup window to center
        box.css('top',  winH/2 - box.height()/2);
        box.css('left', winW/2 - box.width()/2);
	 
	});
	
});

</script>

<div id="main" style="padding:2px;">

	<div id="videoContainer" style="margin-top:-5px;">
		<div id="content">
			<div id="boxes">
				<div class="edit_title">
					<?php $i=1;foreach($results as $result_item): ?>
					<div class="list-item">
						<span class="editvideoList"><?php echo $result_item['title'];?></span>
						<span class="editLInk"><a name="modal" href="#<?php echo 'result'.$result_item['id'];?>">Edit</a></span>
						<span> <?php $link = 'admin/delete/'.$result_item['id'];echo anchor($link,'Delete') ?> </span>
					</div>
					<div id="<?php echo 'result'.$result_item['id'];?>"class="item-content window">
						<?php echo form_open('admin/edit_video'); ?>
						
						<div  class="form-item">
							<span> 
								<label for="description">Thumbnail:</label> 
							</span>
							<span class="video_thumb">
								<?php
									$src = $result_item['thumbnail'];
									if(file_exists($result_item['thumbnail']))
										$myimage = getimagesize($src);
									else
										{
											$myimage = getimagesize('videothumbs/error-79x79.jpg');	
											$src = 'videothumbs/error-79x79.jpg';
										}
									//echo"<pre>";
									//print_r($myimage);
									//echo"</pre><br>";
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
					
									$image_properties = array('class' => 'formThumb', 'src' => $src, 'style' => 'height:'.$newHeight.'px; width:'.$newWidth.'px;', 'alt' => $result_item['title']); 
								?>	
								<a href="thumbEdit/<?php echo $result_item['url']?>"><?php echo img($image_properties);?><div>Click to Edit</div></a>
								
								<span class="thumbEdit">Click to Edit</span>
							</span>
						</div>
						<div  class="form-item">
							<span class="video_title">
								<label for="title">Title:</label> 
							</span>
							<span> 
								<input id="title" name="title" type="text" size="53" value="<?php echo $result_item['title'];?>"/> 
							</span>
						</div>
						<div class="form-item">
							<span class="category">
								<label for="category_select">Category:</label> 
							</span>
							<span>
								<?php
									$options = array('News'  => 'News','Company'=>'Company','Leadership'=>'Leadership','Devices'=>'Devices','Investors'=>'Investors');
									$attr = 'id="category_select"  size="5"';
									$categories = explode(',',$result_item['category']);
									echo form_multiselect('category[]', $options,$categories,$attr);
								?>	

								<span>
									<?php
										$data = array('name'=> 'id','value'=> $result_item['id'],'type'=>'hidden');
										echo form_input($data);
									?>
								</span>
							</span>
						</div>
						<div  class="form-item">
							<span> 
								<label for="description">Description:</label> 
							</span>
							<span> 
								<textarea id="description" rows="3" cols="40" name="description" style="resize:none;"><?php echo $result_item['description'];?></textarea> 
							</span>
						</div>
						<div class="form-item">
							<span> <input class="submit" type="submit" value="Submit" /> </span>
						</div>
						</form>
					</div>
					<?php endforeach ?>
				</div>
				<div id="mask">
				</div>
			</div>
		</div>
	</div>
</div>