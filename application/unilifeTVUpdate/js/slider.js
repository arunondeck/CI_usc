$(document).ready(function(){
	var position = 5;

	$(".cycle").click(function(){
		$('.shadow').fadeOut(600).delay(600).fadeIn(600);
	});
	
	$(".thumb").click(function(){
		$('.shadow').fadeOut(600).delay(600).fadeIn(600);
	});
	
	$("#next").click(function(){
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
			position++;
		}
	});
	
	$("#previous").click(function(){
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
			position--;
		}
	});
	
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
			$(this).find("div").css('display','block');
		  },
		  function () {
			$(this).find("img").removeClass("over");
			$(this).find("div").css('display','none');
		  }
	);
	
	$('.thumb').click(function(){
		$(this).find("img").removeClass('over');
		$(this).find("div").css('display', 'none');
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
	});
	
	$("#thumb2").click(function(){
		$("#slideHolder").delay(600).animate({"left": -1600 + "px"}, "slow");
		position = 2;
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
});