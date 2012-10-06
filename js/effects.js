function ActionOnDomReady()
{
	var position = 5;
	Slider();
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
		
		var centerSlide = $(".slideText[style*='block']").parent().attr('id');
		//alert(centerSlide);
		var selector = '#'+centerSlide;
		$(selector).children('.slideBack').children('img').fadeIn(600);
		$(selector).children('.slideBack').children('.playerContainer').children().empty();
		$(selector).children('.slideBack').children('.playerContainer').children().remove();
		$(selector).children('.playBtn').attr('style','display:block;');

		var nav=$(this).text();
		var url='./view/';
		url+=nav.replace(" ",'_');
		var p = {};
		p['filter'] = $(".activeFilt").text().replace(" ",'_');
		$('#panel').load(url,p,function(str){
			$('*').unbind();
			$('window').unbind("hashchange");
			ActionOnDomReady();
			document.title = "UnilifeTV - "+nav;
		});

	});

	$(".cat-slide").click(function(){

		$(".slideText[style*='block']").siblings('.slideBack').find('img').fadeIn(600);
		$(".slideText[style*='block']").siblings('.slideBack').find('.playerContainer').children().empty();
		$(".slideText[style*='block']").siblings('.slideBack').find('.playerContainer').children().remove();
		$(".slideText[style*='block']").siblings('.playBtn').attr('style','display:block;');
		
		$("#panelCont").stop().animate({top: 0 }, 1200);
		$("#panel").stop().animate({height: '843px' }, 1200);
		$(".upArrow").hide();
		$(".downArrow").show();
		document.title = 'UnilifeTV Video Categories';
	});
	
	$(".upArrow").click(function(){
		$(".slideText[style*='block']").siblings('.slideBack').find('img').fadeIn(600);
		$(".slideText[style*='block']").siblings('.slideBack').find('.playerContainer').children().empty();
		$(".slideText[style*='block']").siblings('.slideBack').find('.playerContainer').children().remove();
		$(".slideText[style*='block']").siblings('.playBtn').attr('style','display:block;');
		
		$("#panelCont").stop().animate({top: 0 }, 1200);
		$("#panel").stop().animate({height: '843px' }, 1200);
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
		document.title = 'UnilifeTV';
	});
	
	$(".filtNav").click(function(){
		$(this).addClass("activeFilt")
			.parent().siblings()
			.find("a").removeClass("activeFilt");
			var url='./view/'
			url+=$(".activeCat").text().replace(" ",'_');
			var p={};
			p['filter']=$(this).text().replace(" ",'_');
			$('#panel').load(url,p,function(str){		
				$('*').unbind();
				ActionOnDomReady();			
			});

	});
	
	$(".vidThumb").hover(function(){
		$(this).children()
		.find(".thumbOverlay").toggleClass("activeVid");
	});
	
	$(".vidThumb").click(function(){
		if($(this).children().hasClass('vidThumb'))
		{
			var newImg = $(this).children().find('img').attr('src');
			$(".slideText[style*='block']").siblings('.slideBack').find('.playerContainer').children().remove();
			$(".slideText[style*='block']").siblings('.slideBack').find('img').attr('src',newImg);
			$(".slideText[style*='block']").siblings('.slideBack').find('img').attr('id',$(this).children().find('img').attr('id'));
			$(".slideText[style*='block']").siblings('.slideBack').find('img').fadeIn(600);
			$(".slideText[style*='block']").siblings('.playBtn').fadeIn(0);
			$(".slideText[style*='block']").find('.headline').text($(this).siblings('.vidText').children('.title').text());
			$(".slideText[style*='block']").find('.subhead').text($(this).siblings('.vidText').children('.caption').text());
			$('.active').removeClass('active');
			document.title='UnilifeTV - '+$(this).children().find('img').attr('alt');;
		}
		
		$("#panelCont").stop().animate({top: '672px' }, 1000);
		$("#panel").stop().animate({height: '171px' }, 1000);
		$(".downArrow").hide();
		$(".upArrow").show();
		$('html,body').animate({
			scrollTop: $("#header").offset().top
			}, 1000);
	});
	

	$(".watch").click(function(){
	    var parentThis = $(this).parent().parent();
		if(parentThis.children().hasClass('vidThumb'))
		{
			var newImg = parentThis.children().find('img').attr('src');
			$(".slideText[style*='block']").siblings('.slideBack').find('.playerContainer').children().remove();
			$(".slideText[style*='block']").siblings('.slideBack').find('img').attr('src',newImg);
			$(".slideText[style*='block']").siblings('.slideBack').find('img').attr('id', parentThis.children().find('img').attr('id'));
			$(".slideText[style*='block']").siblings('.slideBack').find('img').fadeIn(600);
			$(".slideText[style*='block']").siblings('.playBtn').fadeIn(0);
			$(".slideText[style*='block']").find('.headline').text(parentThis.siblings('.vidText').children('.title').text());
			$(".slideText[style*='block']").find('.subhead').text(parentThis.siblings('.vidText').children('.caption').text());
		}
		
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
		if($(this).val()!='')
		{
			var url='./search/'
			url+=$(this).val().replace(" ",'_');
			$('#panel').load(url,function(str){		
				$('*').unbind();
				ActionOnDomReady();	
			});
		}
		$("#panelCont").stop().animate({top: 0 }, 1000);
		$("#panel").stop().animate({height: '843px' }, 1000);
    }
	});
	$('.playBtn').click(function(){
		$(this).siblings().find('img').fadeOut(600);;
		$(this).attr('style','display:none;');
		$('#current').removeAttr('id');
		var videoUrl='./showvideo';
		var p={};
		p['embedcode']=$(this).siblings('.slideBack').find('img').attr('id');
		$(this).siblings('.slideBack').find('.playerContainer').attr('id','current');
		$(this).siblings('.slideBack').find('.playerContainer').load(videoUrl,p,function(str){});
		document.title='UnilifeTV - '+$(this).siblings('.slideText').find('.headline').text();
	});
}