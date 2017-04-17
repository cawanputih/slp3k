function ValidationForm() {
	
	// Notifying blank fields
	var username = document.getElementById("idusername").value;
	var password = document.getElementById("idpassword").value;
	
		
	// Check all blank values

	if (username == '' || password == '') {
		alert("Please fill all fields");
	} else {	
		// Check all values filled by user are Valid or Not. If all fields are invalid then generate alert
			// Check whether username (email) and password are match
			validate_match(username, password);
			
			var match_status = document.getElementById("match_status").innerHTML;
			
			// Trim white space
			match_status = (match_status.trim) ? match_status.trim() : match_status.replace(/^\s+/,'');
			
			if (match_status == "match") {
				document.getElementById("login_form").submit();
			} else if (match_status == "not_match") {
				alert("Invalid username and password combination");
			} 
	}
	
}

function validate_match(user, pass) {
	var xmlhttp;
	
	if (window.XMLHttpRequest) { 
		// for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else { 
		// for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
			document.getElementById("match_status").innerHTML = "Validating";
		} else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("match_status").innerHTML = xmlhttp.responseText;
		} else {
			//document.getElementById("match_status").innerHTML = "Error Occurred";
		}
	}
	
	xmlhttp.open("GET", "server/validationserver.php?username=" + user + "&password=" + pass, false);
	xmlhttp.send();
}