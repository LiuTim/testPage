$(document).ready(function(){

	$("#content").load("indexContent.html");

	$(window).bind('hashchange', function() {
 		var getUrlHash = window.location.hash;

		if(getUrlHash=="#index"){
			$("#content").load("indexContent.html");
		}
		if(getUrlHash=="#about"){
			$("#content").load("about.html");
		}
		if(getUrlHash=="#product"){
			$("#content").load("product.html");
			$.getScript("js/getProdInfoPage.js");
		}
		if(getUrlHash=="#contact"){
			$("#content").load("Contact.html");
			
		}

	});//end hashchange

})//end document.ready()




