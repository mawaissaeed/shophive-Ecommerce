<?php
session_start();
$error = "All Fields are Required";
class validation{
	function validate(){
	$username = $useremail = $userpassword = $userrpassword = "";

	$checkemail = "uofn.edu.om";
	$error = "All Fields are Required";
	if($_POST){
		$username = $_POST['uname'];
		$useremail = $_POST['uemail'];
		$userpassword = $_POST['upass'];
		$userrpassword = $_POST['urpass'];
		$pos = strpos($useremail, "@"); 
		$sstring = substr($useremail,$pos+1);
		if($username != ""){
			if($useremail!="" && $sstring == $checkemail){
				if(strcmp($userpassword, $userrpassword)==0 && $userpassword != "" && $userrpassword !=""){
					$_SESSION['username'] = $useremail;
					$_SESSION['userpassword'] = $userpassword;
					header("location:login.php");
		}
		else{ $error = "Password and Re-Type Password did not match";}
		}
		else{ $error = "Please use only unizwa email address";}
		}
		else{ $error = "Please Enter full name";}
		}
	}
}


 validation::validate();

?>


<HTML>
<head>
<title>Std Register Form</title></head>
<body bgcolor="cyan"

<div style="margin-left:20%;width:60%;">
<form id="registration" method="POST" action="#">
<fieldset><legend>Std Register Form</legend>
<ul style="list-style-type:none;">
<li><p style="text-align:center; color:red; font-size:10pt;">
<?php echo $error;?></p></li>
</ul><ul style="list-style-type:none; margin-left:8%;">
<li style="margin-bottom:.5em;"><input style="padding: 10px; border: 1px solid red;" type="text" placeholder="Enter
Full Name" name="uname"
style="height:24px; width:300px;"/></li>
<li style="margin-bottom:.5em;"><input style="padding: 10px; border: 1px solid red;" type="email" placeholder="Enter
Email-Id" name="uemail" style="height:24px; width:300px;"/></li>
<li style="margin-bottom:.5em;"><input style="padding: 10px; border: 1px solid red;" type="password"
placeholder="Enter Password" name="upass" style="height:24px; width:300px;"/></li>
<li style="margin-bottom:.5em;"><input style="padding: 10px; border: 1px solid red;" type="password"
placeholder="Re-Type Password" name="urpass" style="height:24px; width:300px;"/></li>
<li style="margin-bottom:.5em;"><input style="padding: 10px; border: 1px solid red;" type="submit"
value="Register" name="regbutton" style="border-radius:5px;margin-left:30%;"/></li>
<ul></fieldset></form></div>

</body>
</HTML>
