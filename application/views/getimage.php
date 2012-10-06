<?php 
$mysock = getimagesize($img_url);
	echo"<pre>";
	print_r($mysock);
	echo"</pre><br>";
	if($mysock['1']>$mysock['0'])
	{
		$factor = 124/$mysock['1'];
		$newWidth = $mysock['0']*$factor;
		$newHeight = 124;
	}
	else
	{
		$factor = 146/$mysock['0'];
		$newHeight = $mysock['1']*$factor;	
		$newWidth = 146;
	}
	
$imgProp = array('src' => $img_url, 'style' => 'margin-right: auto; margin-left: auto; height: '.$newHeight.'px; width: '.$newWidth.'px;');
echo img($imgProp);
?>