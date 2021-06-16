function validate(){
	var email=document.getElementById('Email').value;
	var pass=document.getElementById('Password').value;
	pass = pass.trim();
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

	if(email.match(mailformat)){
		if(pass.length==0) {
			alert("Please Enter Valid Password.");
			return false;	
		}
		else{
			return true;
		}
	}
	else
	{
		alert("Please Enter a Valid Email Address!");
		return false;
	}
}
function validate2(){
	var email2=document.getElementById('Email').value;
	var pass2=document.getElementById('Password').value;
	var repass=document.getElementById('Password2').value;
	pass2 = pass2.trim();
	repass = repass.trim();
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

	if(email2.match(mailformat)){
		if(!pass2) {
			alert("Please Enter Valid Password");
			return false;	
		}
		else{
			if (repass==pass2) {
				return true;
			}
			else{
				alert("Password and confirm Password should be the same.");
				return false;
			}
		
		}
	}
	else
	{
		alert("Please Enter a Valid Email Address!");
		return false;
	}
}
function hide() {
    var ele = document.getElementById("hidecheck");
    if(ele.style.display == "none") {
            ele.style.display = "block";
    }
    else {
        ele.style.display = "none";
    }
} 
function validatePassword(password) {
                
                // Do not show anything when the length of password is zero.
                if (password.length === 0) {
                    document.getElementById("msg").innerHTML = "";
                    return;
                }
                // Create an array and push all possible values that you want in password
                var matchedCase = new Array();
                matchedCase.push("[$@$!%*#?&]"); // Special Charector
                matchedCase.push("[A-Z]");      // Uppercase Alpabates
                matchedCase.push("[0-9]");      // Numbers
                matchedCase.push("[a-z]");     // Lowercase Alphabates

                // Check the conditions
                var ctr = 0;
                for (var i = 0; i < matchedCase.length; i++) {
                    if (new RegExp(matchedCase[i]).test(password)) {
                        ctr++;
                    }
                }
                // Display it
                var color = "";
                var strength = "";
                switch (ctr) {
                    case 0:
                    case 1:
                    case 2:
                        strength = "Very Weak";
                        color = "red";
                        break;
                    case 3:
                        strength = "Medium";
                        color = "orange";
                        break;
                    case 4:
                        strength = "Strong";
                        color = "green";
                        break;
                }
                document.getElementById("msg").innerHTML = strength;
                document.getElementById("msg").style.color = color;
}

