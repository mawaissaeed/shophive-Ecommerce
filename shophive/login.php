<?php  {
	session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap4.css" />

    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    <!-- <link rel="stylesheet" type="text/css" href="custom.scss" /> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>Account</title>
</head>

<body>
<!---------------- Header Start Here  ----------------->

	<?php
		 include_once "header.php" ;
	
	?>

<!---------------- Header End Here  ----------------->
	<div class="container">
        <div class="text-center mt-3  mb-4"><h3>Customer Login</h3></div>
        <div class="row">
        	<div class="col-lg-3"></div>
	        <div class="col-lg-6">
	        	<form action="account.php" method="post">
				  <div class="form-group">

				  	<span class="text-danger"><b>*</b></span>
				    <label for="exampleInputEmail1">Username</label>
				    <input type="email" placeholder="Enter Your Email" 
				    <?php if (isset($_COOKIE['user'])) { ?>
				    	value="<?php echo $_COOKIE['user']; ?>" 
				  <?php  }elseif (isset($_GET['error'])) {
				  		if ($_GET['error'] == "wrongpwd") { ?>
				  			value="<?php echo $_GET['mail']; ?>" 
				  	<?php	}
				  }?>
				    name="email" class="form-control" id="Email" aria-describedby="emailHelp">
				  </div>
				  
				  <div class="form-group">
				  	<span class="text-danger"><b>*</b></span>
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" placeholder="Enter the Password" 
				    <?php if (isset($_COOKIE['user'])) { ?>
				    	value="<?php echo $_COOKIE['pwd']; ?>" 
				  <?php  }?> 
				    name="password" class="form-control" id="Password" onkeyup="validatePassword(this.value);">
				  </div>
				  <span id="msg"></span>
				  <div id="hidecheck">
					  <div class="form-group">
					  	<input type="checkbox" value="rememberMe" name="rememberMe">
					  	<label for="rememberMe">Remember Me</label>
					  </div>
				  </div>
				  <div class="collapse" id="collapseExample">
				  	<div class="form-group">
				  	    <span class="text-danger"><b>*</b></span>
					  	<label for="exampleInputPassword1">Confirm Password</label>
					    <input type="password" placeholder="Enter the Password again" name="Confirm_password" class="form-control" id="Password2">
					    <small>Click on SignUp to create account</small>
				    </div>
				  </div>
				  <div class="text-center">
				  	<div class="form-group">
					    <input type="submit" value="Sign In" name="signin" class="btn btn-danger" class="form-control" onclick="validate();"id="exampleInputPassword1">
					    <input type="submit" value="Sign Up" name="signup" class="collapse btn btn-danger" id="collapseExample" class="form-control" onclick="validate2();" id="exampleInputPassword2">
				    </div>
				    <?php
				    	if (isset($_GET['error'])) {
				    		if($_GET['error'] == "emailalreadyRegistered"){
				    			echo '<p class="text-danger">This Email is already registered!</p>';
				    		}
				    		if($_GET['error'] == "wrongpwd"){
				    			echo '<p class="text-danger">Incorrect Password!<br>Please enter the valid password</p>';
				    		}
				    		if($_GET['error'] == "nouser"){
				    			echo '<p class="text-danger">Do not have an account!<br>Please create an account before login</p>';
				    		}

				    		//echo '<a href="login.php" class="btn btn-success">Click Me! to re-submit the form </a>';
				    		echo '<script> setTimeout(function() { window.location.href = "http://localhost/shophive/login.php"; }, 2000);</script>';

				    	}
				    	elseif (isset($_GET['signup'])) {
				    		if ($_GET['signup'] == "success") {
				    		echo '<p class="text-success">SignUp successful!</p>';
				    		//echo '<a href="login.php" class="btn btn-success">Click Me! to re-submit the form </a>';
				    		echo '<script> setTimeout(function() { window.location.href = "http://localhost/shophive/login.php"; }, 2000);</script>';

				    		}
				    		
				    	}
				    		
				    	elseif (isset($_GET['login'])) {
				    		if ($_GET['login'] == "success") {
				    		echo '<p class="text-success">SignIp successful!</p>';
				    		}
				    		
				    	}

				    ?>
				    
				  </div>

				</form>
	        </div>
	    </div>
	    <div class="row mt-4">
	    	<div class="col-lg-3"></div>
	    	<div class="col-lg-6 mt-3">
	    		<h4 class="text-center">NEW CUSTOMERS</h4>
	    		<p>Creating an account has many benefits: check out faster, keep more than one address, track orders and more.</p>
	    		<div class="text-center mb-4"><button type="signup" class="btn btn-dark" data-toggle="collapse" onclick="hide();"data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Create Account</button></div>

	    	</div>
	    </div>
    </div>
<!---------------- Header Start Here  ----------------->

	<?php if (!include_once "footer.php") { 
	include_once "footer.php" ;
}?>

<!---------------- Header End Here  ----------------->
</body>
</html>








