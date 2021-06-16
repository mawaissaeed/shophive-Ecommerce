<?php if (!isset($_SESSION)) {
	session_start();
}
include_once 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap4.css" />
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="custom.scss" /> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>Account</title>
</head>

<body>
<!---------------- Header Start Here  ----------------->

	<?php include "header.php" ;?>

<!---------------- Header End Here  ----------------->


	
<!---------------- Body Start Here  ----------------->

<div class="container mt-5">
	<form action="order.php" method="post">
		<?php  if (isset($_SESSION['email'])) {
			        // $email = $_SESSION['email'];
			    ?>
			  
			  <div class="text-right">
			  	<a href="myCart.php" class="btn btn-info "> <b>Back to Cart</b></a>
			  </div>
		
	    <div class="row">
	    <h5 class="text text-left text-dark">Purchased Items</h5>
	    <table class="table table-striped">
	      <thead>
	        <tr>
	          <th scope="col">#</th>
	          <th scope="col">Company</th>
	          <th scope="col">Product</th>
	          <th scope="col">Price</th>
	        </tr>
	      </thead>
	    <tbody>
	     
	     <?php 
	    $email = $_SESSION['email'];  
    	$query = "SELECT brand_name,name,price FROM product_order JOIN products ON (`product_order`.`product_id` = `products`.`id`) 
    	WHERE customers_email = '$email'" ;
    	//echo $query;
		$result = mysqli_query($conn,$query) or die("Failed to query database ".mysqli_error($conn));
		$resultCheck = mysqli_num_rows($result);
		$total = 0;
		if($resultCheck > 0){
			$i = 0;
			while($row = mysqli_fetch_assoc($result)){ 
				$i=$i+1;		
				$total+= $row['price']?>
				<tr>
				<th scope="row"><?php echo $i ?></th>
		        <td><?php echo $row['brand_name'] ?></td>
		        <td><?php echo $row['name'] ?></td>
		        <td><?php echo $row['price'] ?></td>
		        </tr>

		<?php  }
		}
		else{?>
			<div class="container">
			    <h3 class="text-center text-info">You didn't Purchased anything!</h3>
			</div>
		<?php	
			}
			?>
			<tr>
				<th scope="row"></th>
		        <th><h5><b>Total</b></h5></th>
		        <td></td>
		        <th><h5><?php echo $total ?></h5></th>
		        <td></td> 
		    </tr>    
	      </tbody>
	    </table>
	    
	    
	  </div>
	  <?php }
		?>
	</form>
	
</div>


	

<!---------------- Body End Here  ----------------->



<!---------------- Header Start Here  ----------------->

	<?php include "footer.php" ;?>

<!---------------- Header End Here  ----------------->
</body>
</html>








