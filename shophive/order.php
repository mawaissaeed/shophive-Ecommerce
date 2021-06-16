<?php
session_start();
	
	// $GLOBALS['OrderList'];
	include_once 'connection.php';


	if (isset($_POST['addToCart'])) {
		
		$array_ids=explode("|", $_SESSION["user"]);
		echo "array_ids: ".$array_ids."<br>";
		$p_id= $_POST['product_id'];
		array_push($array_ids,$p_id);

		$string_ids=implode("|",$array_ids);
		echo "array_ids: ".$string_ids."<br>";

		$_SESSION["user"] = $string_ids;
		// Extra Stuff
		$brand = $_POST['brand_name'];
		$name = $_POST['name'];
		$desc = $_POST['description'];
		$price = $_POST['price'];
		$qty = $_POST['qty'];
		echo $brand."<br>";
		echo $name."<br>";
		echo $desc."<br>";
		echo $price."<br>";
		echo $qty."<br>";
		
		header('location:index.php#'.$brand);
	}
	elseif (isset($_POST['Order_id'])) {
		$id = $_POST['Order_id'];
		echo "id: ".$id;
		$array_ids=explode("|", $_SESSION["user"]);
		if (($key = array_search($id, $array_ids)) !== false) {
   		 unset($array_ids[$key]);
		}
		$string_ids=implode("|",$array_ids);
		$_SESSION["user"] = $string_ids;
		header('location:myCart.php');
	}
	elseif (isset($_POST['Buy'])) {
		$email = $_SESSION['email'];
		$array_ids=explode("|", $_SESSION["user"]);
		foreach ($array_ids as $key => $value) {
			echo "$key: ".$value;
			if ($value != -1) {
				$querry = "insert into product_order (product_id,customers_email,date) values('$value', '$email', CURRENT_DATE())";
				echo "$querry";
				mysqli_query($conn, $querry) or die("Failed to query database ".mysqli_error($conn));
				$querry = "UPDATE products SET quantity = quantity - 1 WHERE `products`.`id` = '$value'";
				echo "$querry";
				mysqli_query($conn, $querry) or die("Failed to query database ".mysqli_error($conn));
			}
			
		}
		unset($_SESSION["user"]);
		header('location:myCart.php');
	}
	
 ?>