$(document).ready(function(){

	$(function(){

	  $(window).hashchange( function(){
	  		location.hash
		   if(location.hash=="#index"){
				$("#content").load("indexContent.html");
			}
			if(location.hash=="#about"){
				$("#content").load("about.html");
			}
			if(location.hash=="#product"){
				$("#content").load("product.html");
				$.getScript("js/getProdInfoPage.js");
			}
			if(location.hash=="#contact"){
				$("#content").load("Contact.html");	
			}
	  })
	  
	$(window).hashchange();

	});

})//end document.ready()






