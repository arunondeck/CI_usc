<?php 
	/*echo '
		<object type="application/x-shockwave-flash" height="360" width="640" data="http://www.ooyala.com/player.swf" id="ooyalaPlayer" >
			 <param name="movie" value="http://www.ooyala.com/player.swf" />
			 <param name="quality" value="best"/>
			 <param name="bgcolor" value="#000000"/>
			 <param name="allowScriptAcess" value="always"/>
			 <param name="allowFullScreen" value="true"/>
			 <param name="FlashVars" value="embedCode='.$videoCode.'&amp;autoplay=1" />
			 <param name="wmode" value="transparent" />
		</object>';
	*/
		$src="http://player.ooyala.com/player.js?playerContainerId=current&playerId=player&width=640&height=360&embedCode=".$videoCode."&wmode=opaque&autoplay=1";
		echo '<script src="'.$src.'" type="text/javascript"></script>';
	
	?>
	
	
