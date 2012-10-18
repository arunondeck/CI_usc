<div id="container" style="position:relative; top:100px;">
	<div id='wrapper'>
		<div>
			<?php echo heading("Arrange Video Order",3); ?>
		</div>
		<div>
			<script type='text/javascript' src = '/2.unilife/js/jquery.ui.core.js'> </script>
			<script type='text/javascript' src = '/2.unilife/js/jquery.ui.widget.js'> </script>
			<script type='text/javascript' src = '/2.unilife/js/jquery.ui.mouse.js'> </script>
			<script type='text/javascript' src = '/2.unilife/js/jquery.ui.sortable.js'> </script>
			<script type='text/javascript'>
				$(function() {
					$( "#sortable" ).sortable();
					$( "#sortable" ).disableSelection();
				});
				$(document).ready(function(){
					$('#update').click(function(){
						var position='';
						$('.vid_entry').each(function(){
							position += $(this).attr('id') + '='+$(this).index()+';'
						});
						//alert(position);
						url='./sortOrder';
						var p={};
						p['position'] = position;
						$('#wrapper').load(url,p,function(str){});
					});
				});

			</script>
		</div>
		<div><p>Drag up and down the video entries to arrange the order	of appearance </p></div>
		<div style='overflow:hidden; margin-top: 30px;'>
			<div id="videos" style='padding-left:30px; width: 450px;float: left;'>
				<div id='innerContainer'>
					<div id='sortable' style='width:75%; overflow:hidden;'>
						<?php foreach ($results as $video): ?>
						<div id='<?php echo $video['id']; ?>' class='vid_entry'>
							<div class='sort_title'>
								<?php echo $video['title']; ?>
							</div>
							<div class='sort_thumb'>
								<?php
									$src = $video['thumbnail'];
									if(file_exists($video['thumbnail']))
										$myimage = getimagesize($src);
									else
										{
											$myimage = getimagesize('videothumbs/error-79x79.jpg');	
											$src = 'videothumbs/error-79x79.jpg';
										}
									if($myimage['1']>$myimage['0'] || $myimage['1'] == $myimage['0'])
									{
										$factor = 79/$myimage['1'];
										$newWidth = $myimage['0']*$factor;
										$newHeight = 79;
									}
									else
									{
										$factor = 79/$myimage['0'];
										$newHeight = $myimage['1']*$factor;	
										$newWidth = 79;
									}
									$margin_top = (79-$newHeight)/2;
									$image_properties = array('id' => $video['url'], 'src' => $src, 'style' => 'margin-top:'.$margin_top.'px; height:'.$newHeight.'px; width:'.$newWidth.'px;', 'alt' => $video['title']); 
									echo img($image_properties);
								?>
							</div>
						</div>
						<?php endforeach ?>
							
					</div>
				</div>
				<div id='update'>
					Update order
				</div>
			</div>
			<div id='note' style='margin-left:30px;'>
				<div>
					<strong>About Sorting</strong>
					<p>Note that only the first 9 videos are displayed on the home page</p>
				</div>
			</div>
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
