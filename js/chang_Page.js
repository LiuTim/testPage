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
		}
		if(getUrlHash=="#product_Tube_self-ballasted_T5"){
			$("#content").load("product_info.html");
				var ss = getUrlHash.split("_");
				for (var i in ss) {
				   console.log(ss[i]);
				   document.getElementById("Level"+i).innerHTML=ss[i];
				}
		}

	});

})