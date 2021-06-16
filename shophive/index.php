<?php 
session_start();
if (!isset($_SESSION['user'])) {
	
	$array_ids = array(-1);
	$string_ids=implode("|",$array_ids);
	$_SESSION['user'] = $string_ids;
}
include_once "connection.php";
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
    <title>Home</title>
</head>

		
<body>


<!---------------- Header Start Here  ----------------->

	<?php include_once "header.php";?>

<!---------------- Header End Here  ----------------->

					<!-- Slider Start -->

	<div class="container">
		<div id="carousel" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active" data-interval="4000">
		    	<a href="#">
		      	<img src="images/slider1.jpg" class="w-100 h-100 d-block size-slider" alt="...">
		  		</a>
		    </div>
		    <div class="carousel-item" data-interval="4000">
		    	<a href="#">	
		      		<img src="images/slider2.jpg" class="w-100 h-100 d-block size-slider" alt="...">
		      	</a>
		    </div>
		    <div class="carousel-item" data-interval="4000">
		    	<a href="#">
		      		<img src="images/slider3.png" class="w-100 h-100 d-block size-slider" alt="...">
		      	</a>
		    </div>
		    
		  </div>
		</div>		
	</div>

	<div class="checks">
				 	<!-- Slider End -->

					<!-- Brand Start -->

	<div class="container">
		<div class="mt-3 mb-3">
			<u><h2>Mobile Phones</h2></u>
		</div>
		<div class="">
			<a href="#" id="Samsung"><h3>Samsung</h3></a>
		</div>
		<div class="row">
		<?php
			$query = "SELECT * FROM products where brand_name = 'Samsung';" ;
			$result = mysqli_query($conn,$query);
			$resultCheck = mysqli_num_rows($result);

			if($resultCheck > 0){
				$i = -1;
				while($row = mysqli_fetch_assoc($result)){
					$i = $i + 1;
					if($i < 3){
						include "newcard.php";
					}
					else if($i>=3){
					if($i==3){ ?>
		</div>
		<div class="row mb-3 mt-3">
		  	<div class="col-lg-5"></div>
			  	<div class="col-lg-2">
				  	<button class="btn btn-primary hide-me" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
				    See More
				  	</button>
			    </div>
		    <div class="col-lg-5"></div>
		</div>	
					 	
	 	<div class="collapse" id="collapseExample1">
			<div class="row">
							<?php
								}
			include "newcard.php";
					}

				}
			}
		?>
			</div>
		</div>
		<div class="row mb-3 mt-3">
			<div class="col-lg-5"></div>
			  	<div class="col-lg-2">
				  	<button class="btn btn-primary hide-me2" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
				    See Less
				  	</button>
			    </div>
			<div class="col-lg-5"></div>
		</div>
	</div>
					<!-- Brand End -->

		  
		  
		
	
	<!-- Brand Start -->

	<div class="container">
		<div class="mt-5 mb-3">
			<a href="#" id="Apple"><h3>Apple</h3></a>
		</div>
		<div class="row">
		<?php
			$query = "SELECT * FROM products where brand_name = 'Apple';" ;
			$result = mysqli_query($conn,$query);
			$resultCheck = mysqli_num_rows($result);

			if($resultCheck > 0){
				$i = -1;
				while($row = mysqli_fetch_assoc($result)){
					$i = $i + 1;
					if($i < 3){
						include "newcard.php";
					}
					else if($i>=3){
					if($i==3){ ?>
		</div>
		<div class="row mb-3 mt-3">
		  	<div class="col-lg-5"></div>
			  	<div class="col-lg-2">
				  	<button class="btn btn-primary hide-me" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
				    See More
				  	</button>
			    </div>
		    <div class="col-lg-5"></div>
		</div>	
					 	
	 	<div class="collapse" id="collapseExample2">
			<div class="row">
							<?php
								}
			include "newcard.php";
					}

				}
			}
		?>
			</div>
		</div>
		<div class="row mb-3 mt-3">
			<div class="col-lg-5"></div>
			  	<div class="col-lg-2">
				  	<button class="btn btn-primary hide-me2" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
				    See Less
				  	</button>
			    </div>
			<div class="col-lg-5"></div>
		</div>
	</div>

					<!-- Brand End -->

	<!-- Brand Start -->

	<div class="container">
		<div class="mt-5 mb-3">
			<a href="#" id="Huawei"><h3>Huawei</h3></a>
		</div>
		<div class="row">
		<?php
			$query = "SELECT * FROM products where brand_name = 'Huawei';" ;
			$result = mysqli_query($conn,$query);
			$resultCheck = mysqli_num_rows($result);

			if($resultCheck > 0){
				$i = -1;
				while($row = mysqli_fetch_assoc($result)){
					$i = $i + 1;
					if($i < 3){
						include "newcard.php";
					}
					else if($i>=3){
					if($i==3){ ?>
		</div>
		<div class="row mb-3 mt-3">
		  	<div class="col-lg-5"></div>
			  	<div class="col-lg-2">
				  	<button class="btn btn-primary hide-me" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
				    See More
				  	</button>
			    </div>
		    <div class="col-lg-5"></div>
		</div>	
					 	
	 	<div class="collapse" id="collapseExample3">
			<div class="row">
							<?php
								}
			include "newcard.php";
					}

				}
					
			}
		?>
			</div>
		</div>
		<div class="row mb-3 mt-3">
			<div class="col-lg-5"></div>
			  	<div class="col-lg-2">
				  	<button class="btn btn-primary hide-me2" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
				    See Less
				  	</button>
			    </div>
			<div class="col-lg-5"></div>
		</div>
	</div>

					<!-- Brand End -->


	<!-- Brand Start -->

	<div class="container">
		<div class="mt-5 mb-3">
			<a href="#" id="Nokia"><h3>Nokia</h3></a>
		</div>
		<div class="row">
		<?php
			$query = "SELECT * FROM products where brand_name = 'Nokia';" ;
			$result = mysqli_query($conn,$query);
			$resultCheck = mysqli_num_rows($result);

			if($resultCheck > 0){
				$i = -1;
				while($row = mysqli_fetch_assoc($result)){
					$i = $i + 1;
					if($i < 3){
						include "newcard.php";
					}
					else if($i>=3){
					if($i==3){ ?>
		</div>
		<div class="row mb-3 mt-3">
		  	<div class="col-lg-5"></div>
			  	<div class="col-lg-2">
				  	<button class="btn btn-primary hide-me" type="button" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample4">
				    See More
				  	</button>
			    </div>
		    <div class="col-lg-5"></div>
		</div>	
					 	
	 	<div class="collapse" id="collapseExample4">
			<div class="row">
							<?php
								}
			include "newcard.php";
					}

				}
			}
		?>
			</div>
		</div>
		<div class="row mb-3 mt-3">
			<div class="col-lg-5"></div>
			  	<div class="col-lg-2">
				  	<button class="btn btn-primary hide-me2" type="button" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample4">
				    See Less
				  	</button>
			    </div>
			<div class="col-lg-5"></div>
		</div>
	</div>

					<!-- Brand End -->


	<!-- Brand Start -->

	<div class="container">
		<div class="mt-5 mb-3">
			<a href="#" id="Xiaomi"><h3>Xiaomi</h3></a>
		</div>
		<div class="row">
		<?php
			$query = "SELECT * FROM products where brand_name = 'Xiaomi';" ;
			$result = mysqli_query($conn,$query);
			$resultCheck = mysqli_num_rows($result);

			if($resultCheck > 0){
				$i = -1;
				while($row = mysqli_fetch_assoc($result)){
					
						$i = $i + 1;
						if($i < 3){
							include "newcard.php";
						}
						else if($i>=3){
						if($i==3){ ?>
		</div>
		<div class="row mb-3 mt-3">
		  	<div class="col-lg-5"></div>
			  	<div class="col-lg-2">
				  	<button class="btn btn-primary hide-me" type="button" data-toggle="collapse" data-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample5">
				    See More
				  	</button>
			    </div>
		    <div class="col-lg-5"></div>
		</div>	
					 	
	 	<div class="collapse" id="collapseExample5">
			<div class="row">
							<?php
								}
			include "newcard.php";
					}

				}
					
			}
		?>
			</div>
		</div>
		<div class="row mb-3 mt-3">
			<div class="col-lg-5"></div>
			  	<div class="col-lg-2">
				  	<button class="btn btn-primary hide-me2" type="button" data-toggle="collapse" data-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample5">
				    See Less
				  	</button>
			    </div>
			<div class="col-lg-5"></div>
		</div>
	</div>

					<!-- Brand End -->


<!---------------- footer Start Here  ----------------->

	<?php include_once "footer.php" ;?>

<!----------------footer End Here  ----------------->
    
</body>
</html>