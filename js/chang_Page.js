$(document).ready(function(){

	$("#content").load("indexContent.html");

	$(window).bind('hashchange', function() {
 		var getUrlHash = window.location.hash;
		console.log(getUrlHash);

		if(getUrlHash=="#index"){
			$("#content").load("indexContent.html");
		}
		if(getUrlHash=="#about"){
			$("#content").load("about.html");
		}

	});

})