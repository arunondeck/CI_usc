$(document).ready(function(){
	
	$(".catNav").click(function(){
		$(".upArrow").hide();
		$(".downArrow").show();
		$(this).addClass("activeCat")
			.parent().siblings()
			.find("a").removeClass("activeCat");
		$("#panelCont").stop().animate({top: 0 }, 1000);
		$("#panel").stop().animate({height: '843px' }, 1000);
		$('html,body').animate({
			scrollTop: $("#header").offset().top
		}, 1000);
	});

	$(".cat-slide").click(function(){
		$("#panelCont").stop().animate({top: 0 }, 1000);
		$("#panel").stop().animate({height: '843px' }, 1000);
		$(".upArrow").hide();
		$(".downArrow").show();
	});
	
	$(".upArrow").click(function(){
		$("#panelCont").stop().animate({top: 0 }, 1000);
		$("#panel").stop().animate({height: '843px' }, 1000);
		$(".upArrow").hide();
		$(".downArrow").show();
		$('html,body').animate({
			scrollTop: $("#header").offset().top
		}, 1000);
	});
	
	$(".downArrow").click(function(){
		$("#panelCont").stop().animate({top: '672px' }, 1000);
		$("#panel").stop().animate({height: '171px' }, 1000);
		$(".downArrow").hide();
		$(".upArrow").show();
	});
	
	$(".filtNav").click(function(){
		$(this).addClass("activeFilt")
			.parent().siblings()
			.find("a").removeClass("activeFilt");
	});
	
	$(".vidThumb").hover(function(){
		$(this).children()
		.find(".thumbOverlay").toggleClass("activeVid");
	});
	
	$(".vidThumb").click(function(){
		$("#panelCont").stop().animate({top: '672px' }, 1000);
		$("#panel").stop().animate({height: '171px' }, 1000);
		$(".downArrow").hide();
		$(".upArrow").show();
		$('html,body').animate({
			scrollTop: $("#header").offset().top
			}, 1000);
	});
	
	$("#shadow").css("height", $(document).height()).hide();
	 
	$(".lightSwitcher").click(function(){
		$("#shadow").fadeIn(400);
		$("#contact").delay(400).fadeIn(400);
	});
	
	$("#shadow").click(function(){
		$("#shadow").delay(400).fadeOut(400);
		$("#contact").fadeOut(400);
		$("#share").fadeOut(400);
	});
	
	$("#contactClose").click(function(){
		$("#shadow").delay(400).fadeOut(400);
		$("#contact").fadeOut(400);
	});
	
	$("#shareClose").click(function(){
		$("#shadow").delay(400).fadeOut(400);
		$("#share").fadeOut(400);
	});
	
	$("#searchBox").keyup(function(event){
    if(event.keyCode == 13){
		$("#panelCont").stop().animate({top: 0 }, 1000);
		$("#panel").stop().animate({height: '843px' }, 1000);
    }
	});

	
});