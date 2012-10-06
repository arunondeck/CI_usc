$(document).ready(function(){

	ActionOnDomReady();
	
	$(window).hashchange(function(){
		if(location.hash != '')
		{
			filt=window.location.hash.substring(2).toUpperCase();
			//alert(filt);
			var text=filt.replace("_"," "); 
			if(text=='CATEGORIES')
				$(".cat-slide").trigger('click');
				
			else if(document.title != "UnilifeTV - "+text)
			{
				var url='./view/';
				
				url+=filt;
				var p = {};
				p['filter'] = $(".activeFilt").text().replace(" ",'_');
				$('#panel').load(url,p,function(str){
					$('*').unbind();
					$('window').unbind("hashchange");
					ActionOnDomReady();
					//alert(filt);
					$(".upArrow").trigger('click');
					$("a:contains(" + text + ")").addClass("activeCat")
				.parent().siblings()
				.find("a").removeClass("activeCat");
					
					document.title = "UnilifeTV - "+text;
				});
			}
		}
	});
	if(window.location.hash!='')
	{
		filt=window.location.hash.substring(2);
		if(filt=='CATEGORIES')
			$(".cat-slide").trigger('click');
		else
		{
			var url='./view/';
			var text=filt.replace("_"," "); 
			url+=filt;
			var p = {};
			p['filter'] = $(".activeFilt").text().replace(" ",'_');
			$('#panel').load(url,p,function(str){
				$('*').unbind();
				$('window').unbind("hashchange");
				ActionOnDomReady();
				$("a:contains(" + text + ")").addClass("activeCat")
				.parent().siblings()
				.find("a").removeClass("activeCat");
				$(".upArrow").trigger('click');
				document.title = "UnilifeTV - "+text.toUpperCase();
			});
		}
	}
	/*
	else
		alert('po');
	*/			

	
});