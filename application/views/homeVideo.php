<div class="slideBack" style='overflow:hidden;'>
					<?php
						$src = $video['thumbnail'];
						if(file_exists($video['thumbnail']))
							$myimage = getimagesize($src);
						else
							{
								$myimage = getimagesize('videothumbs/error-960x540.jpg');	
								$src = 'videothumbs/error-960x540.jpg';
							}
						if($myimage['1']>$myimage['0'] || $myimage['1'] == $myimage['0'])
						{
							$factor = 540/$myimage['1'];
							$newWidth = $myimage['0']*$factor;
							$newHeight = 540;
						}
						else
						{
							$factor = 960/$myimage['0'];
							$newHeight = $myimage['1']*$factor;	
							$newWidth = 960;
						}
		
						$image_properties = array('id' => $videoCode, 'src' => $src, 'style' => 'height:'.$newHeight.'px; width:'.$newWidth.'px; display:none;', 'alt' => $video['title']); 
					?>
					<?php echo img($image_properties); ?>
					<div id="current" class="playerContainer" align="center">
						<?php
							$src="http://player.ooyala.com/player.js?playerContainerId=current&playerId=player&width=640&height=360&embedCode=".$videoCode."&wmode=opaque&autoplay=1";
							echo '<script src="'.$src.'" type="text/javascript"></script>';
						?>
					</div>
				</div>
			
				<div class="fullScreen" style="display:block;"></div>
 				<div class="playBtn" style="display:none;"></div>
			
				<div class="slideText" style="display:block;">';
							
					<div class="slideTextBackShadow"></div>
					<div class="slideTextBack"></div>
				
					<div class="topRow">
						<div style="display:block; margin-left:42px;"class="rater">
						 	<ul class="star-rating">
								<li class="current-rating" style="width:50%">Currently 2.5/5 Stars.</li>
								<li><a href="javascript:void(0)" title="1 star out of 5" class="one-star">1</a></li>
								<li><a href="javascript:void(0)" title="2 stars out of 5" class="two-stars">2</a></li>
								<li><a href="javascript:void(0)" title="3 stars out of 5" class="three-stars">3</a></li>
								<li><a href="javascript:void(0)" title="4 stars out of 5" class="four-stars">4</a></li>
								<li><a href="javascript:void(0)" title="5 stars out of 5" class="five-stars">5</a></li>
							</ul>	
						</div>
						<div class="catText">
							<?php 							
								$end = strpos($video['category'],',');
								if($end == 0)
									$end = strlen($video['category']);
								echo substr($video['category'],0,$end)." ";
							?>
							<span><?php echo $video['date']; ?></span>
						</div>
						
						<div class="social">
							<div class="fb"></div>
							<div class="tw"></div>
							<div class="em"></div>
						</div>
					</div>
					
					<div style="clear:both;"></div>
					
					<div class="bottomRow">
						<div class="headline"><?php echo $video['title']; ?></div>
						<div class="subhead">
							<?php echo $video['description']; ?>
						</div>
					</div>
				
				</div>