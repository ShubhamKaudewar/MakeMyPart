function Response(){
    var field1 = $("#pname").val();
    var field2 = $("#quantity").val();
	var field3 = $("#name").val();
    var field4 = $("#email").val();
    var field5 = $("#number").val();
	var field6 = $("#desc").val();
 				
	if(field1 == ""){
		alert('Please Fill Product Name !');
		document.getElementById("pname").focus();
		return false;
	}
	if(field2 == ""){
		alert('Please Fill Quantity !');
		document.getElementById("quantity").focus();
		return false;
	}
	if(field3 == ""){
		alert('Please Enter Your Full Name !');
		document.getElementById("name").focus();
		return false;
	}
	if(field4 == ""){
		alert('Please Enter Valid Email Address !');
		document.getElementById("email").focus();
		return false;
	}
	if(field5 == "" || field5.length > 10 || field5.length < 10){
		alert('Please Fill Valid Mobile Number !');
		document.getElementById("number").focus();
		return false;
	}
    $.ajax({
        url: "https://docs.google.com/forms/u/0/d/e/1FAIpQLSf9kXL4jxsAk2_86PHEtdze6G2DcKshMg5OsEM5Dlm1GLrG6Q/formResponse?",
		data: {
            "entry.1236896618": field1,
            "entry.1590762336": field2,
            "entry.1052244184": field3,
            "entry.46929244": field4,
            "entry.1884134641": field5,
            "entry.1354142428": field6,},
            type: "POST",
            dataType: "xml",
            success: function(d){},
					  error: function(x, y, z)
						{
						}});
				return true;
        }