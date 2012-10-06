<div id="left-side-outer">
	<div id="left-side">
	</div>
</div>
<div id="center-column">
	<!-- BEGIN SLIDER -->
	<div id="sliderMask">
	
		<div id="next" class="cycle"></div>
		<div id="previous" class="cycle"></div>
		<div id="leftShadow" class="shadow"></div>
		<div id="rightShadow" class="shadow"></div>
		<div id="leftGradient"></div>
		<div id="rightGradient"></div>
	
		<div id="slideHolder">
		
			<!-- SLIDE 0 -->
			<div class="slide blueSlide"></div>
			<!-- END SLIDE -->
			<?php $i=1; ?>
			<?php foreach($category as $video): ?>
			<!-- SLIDE <?php echo $i; ?> -->
			<div id="slide<?php echo $i; ?>" class="slide">
				<div class="slideBack" style='overflow:hidden;'>
					<?php //include ('http://localhost/unilifeTVU/index.php/video/getthumb/'.$video['url']); ?>
					<?php
						$src = $video['thumbnail'];
						if(file_exists($video['thumbnail']))
							$myimage = getimagesize($src);
						else
							{
								$myimage = getimagesize('videothumbs/error-960x540.jpg');	
								$src = 'videothumbs/error-960x540.jpg';
							}
						//echo"<pre>";
						//print_r($myimage);
						//echo"</pre><br>";
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
		
						$image_properties = array('id' => $video['url'], 'src' => $src, 'style' => 'height:'.$newHeight.'px; width:'.$newWidth.'px;', 'alt' => $video['title']); 
					?>
					<?php echo img($image_properties); ?>
					<div class="playerContainer" align="center">
						<!--
						<script src="http://player.ooyala.com/player.js?callback=receiveOoyalaEvent&playerId=player&width=480&height=360&embedCode=llMDQ6rMWxVWbvdxs2yduVEtSrNCJUk1&version=2"></script>
						-->
					</div>
				</div>
			
				<?php if($i==5) 
				{echo '
					<div class="fullScreen" style="display:block;"></div>
 					<div class="playBtn" style="display:block;"></div>
			
					<div class="slideText" style="display:block;">';
				}
				else
				{echo '
					<div class="fullScreen"></div>
 					<div class="playBtn"></div>
			
					<div class="slideText" >';
				}
				?> 
			
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
		
			</div>
			<!-- END SLIDE <?php echo $i++; ?> -->
			<?php endforeach ?>


		
			<!-- SLIDE 10 -->
			<div class="slide blueSlide"></div>
			<!-- END SLIDE -->
		
		</div>
	</div>
	
	<div style="clear:both;"></div>

<!-- END SLIDER -->

	
	<div id="lowerWrapper">
	
		<!--BEGIN THUMBS-->
			<div id="thumbCont">
				<div id="allThumbs">
					<?php $i=01; $j=1?>
					<script type="text/javascript">
						var thumbDesc={};
					</script>
					<?php foreach($category as $video): ?>
					<script type="text/javascript"> thumbDesc['<?php echo $j++ ?>'] = "<?php echo$video['description']?>"; </script>
					<?php 				
						$src = $video['thumbnail'];
						if(file_exists($video['thumbnail']))
							$myimage = getimagesize($src);
						else
							{
								$myimage = getimagesize('videothumbs/error-79x79.jpg');	
								$src = 'videothumbs/error-79x79.jpg';
							}
						//echo"<pre>";
						//print_r($myimage);
						//echo"</pre><br>";
						if($myimage['1']>$myimage['0'])
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
		
						$image_properties = array('id' => $video['url'], 'src' => $src, 'style' => 'height:'.$newHeight.'px; width:'.$newWidth.'px;', 'alt' => $video['title']); 
					?>
					<div id="thumb<?php echo $i; ?>" class="thumb <?php if($i++==5) echo 'active'; ?>">
						<span><?php echo img($image_properties); ?></span>
						<div class="thumbCap"><?php echo $video['title']; ?></div>
					</div>
					<?php endforeach ?>
				</div>
			</div>
		<!--END THUMBS-->
		<div>
			<script>

				function receiveOoyalaEvent(playerId, eventName, eventArgs) {
				var ciecc,ttc,ecc,vc;

				 switch(eventName) {
				   case "playheadTimeChanged":
					 onPlayheadTimeChanged(eventArgs);
					 break;
				   case "stateChanged":
					 onStateChanged(eventArgs);
					 break;
				   case "currentItemEmbedCodeChanged":
					 onCurrentItemEmbedCodeChanged(eventArgs);
					 ciecc=eventArgs;
					 break;
				   case "totalTimeChanged":
					 onTotalTimeChanged(eventArgs);
					 ttc=eventArgs;
					 break;
				   case "embedCodeChanged":
					 onEmbedCodeChanged(eventArgs);
					 ecc=eventArgs;
					 break;
				   case "volumeChanged":
					 onVolumeChanged(eventArgs);
					 break;
				   case "apiReady":
					 //note: apiReady event has no eventArgs (3rd call-back parameter)
					 onCurrentItemEmbedCodeChanged(ciecc);
					 onTotalTimeChanged(ttc);
					 onEmbedCodeChanged(ecc);
					 break;
				 }
				}

				function onEmbedCodeChanged(eventArgs) {
				 document.getElementById("embedCode").innerHTML =
				 eventArgs.embedCode + " == " + document.getElementById("player").getEmbedCode();
				 document.getElementById("title").innerHTML = eventArgs.title + " == " +
				 document.getElementById('player').getTitle();
				}

				function onCurrentItemEmbedCodeChanged(eventArgs) {
				 document.getElementById("currentItemEmbedCode").innerHTML = 
				 eventArgs.embedCode +" == " + document.getElementById("player")
				 .getCurrentItemEmbedCode();
				 document.getElementById("currentItemTitle").innerHTML = 
				 eventArgs.title +" == " + document.getElementById("player").getCurrentItemTitle();
				}

				function onTotalTimeChanged(eventArgs) {
				 document.getElementById("totalTime").innerHTML =
				 eventArgs.totalTime + " == " + document.getElementById("player").getTotalTime();
				}

				function onPlayheadTimeChanged(eventArgs) {
				 document.getElementById("playheadTime").innerHTML =
				 eventArgs.playheadTime + " == "+document.getElementById("player").getPlayheadTime();
				}

				function onVolumeChanged(eventArgs) {
				 document.getElementById("volume").innerHTML =
				 eventArgs.volume + " == " + document.getElementById("player").getVolume();
				}
				function onStateChanged(eventArgs) {
				 document.getElementById("state").innerHTML =
				 eventArgs.state + " == " + document.getElementById("player").getState();
				}
			</script>
		</div>

