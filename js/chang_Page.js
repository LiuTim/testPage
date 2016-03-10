$(document).ready(function(){

	$(function(){

	  $(window).hashchange( function(){
	  		/*-- 主選項切換 --*/
	  		if(location.hash==""){
				$("#content").load("indexContent.html");
			}
		   if(location.hash=="#index"){
				$("#content").load("indexContent.html");
			}
			if(location.hash=="#about"){
				$("#content").load("about.html");
			}
			if(location.hash=="#product"){
				$("#content").load("product.html");
				//$.getScript("js/getProdInfoPage.js");
			}
			if(location.hash=="#contact"){
				$("#content").load("Contact.html");	
			}
			/*-- 產品資訊頁面切換 --*/
			if(location.hash=="#product_Tube_self-ballasted_T5"){
				$("#content").load("Tube_T5.html");	
			}
			if(location.hash=="#product_Tube_self-ballasted_T8"){
				$("#content").load("Tube_T8.html");	
			}
	  })
	  
	$(window).hashchange();

	});

})//end document.ready()






