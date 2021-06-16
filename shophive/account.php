
<?php 
	session_start();

	include_once 'connection.php';
	

	$email = $_POST['email'];
	$pwd = $_POST['password'];
	$CM_pwd = $_POST['Confirm_password'];
	$msg = "";

	if (isset($_POST['signup'])) {
		$sql = "SELECT * FROM customers WHERE email = '$email'";
	 	$result = mysqli_query($conn, $sql) or die("Failed to query database ".mysqli_error($conn));
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck > 0 ) {
			header('location:login.php?error=emailalreadyRegistered');
			exit();
		}
		else{
			$querry = "insert into customers (email, password) values('$email','$pwd')";
			mysqli_query($conn, $querry);
			header('location:login.php?signup=success');

		}
	} 
	else if(isset($_POST['signin'])){
		
		$query1 = "select * from customers where email = '$email'";
		$query2 = "select * from customers where email = '$email' and password = '$pwd' ";
		$result1 = mysqli_query($conn, $query1) or die("Failed to query database ".mysqli_error($conn));
		$result2 = mysqli_query($conn, $query2) or die("Failed to query database ".mysqli_error($conn));
		$resultCheck1 = 0;
		$resultCheck2 = 0;
		if (isset($result1)) {
			$resultCheck1 = mysqli_num_rows($result1);
			
		}
		if (isset($result2)) {
			$resultCheck2 = mysqli_num_rows($result2);
			
		}

		$row = mysqli_fetch_array($result2);

		if ($resultCheck1 > 0) {
			if ($resultCheck2 > 0) {
				if (isset($_POST['rememberMe'])) {
					$cookie_name = "user";
					$cookie_value = "$email";
					setcookie($cookie_name,$cookie_value,time()+ (86400), "/");
					$cookie_pwd = "pwd";
					$cookie_pass = "$pwd";
					setcookie($cookie_pwd,$cookie_pass,time()+ (86400), "/");
				}
				else{
					if ($email != $_COOKIE['user']) {
						setcookie("user",$_COOKIE['user'],time()- (86400), "/");
						setcookie("pwd",$_COOKIE['pwd'],time()- (86400), "/");

					}
				}
				$_SESSION["email"] = $row['email'];
				$msg = "Welcome! ".$row['email'];
				}
				else{
					echo "Please Enter a Valid password";
					header('location:login.php?error=wrongpwd&mail='.$email);
					exit();
				}
			} 
			else{
				$msg = "Failed to login! Invalid email or password!<br>if you don't have an account. Please Create New Account.";
				echo $msg;
				header('location:login.php?error=nouser');
				exit();
				}
			
			header('location:index.php?login=success');
		
	}
		 
			


 ?>
