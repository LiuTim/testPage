$(document).ready(function(){
	//var getTableID = window.location.hash;
	//alert(getTableID);

	$(window).bind('hashchange', function() {
 		var getTableID = window.location.hash;
		//console.log(getTableID);
		var getNum = getTableID.substring(5, 6);
		//console.log(getNum);
		var itemNum = parseInt(getNum);

		switch (itemNum){
			case 1:
				console.log("select item1")
				$("#content").load("item1_content.php")
				break;
			case 2:
				console.log("select item2")
				$("#content").load("item2_content.php")
				break;
			default:
				console.log("test")
				$("#content").load("welcome.html")
				break;
		}

	});

})