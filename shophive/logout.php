<?php 
	if (!isset($_SESSION)) {
	session_start();
} 
	if(isset($_POST['logout']))
	 {
		session_destroy();
		echo "session_destroy()";
		header('location:index.php');

	}
?>
