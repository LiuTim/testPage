function checkContactForm() {

		if(visitorForm.CompanyName.value == ""){
			alert("Company Name must be filled in.");
			history.back();
			$("#CustomerInfo input[name='CompanyName']").addClass("error");
		}
		else 
			document.getElementById("CustomerInfo").submit();

}