function Slider(){
	var position = $(".slideText[style*='block']").parent().attr("id").replace("slide","");
	//position = position[0].parentElement.id.replace("slide","");
	
	$(".cycle").click(function(){
		$('.shadow').fadeOut(600).delay(600).fadeIn(600);
	});
	
	$(".thumb").click(function(){
		$('.shadow').fadeOut(600).delay(600).fadeIn(600);
	});
	
	$("#next").click(goNext);
	function goNext(){
		if (position == 1) {
			$('.active').removeClass("active");
			$('#thumb2').addClass('active');
			$("#slideHolder").delay(600).animate({"left": "-=960px"}, "slow");
			$('#previous').css('display','block');
			$('.slideText').fadeOut(600);
			$('#slide2').find(".slideText").delay(1200).fadeIn(600);
			$('.fullScreen').fadeOut(600);
			$('#slide2').find(".fullScreen").delay(1200).fadeIn(600);
			$('.playBtn').fadeOut(600);
			$('#slide2').find(".playBtn").delay(1200).fadeIn(600);
			
			if($('#slide'+position).children().children('.playerContainer').attr('class').indexOf('nodisp')== -1)
			{
				$('#slide'+position).children().children('img').fadeIn(600);
				$('#slide'+position).children().children('.playerContainer').children().remove();
			}
			
			position++;
		}
		else if (position == 2) {
			$('.active').removeClass("active");
			$('#thumb3').addClass('active');
			$("#slideHolder").delay(600).animate({"left": "-=960px"}, "slow");
			$('.slideText').fadeOut(600);
			$('#slide3').find(".slideText").delay(1200).fadeIn(600);
			$('.fullScreen').fadeOut(600);
			$('#slide3').find(".fullScreen").delay(1200).fadeIn(600);
			$('.playBtn').fadeOut(600);
			$('#slide3').find(".playBtn").delay(1200).fadeIn(600);
			
			if($('#slide'+position).children().children('.playerContainer').attr('class').indexOf('nodisp')== -1)
			{
				$('#slide'+position).children().children('img').fadeIn(600);
				$('#slide'+position).children().children('.playerContainer').children().remove();	
			}
			
			position++;
		}
		else if (position == 3) {
			$('.active').removeClass("active");
			$('#thumb4').addClass('active');
			$("#slideHolder").delay(600).animate({"left": "-=960px"}, "slow");
			$('.slideText').fadeOut(600);
			$('#slide4').find(".slideText").delay(1200).fadeIn(600);
			$('.fullScreen').fadeOut(600);
			$('#slide4').find(".fullScreen").delay(1200).fadeIn(600);
			$('.playBtn').fadeOut(600);
			$('#slide4').find(".playBtn").delay(1200).fadeIn(600);
			
			if($('#slide'+position).children().children('.playerContainer').attr('class').indexOf('nodisp')== -1)
			{
				$('#slide'+position).children().children('img').fadeIn(600);
				$('#slide'+position).children().children('.playerContainer').children().remove();
			}
			
			position++;
		}
		else if (position == 4) {
			$('.active').removeClass("active");
			$('#thumb5').addClass('active');
			$("#slideHolder").delay(600).animate({"left": "-=960px"}, "slow");
			$('.slideText').fadeOut(600);
			$('#slide5').find(".slideText").delay(1200).fadeIn(600);
			$('.fullScreen').fadeOut(600);
			$('#slide5').find(".fullScreen").delay(1200).fadeIn(600);
			$('.playBtn').fadeOut(600);
			$('#slide5').find(".playBtn").delay(1200).fadeIn(600);
			
			if($('#slide'+position).children().children('.playerContainer').attr('class').indexOf('nodisp')== -1)
			{
				$('#slide'+position).children().children('img').fadeIn(600);
				$('#slide'+position).children().children('.playerContainer').children().remove();

			}
			
			position++;
		}
		else if (position == 5) {
		

			$('.active').removeClass("active");
			$('#thumb6').addClass('active');
			$("#slideHolder").delay(600).animate({"left": "-=960px"}, "slow");
			$('.slideText').fadeOut(600);
			$('#slide6').find(".slideText").delay(1200).fadeIn(600);
			$('.fullScreen').fadeOut(600);
			$('#slide6').find(".fullScreen").delay(1200).fadeIn(600);
			$('.playBtn').fadeOut(600);
			$('#slide6').find(".playBtn").delay(1200).fadeIn(600);

			if($('#slide'+position).children().children('.playerContainer').attr('class').indexOf('nodisp')== -1)
				{
					$('#slide'+position).children().children('img').fadeIn(600);
					$('#slide'+position).children().children('.playerContainer').children().remove();
				}

			position++;
		}
		else if (position == 6) {
			$('.active').removeClass("active");
			$('#thumb7').addClass('active');
			$("#slideHolder").delay(600).animate({"left": "-=960px"}, "slow");
			$('.slideText').fadeOut(600);
			$('#slide7').find(".slideText").delay(1200).fadeIn(600);
			$('.fullScreen').fadeOut(600);
			$('#slide7').find(".fullScreen").delay(1200).fadeIn(600);
			$('.playBtn').fadeOut(600);
			$('#slide7').find(".playBtn").delay(1200).fadeIn(600);
			
			if($('#slide'+position).children().children('.playerContainer').attr('class').indexOf('nodisp')== -1)
			{
				$('#slide'+position).children().children('img').fadeIn(600);
				$('#slide'+position).children().children('.playerContainer').children().remove();
			}
				
			position++;
		}
		else if (position == 7) {
			$('.active').removeClass("active");
			$('#thumb8').addClass('active');
			$("#slideHolder").delay(600).animate({"left": "-=960px"}, "slow");
			$('.slideText').fadeOut(600);
			$('#slide8').find(".slideText").delay(1200).fadeIn(600);
			$('.fullScreen').fadeOut(600);
			$('#slide8').find(".fullScreen").delay(1200).fadeIn(600);
			$('.playBtn').fadeOut(600);
			$('#slide8').find(".playBtn").delay(1200).fadeIn(600);
			
			if($('#slide'+position).children().children('.playerContainer').attr('class').indexOf('nodisp')== -1)
			{
				$('#slide'+position).children().children('img').fadeIn(600);
				$('#slide'+position).children().children('.playerContainer').children().remove();
			}		
			
			position++;
		}
		else if (position == 8) {
			$('.active').removeClass("active");
			$('#thumb9').addClass('active');
			$("#slideHolder").delay(600).animate({"left": "-=960px"}, "slow");
			$(this).css('display','none');
			$('.slideText').fadeOut(600);
			$('#slide9').find(".slideText").delay(1200).fadeIn(600);
			$('.fullScreen').fadeOut(600);
			$('#slide9').find(".fullScreen").delay(1200).fadeIn(600);
			$('.playBtn').fadeOut(600);
			$('#slide9').find(".playBtn").delay(1200).fadeIn(600);
			
			if($('#slide'+position).children().children('.playerContainer').attr('class').indexOf('nodisp')== -1)
			{
				$('#slide'+position).children().children('img').fadeIn(600);
				$('#slide'+position).children().children('.playerContainer').children().remove();
			}
			
			position++;
		}
	}
	
	$("#previous").click(goPrevious);
	function goPrevious(){
		if (position == 9) {
			$('.active').removeClass("active");
			$('#thumb8').addClass('active');
			$("#slideHolder").delay(600).animate({"left": "+=960px"}, "slow");
			$('#next').css('display','block');
			$('.slideText').fadeOut(600);
			$('#slide8').find(".slideText").delay(1200).fadeIn(600);
			$('.fullScreen').fadeOut(600);
			$('#slide8').find(".fullScreen").delay(1200).fadeIn(600);
			$('.playBtn').fadeOut(600);
			$('#slide8').find(".playBtn").delay(1200).fadeIn(600);
			
			if($('#slide'+position).children().children('.playerContainer').attr('class').indexOf('nodisp')== -1)
			{
				$('#slide'+position).children().children('img').fadeIn(600);
				$('#slide'+position).children().children('.playerContainer').children().remove();
			}
			
			position--;
		}
		else if (position == 8) {
			$('.active').removeClass("active");
			$('#thumb7').addClass('active');
			$("#slideHolder").delay(600).animate({"left": "+=960px"}, "slow");
			$('.slideText').fadeOut(600);
			$('#slide7').find(".slideText").delay(1200).fadeIn(600);
			$('.fullScreen').fadeOut(600);
			$('#slide7').find(".fullScreen").delay(1200).fadeIn(600);
			$('.playBtn').fadeOut(600);
			$('#slide7').find(".playBtn").delay(1200).fadeIn(600);
			
			if($('#slide'+position).children().children('.playerContainer').attr('class').indexOf('nodisp')== -1)
			{
				$('#slide'+position).children().children('img').fadeIn(600);
				$('#slide'+position).children().children('.playerContainer').children().remove();
			}
			
			position--;
		}
		else if (position == 7) {
			$('.active').removeClass("active");
			$('#thumb6').addClass('active');
			$("#slideHolder").delay(600).animate({"left": "+=960px"}, "slow");
			$('.slideText').fadeOut(600);
			$('#slide6').find(".slideText").delay(1200).fadeIn(600);
			$('.fullScreen').fadeOut(600);
			$('#slide6').find(".fullScreen").delay(1200).fadeIn(600);
			$('.playBtn').fadeOut(600);
			$('#slide6').find(".playBtn").delay(1200).fadeIn(600);
			
			if($('#slide'+position).children().children('.playerContainer').attr('class').indexOf('nodisp')== -1)
			{
				$('#slide'+position).children().children('img').fadeIn(600);
				$('#slide'+position).children().children('.playerContainer').children().remove();
			}
			
			position--;
		}
		else if (position == 6) {
			$('.active').removeClass("active");
			$('#thumb5').addClass('active');
			$("#slideHolder").delay(600).animate({"left": "+=960px"}, "slow");
			$('.slideText').fadeOut(600);
			$('#slide5').find(".slideText").delay(1200).fadeIn(600);
			$('.fullScreen').fadeOut(600);
			$('#slide5').find(".fullScreen").delay(1200).fadeIn(600);
			$('.playBtn').fadeOut(600);
			$('#slide5').find(".playBtn").delay(1200).fadeIn(600);
			
			if($('#slide'+position).children().children('.playerContainer').attr('class').indexOf('nodisp')== -1)
			{
				$('#slide'+position).children().children('img').fadeIn(600);
				$('#slide'+position).children().children('.playerContainer').children().remove();
			}		
			
			position--;
		}
		else if (position == 5) {
			$('.active').removeClass("active");
			$('#thumb4').addClass('active');
			$("#slideHolder").delay(600).animate({"left": "+=960px"}, "slow");
			$('.slideText').fadeOut(600);
			$('#slide4').find(".slideText").delay(1200).fadeIn(600);
			$('.fullScreen').fadeOut(600);
			$('#slide4').find(".fullScreen").delay(1200).fadeIn(600);
			$('.playBtn').fadeOut(600);
			$('#slide4').find(".playBtn").delay(1200).fadeIn(600);
			
			if($('#slide'+position).children().children('.playerContainer').attr('class').indexOf('nodisp')== -1)
			{
				$('#slide'+position).children().children('img').fadeIn(600);
				$('#slide'+position).children().children('.playerContainer').children().remove();
			}
			
			position--;
		}
		else if (position == 4) {
			$('.active').removeClass("active");
			$('#thumb3').addClass('active');
			$("#slideHolder").delay(600).animate({"left": "+=960px"}, "slow");
			$('.slideText').fadeOut(600);
			$('#slide3').find(".slideText").delay(1200).fadeIn(600);
			$('.fullScreen').fadeOut(600);
			$('#slide3').find(".fullScreen").delay(1200).fadeIn(600);
			$('.playBtn').fadeOut(600);
			$('#slide3').find(".playBtn").delay(1200).fadeIn(600);
			
			if($('#slide'+position).children().children('.playerContainer').attr('class').indexOf('nodisp')== -1)
			{
				$('#slide'+position).children().children('img').fadeIn(600);
				$('#slide'+position).children().children('.playerContainer').children().remove();
			}		
			
			position--;
		}
		else if (position == 3) {
			$('.active').removeClass("active");
			$('#thumb2').addClass('active');
			$("#slideHolder").delay(600).animate({"left": "+=960px"}, "slow");
			$('.slideText').fadeOut(600);
			$('#slide2').find(".slideText").delay(1200).fadeIn(600);
			$('.fullScreen').fadeOut(600);
			$('#slide2').find(".fullScreen").delay(1200).fadeIn(600);
			$('.playBtn').fadeOut(600);
			$('#slide2').find(".playBtn").delay(1200).fadeIn(600);
			
			if($('#slide'+position).children().children('.playerContainer').attr('class').indexOf('nodisp')== -1)
			{
				$('#slide'+position).children().children('img').fadeIn(600);
				$('#slide'+position).children().children('.playerContainer').children().remove();
			}			
			
			position--;
		}
		else if (position == 2) {
			$('.active').removeClass("active");
			$('#thumb1').addClass('active');
			$("#slideHolder").delay(600).animate({"left": "+=960px"}, "slow");
			$(this).css('display','none');
			$('.slideText').fadeOut(600);
			$('#slide1').find(".slideText").delay(1200).fadeIn(600);
			$('.fullScreen').fadeOut(600);
			$('#slide1').find(".fullScreen").delay(1200).fadeIn(600);
			$('.playBtn').fadeOut(600);
			$('#slide1').find(".playBtn").delay(1200).fadeIn(600);
			
			if($('#slide'+position).children().children('.playerContainer').attr('class').indexOf('nodisp')== -1)
			{
				$('#slide'+position).children().children('img').fadeIn(600);
				$('#slide'+position).children().children('.playerContainer').children().remove();
			}			
			
			position--;
		}
	}

	
	$("#sliderMask").hover(
		function() {
		$('.cycle').stop().animate({"opacity": "1"}, "400");
		},
		function() {
		$('.cycle').stop().animate({"opacity": "0"}, "400");
	});
	
	$(".thumb").hover(
		  function () {
			$(this).find("img").addClass("over");
			//$(this).find("div").css('display','block');
		  },
		  function () {
			$(this).find("img").removeClass("over");
			//$(this).find("div").css('display','none');
		  }
	);
	
	$('.thumb').click(function(){
		$(this).find("img").removeClass('over');
		//$(this).find("div").css('display', 'none');
	});
	
	$("#thumb1").click(function(){
		$("#slideHolder").delay(600).animate({"left": -640 + "px"}, "slow");
		position = 1;
		$('.active').removeClass("active");
		$(this).addClass('active');
		$('#previous').css('display','none');
		$('.slideText').fadeOut(600);
		$('#slide1').find(".slideText").delay(1200).fadeIn(600);
		$('.fullScreen').fadeOut(600);
		$('#slide1').find(".fullScreen").delay(1200).fadeIn(600);
		$('.playBtn').fadeOut(600);
		$('#slide1').find(".playBtn").delay(1200).fadeIn(600);
		/*
		var slideSrc = $(this).find('img').attr('src');
		$('#slide1').children().find('img').attr('src',slideSrc);
		$('#slide1').children('.slideText').children('.bottomRow').children('.headline').text($(this).children('.thumbCap').text());
		$('#slide1').children('.slideText').children('.bottomRow').children('.subhead').text(thumbDesc[position]);
		*/
		$(".slideText[style*='block']").siblings('.slideBack').find('img').fadeIn(600);
		$(".slideText[style*='block']").siblings('.slideBack').children('.playerContainer').children().remove();
		/*
		var videoUrl='./showvideo';
		var p={};
		p['embedcode']=$(this).find('img').attr('id');
		$('#slide1').children().find('.playerContainer').load(videoUrl,p,function(str){});
		*/
	});
	
	$("#thumb2").click(function(){
		$("#slideHolder").delay(600).animate({"left": -1600 + "px"}, "slow");
		position = 2;
		var slideSrc = $(this).find('img').attr('src');
		$('#slide2').children().find('img').attr('src',slideSrc);
		$('#slide2').children('.slideText').children('.bottomRow').children('.headline').text($(this).children('.thumbCap').text());
		$('#slide2').children('.slideText').children('.bottomRow').children('.subhead').text(thumbDesc[position]);
		/*
		var videoUrl='./showvideo';
		var p={};
		p['embedcode']=$(this).find('img').attr('id');
		$('#slide2').children().find('.playerContainer').load(videoUrl,p,function(str){});
		*/
		$(".slideText[style*='block']").siblings('.slideBack').children('.playerContainer').children().remove();
		
		$('.active').removeClass("active");
		$(this).addClass('active');
		$('#previous, #next').css('display','block');
		$('.slideText').fadeOut(600);
		$('#slide2').find(".slideText").delay(1200).fadeIn(600);
		$('.fullScreen').fadeOut(600);
		$('#slide2').find(".fullScreen").delay(1200).fadeIn(600);
		$('.playBtn').fadeOut(600);
		$('#slide2').find(".playBtn").delay(1200).fadeIn(600);
	});
	
	$("#thumb3").click(function(){
		$("#slideHolder").delay(600).animate({"left": -2560 + "px"}, "slow");
		position = 3;
		var slideSrc = $(this).find('img').attr('src');
		$('#slide3').children().find('img').attr('src',slideSrc);
		$('#slide3').children('.slideText').children('.bottomRow').children('.headline').text($(this).children('.thumbCap').text());
		$('#slide3').children('.slideText').children('.bottomRow').children('.subhead').text(thumbDesc[position]);
		/*
		var videoUrl='./showvideo';
		var p={};
		p['embedcode']=$(this).find('img').attr('id');
		$('#slide3').children().find('.playerContainer').load(videoUrl,p,function(str){});
		*/
		$(".slideText[style*='block']").siblings('.slideBack').children('.playerContainer').children().remove();
		
		$('.active').removeClass("active");
		$(this).addClass('active');
		$('#previous, #next').css('display','block');
		$('.slideText').fadeOut(600);
		$('#slide3').find(".slideText").delay(1200).fadeIn(600);
		$('.fullScreen').fadeOut(600);
		$('#slide3').find(".fullScreen").delay(1200).fadeIn(600);
		$('.playBtn').fadeOut(600);
		$('#slide3').find(".playBtn").delay(1200).fadeIn(600);
	});
	
	$("#thumb4").click(function(){
		$("#slideHolder").delay(600).animate({"left": -3520 + "px"}, "slow");
		position = 4;
		var slideSrc = $(this).find('img').attr('src');
		$('#slide4').children().find('img').attr('src',slideSrc);
		$('#slide4').children('.slideText').children('.bottomRow').children('.headline').text($(this).children('.thumbCap').text());
		$('#slide4').children('.slideText').children('.bottomRow').children('.subhead').text(thumbDesc[position]);
		/*
		var videoUrl='./showvideo';
		var p={};
		p['embedcode']=$(this).find('img').attr('id');
		$('#slide4').children().find('.playerContainer').load(videoUrl,p,function(str){});
		*/
		$(".slideText[style*='block']").siblings('.slideBack').children('.playerContainer').children().remove();
		
		$('.active').removeClass("active");
		$(this).addClass('active');
		$('#previous, #next').css('display','block');
		$('.slideText').fadeOut(600);
		$('#slide4').find(".slideText").delay(1200).fadeIn(600);
		$('.fullScreen').fadeOut(600);
		$('#slide4').find(".fullScreen").delay(1200).fadeIn(600);
		$('.playBtn').fadeOut(600);
		$('#slide4').find(".playBtn").delay(1200).fadeIn(600);
	});

	$("#thumb5").click(function(){
		$("#slideHolder").delay(600).animate({"left": -4480 + "px"}, "slow");
		position = 5;
		var slideSrc = $(this).find('img').attr('src');
		$('#slide5').children().find('img').attr('src',slideSrc);
		$('#slide5').children('.slideText').children('.bottomRow').children('.headline').text($(this).children('.thumbCap').text());
		$('#slide5').children('.slideText').children('.bottomRow').children('.subhead').text(thumbDesc[position]);
		/*
		var videoUrl='./showvideo';
		var p={};
		p['embedcode']=$(this).find('img').attr('id');
		$('#slide5').children().find('.playerContainer').load(videoUrl,p,function(str){});
		*/
		$(".slideText[style*='block']").siblings('.slideBack').children('.playerContainer').children().remove();
		
		$('.active').removeClass("active");
		$(this).addClass('active');
		$('#previous, #next').css('display','block');
		$('.slideText').fadeOut(600);
		$('#slide5').find(".slideText").delay(1200).fadeIn(600);
		$('.fullScreen').fadeOut(600);
		$('#slide5').find(".fullScreen").delay(1200).fadeIn(600);
		$('.playBtn').fadeOut(600);
		$('#slide5').find(".playBtn").delay(1200).fadeIn(600);
	});
	
	$("#thumb6").click(function(){
		$("#slideHolder").delay(600).animate({"left": -5440 + "px"}, "slow");
		position = 6;
		var slideSrc = $(this).find('img').attr('src');
		$('#slide6').children().find('img').attr('src',slideSrc);
		$('#slide6').children('.slideText').children('.bottomRow').children('.headline').text($(this).children('.thumbCap').text());
		$('#slide6').children('.slideText').children('.bottomRow').children('.subhead').text(thumbDesc[position]);
		/*
		var videoUrl='./showvideo';
		var p={};
		p['embedcode']=$(this).find('img').attr('id');
		$('#slide6').children().find('.playerContainer').load(videoUrl,p,function(str){});
		*/
		$(".slideText[style*='block']").siblings('.slideBack').children('.playerContainer').children().remove();
		
		$('.active').removeClass("active");
		$(this).addClass('active');
		$('#previous, #next').css('display','block');
		$('.slideText').fadeOut(600);
		$('#slide6').find(".slideText").delay(1200).fadeIn(600);
		$('.fullScreen').fadeOut(600);
		$('#slide6').find(".fullScreen").delay(1200).fadeIn(600);
		$('.playBtn').fadeOut(600);
		$('#slide6').find(".playBtn").delay(1200).fadeIn(600);
	});

	$("#thumb7").click(function(){
		$("#slideHolder").delay(600).animate({"left": -6400 + "px"}, "slow");
		position = 7;
		var slideSrc = $(this).find('img').attr('src');
		$('#slide7').children().find('img').attr('src',slideSrc);
		$('#slide7').children('.slideText').children('.bottomRow').children('.headline').text($(this).children('.thumbCap').text());
		$('#slide7').children('.slideText').children('.bottomRow').children('.subhead').text(thumbDesc[position]);
		/*
		var videoUrl='./showvideo';
		var p={};
		p['embedcode']=$(this).find('img').attr('id');
		$('#slide7').children().find('.playerContainer').load(videoUrl,p,function(str){});
		*/
		$(".slideText[style*='block']").siblings('.slideBack').children('.playerContainer').children().remove();
		
		$('.active').removeClass("active");
		$(this).addClass('active');
		$('#previous, #next').css('display','block');
		$('.slideText').fadeOut(600);
		$('#slide7').find(".slideText").delay(1200).fadeIn(600);
		$('.fullScreen').fadeOut(600);
		$('#slide7').find(".fullScreen").delay(1200).fadeIn(600);
		$('.playBtn').fadeOut(600);
		$('#slide7').find(".playBtn").delay(1200).fadeIn(600);
	});
	
	$("#thumb8").click(function(){
		$("#slideHolder").delay(600).animate({"left": -7360 + "px"}, "slow");
		position = 8;
		var slideSrc = $(this).find('img').attr('src');
		$('#slide8').children().find('img').attr('src',slideSrc);
		$('#slide8').children('.slideText').children('.bottomRow').children('.headline').text($(this).children('.thumbCap').text());
		$('#slide8').children('.slideText').children('.bottomRow').children('.subhead').text(thumbDesc[position]);
		/*
		var videoUrl='./showvideo';
		var p={};
		p['embedcode']=$(this).find('img').attr('id');
		$('#slide8').children().find('.playerContainer').load(videoUrl,p,function(str){});
		*/
		$(".slideText[style*='block']").siblings('.slideBack').children('.playerContainer').children().remove();
		
		$('.active').removeClass("active");
		$(this).addClass('active');
		$('#previous, #next').css('display','block');
		$('.slideText').fadeOut(600);
		$('#slide8').find(".slideText").delay(1200).fadeIn(600);
		$('.fullScreen').fadeOut(600);
		$('#slide8').find(".fullScreen").delay(1200).fadeIn(600);
		$('.playBtn').fadeOut(600);
		$('#slide8').find(".playBtn").delay(1200).fadeIn(600);
	});

	$("#thumb9").click(function(){
		$("#slideHolder").delay(600).animate({"left": -8320 + "px"}, "slow");
		position = 9;
		var slideSrc = $(this).find('img').attr('src');
		$('#slide9').children().find('img').attr('src',slideSrc);
		$('#slide9').children('.slideText').children('.bottomRow').children('.headline').text($(this).children('.thumbCap').text());
		$('#slide9').children('.slideText').children('.bottomRow').children('.subhead').text(thumbDesc[position]);
		/*
		var videoUrl='./showvideo';
		var p={};
		p['embedcode']=$(this).find('img').attr('id');
		$('#slide9').children().find('.playerContainer').load(videoUrl,p,function(str){});
		*/
		$(".slideText[style*='block']").siblings('.slideBack').children('.playerContainer').children().remove();
		
		$('.active').removeClass("active");
		$(this).addClass('active');
		$('#next').css('display','none');
		$('.slideText').fadeOut(600);
		$('#slide9').find(".slideText").delay(1200).fadeIn(600);
		$('.fullScreen').fadeOut(600);
		$('#slide9').find(".fullScreen").delay(1200).fadeIn(600);
		$('.playBtn').fadeOut(600);
		$('#slide9').find(".playBtn").delay(1200).fadeIn(600);
	});

	$(".social").find('div').click(function(){
		$('#shadow').fadeIn(400);
		$('#share').delay(400).fadeIn(400);
	});
	
	$.fn.scrollBottom = function() { 
		return $(document).height() - this.scrollTop() - this.height(); 
	};

	function scrollUp()
	{
		$("html, body").animate({ scrollTop: 0 }, "slow");
		return false;
	}
	
	function scrollDown()
	{
		$("html, body").animate({ scrollBottom: 0 }, "slow");
		return false;
	}
		
	$('body').touchwipe({
		wipeLeft: goNext,
		wipeRight: goPrevious,
		wipeUp: scrollUp,
		wipeDown: scrollDown,
		//wipeUp: function(){ alert('You swiped up!') },
		//wipeDown: function(){ alert('You swiped down!') }
	});/*
	$(window).hashchange(function(){
		if(location.hash != '')
			//load_content();
			alert(window.location.hash);
		else
			//window.location = '/seo-for-ajax/';
			alert("no hash");
	});
	if (window.location.hash)
	{   
		// if it has a hash fragment, trigger the hashchange event
		$(window).hashchange();
	}*/
}