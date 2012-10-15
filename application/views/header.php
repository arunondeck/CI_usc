<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>UnilifeTV <?php if(!empty($title)) echo ' - '.$title; ?></title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<!--
	<script type="text/javascript" src="/js/slider.js"></script>
	<script type="text/javascript" src="/js/effects.js"></script>
	<script type="text/javascript" src="/js/index.js"></script>
	<script type="text/javascript" src="/js/checkText.js"></script>
	<script type="text/javascript" src="/js/jquery.touchwipe.min.js"></script>
	<script type="text/javascript" src="/js/jquery.ba-hashchange.js"></script>
	-->
	<?php 
		echo script_tag('js/slider.js');
		echo script_tag('js/effects.js');
		echo script_tag('js/index.js');
		echo script_tag('js/jquery.touchwipe.min.js');
		echo script_tag('js/jquery.ba-hashchange.js');
		echo script_tag('js/checkText.js');//*/
	?>
	

	<link  rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Ubuntu:300,700'/>
	<?php 
		echo link_tag('css/layout.css'); 
		echo link_tag('css/star_rating.css'); 
		echo link_tag('css/slider.css'); 
		echo link_tag('css/custom.css');
	?>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="keywords" content="Unilife TV, Unifill Syringe," />
	<meta name="description" content="Unilife TV" />
	<meta content="index, follow" name="robots">

</head>
<body>
<div id="header">
		
	<div id="tweetBar">
		<div id="twitter_update_list" onclick="location.href='http://www.twitter.com/unilifecorp';" style="cursor:pointer;"></div>
	</div>
		<!--Twitter-->
	<script type="text/javascript">
		function twitterCallback2(twitters) 
		{
			var statusHTML = [];
			for (var i=0; i<twitters.length; i++)
			{
				var username = twitters[i].user.screen_name;
				var status = twitters[i].text.replace(/((https?|s?ftp|ssh)\:\/\/[^"\s\<\>]*[^.,;'">\:\s\<\>\)\]\!])/g, function(url) {
					return '<a href="'+url+'">'+url+'</a>';
				}).replace(/\B@([_a-z0-9]+)/ig, function(reply) {
					return  reply.charAt(0)+'<a href="http://twitter.com/'+reply.substring(1)+'">'+reply.substring(1)+'</a>';
				});
				statusHTML.push('<li><span>'+status+'</span> <a style="font-size:85%" href="http://twitter.com/'+username+'/statuses/'+twitters[i].id_str+'">'+relative_time(twitters[i].created_at)+'</a></li>');
			}
			document.getElementById('twitter_update_list').innerHTML = statusHTML.join('');
		}
	
		function relative_time(time_value) 
		{
			var values = time_value.split(" ");
			time_value = values[1] + " " + values[2] + ", " + values[5] + " " + values[3];
			var parsed_date = Date.parse(time_value);
			var relative_to = (arguments.length > 1) ? arguments[1] : new Date();
			var delta = parseInt((relative_to.getTime() - parsed_date) / 1000);
			delta = delta + (relative_to.getTimezoneOffset() * 60);
	
			if (delta < 60) 
			{
				return '';
			} 
			else if(delta < 120) 
			{
				return '';
			} 
			else if(delta < (60*60)) 
			{
				return '';
			} 
			else if(delta < (120*60)) 
			{
				return '';
			} 
			else if(delta < (24*60*60)) 
			{
				return '';
			} 
			else if(delta < (48*60*60)) 
			{
				return '';
			} else 
			{
				return '';
			}
		}
	</script>

	<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/unilifecorp.json?callback=twitterCallback2&count=1&"></script>

	<div id="mainHead">
			<a href="<?php echo base_url() ?>"><div id="logo"></div> </a>
			<div id="nav">
				<div><a class="cat-slide" href="#!CATEGORIES">CATEGORIES</a></div>
				<div class="break"></div>
				<div><a href="#">SEARCH</a></div>
				<div class="arrow"></div>
				<input id="searchBox" type="text" name="search" />
			</div>
		</div>
	
	<div class="clear"></div>

</div>