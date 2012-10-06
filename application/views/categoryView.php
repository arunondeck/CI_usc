					<?php
					if (isset($page_title))
					{
						//crawler code only
						echo"<script type='text/javascript'>
							document.title='UnilifeTV - ".strtoupper($page_title)."';
							document.getElementsByClassName('activeCat')[0].className = 'catNav';
							var x=document.getElementsByClassName('catNav');
							for(i=0;i<x.length;i++)
								if(x[i].text=='".strtoupper($page_title)."')
									x[i].className='catNav activeCat';
						</script>";
					}
					?>
					<div id="panelContent">
					
						<?php foreach($category as $videoresult) : ?>
						<div class="videoDesc">
							
							<div class="vidThumb">
							<div class="vidThumb" style="overflow:hidden;">
								<?php 
									$src = $videoresult['thumbnail'];
									if(!file_exists($videoresult['thumbnail']))
										$src = 'videothumbs/error-79x79.jpg';
									$myImage = getimagesize($src);
										
									//echo"<pre>";
									//print_r($myImage);
									//echo"</pre><br>";
									if($myImage['1']>$myImage['0'] || $myImage['1'] == $myImage['0'])
									{
										$factor = 124/$myImage['1'];
										$newWidth = $myImage['0']*$factor;
										$newHeight = 124;
									}
									else
									{
										$factor = 146/$myImage['0'];
										$newHeight = $myImage['1']*$factor;	
										$newWidth = 146;
									}
									$topMargin = 137 - $newHeight;
									$topMargin = $topMargin/2;
									$image_properties = array('src' => $src, 'alt' => $videoresult['title'], 
										'id' => $videoresult['url'], 'style'=>'display:block; margin-left:auto; margin-right:auto;
										width:'.$newWidth.'px; height:'.$newHeight.'px; margin-top:'.$topMargin.'px;'); 
								
									echo img($image_properties); ?>
								<a href="javascript:void(0);"></a>
								<div class="thumbOverlay"></div>
							</div>
							</div>
							
							<div class="vidText">
								<div class="filter">MOST RECENT</div>
								<div class="title"><?php echo $videoresult['title'] ?></div>
								<div class="caption">
									<?php echo $videoresult['description'] ?>
								</div>
								<div class="watch"><a href="javascript:void(0);return false;">WATCH VIDEO</a></div>
							</div>
							
						</div>
						<?php endforeach ?>
					</div>
						