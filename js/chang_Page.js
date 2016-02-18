$(document).ready(function(){

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