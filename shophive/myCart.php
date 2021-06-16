<?php {
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
			  	<a href="history.php" class="btn btn-info mb-2 "> <b>History</b></a>
				</div>
		<?php }
		?>
	    <div class="row">
	    <table class="table table-striped">
	      <thead>
	        <tr>
	          <th scope="col">#</th>
	          <th scope="col">Company</th>
	          <th scope="col">Product</th>
	          <th scope="col">Price</th>
	          <th scope="col">Delete</th>
	        </tr>
	      </thead>
	    <tbody>
	     
	    <?php
	    if (isset($_SESSION["user"])) {  
		$array_ids=explode("|", $_SESSION["user"]);
		$i = 0;
		$total = 0;
		if ($_SESSION["user"] != "-1" or $_SESSION["user"] != "|") {
			foreach ($array_ids as $key => $value) {
			if ($value != -1) {
    			$query = "SELECT brand_name,name,price,id FROM products WHERE id = '$value' ";
				$result = mysqli_query($conn,$query) or die("Failed to query database ".mysqli_error($conn));
				$resultCheck = mysqli_num_rows($result);
				if ($resultCheck > 0) {
					$row = mysqli_fetch_assoc($result);
					$i++;
					$total+= $row['price'];?>
					<tr>
					<th scope="row"><?php echo $i ?></th>
					<td scope="row"><?php echo $row['brand_name']?></td>
					<td scope="row"><?php echo $row['name']?></td>
					<td scope="row"><?php echo $row['price']?></td>
					<td><button value="<?php echo $row['id'] ?>" name="Order_id" class="btn btn-white"><i class="fa fa-trash"></i></button></td>
					</tr>
				<?php	}
				
				}
			}
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
	    <?php if (!isset($_SESSION['email'])) { ?>
	    	<div class="container">
			 <h3 class="text-center text-dark">To Buy Cart items Please login!</h3>
			</div>
	   <?php } ?>
	    
	  </div>
	  <?php
	  	
	    if (isset($_SESSION['email']) && array_count_values($array_ids) > 1) {
	        // $email = $_SESSION['email'];
	    ?>
	  <div class="text-center">
	  	<div class="form-group">
		    <input type="submit" value="Buy" name="Buy" class="btn btn-danger" class="form-control" id="exampleInputPassword1">
	    </div>
	  </div>
	  <?php }
	} else{
			echo '<div class="container">
			    <h3 class="text-center text-info">Cart is empty!</h3>
			</div>';
		}
		?>
	</form>
		
	
</div>


	

<!---------------- Body End Here  ----------------->



<!---------------- Header Start Here  ----------------->

	<?php include "footer.php" ;?>

<!---------------- Header End Here  ----------------->
</body>
</html>








