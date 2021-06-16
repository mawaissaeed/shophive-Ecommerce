
<header class="header-container text-center">
	<div class="top-link-container bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-lg-1 col-md-1 col-12"></div>
				<div class="col-lg-3 col-md-4 col-12">
					<span class="txt-welcome">Welcome to Shophive! </span>
				</div>
				<div class="col-lg-2 col-md-2 col-12"></div>
				<div class="col-lg-5 col-md-4 col-12">
					<ul class="top-link">
						<?php 
						if(isset($_SESSION['email'])){?>
							<li><span class="txt-welcome"><?php echo "Welcome! ".$_SESSION["email"];?> </span></li>
							<li><form action="logout.php" method="post">
								<input type="submit" value="Log Out" name="logout" class="btn txt-welcome pt-0 pb-0" class="form-control" >
								</form></li>
							<!-- <button action="account.php" type="submit" formmethod="post" name="logout">Log Out</button> -->
						<?php
					}else{
							?>
						<li><a href="login.php">My account</a></li>
						<?php 
					}?>
						<!-- <li><a href="login.php">My account</a></li> -->
						<li><a href="myCart.php">My Cart</a></li>
					</ul> 
				</div>
				
				<div class="col-lg-1 col-md-1 col-12"></div>
				
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-3 mt-4 mb-4">
				<a href="#"><img src="logo1.jpg"></a>
			</div>
			<div class="col-lg-7 mt-4">
				<form class="form-inline">
					<div class="input-group">
		                <div class="input-group-btn search-panel">
		                    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">
		                    	<span id="search_concept">All Categories</span> <span class="caret"></span>
		                    </button>
		                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						          <a class="dropdown-item" href="#Samsung">Samsung</a>
						          <a class="dropdown-item" href="#Apple">Apple</a>
						          <a class="dropdown-item" href="#Huawei">Huawei</a>
						          <a class="dropdown-item" href="#Nokia">Nokia</a>
						          <a class="dropdown-item" href="#Xiaomi">Xiaomi Mi</a>
				        	</div>
		                </div>
		            	<input type="text" class=" w-358 form-control" id="Search" placeholder="Search Here" name='search'>
		                <span class="input-group-btn">
		            		<button type="submit" class="btn btn-primary bg-danger">Search</button>
		                </span>
		            </div>	           
		        </form>
			</div>
			<div class="col-lg-2 mt-4 center">
				<a href="myCart.php">
				<span class="fa fa-cart-plus icon-size "></span><br>
				<span class="">Your Cart</span>
				</a>
			</div>
		</div>
			
		
	</div>
	<div class="container">
		<div class="row">
			<nav class="navbar navbar-expand-lg navbar-light bg-white">
				<ul class="navbar-nav mr-auto ml-auto">
			  		<li class="nav-item dropdown bg-danger active">
				        <a class="nav-link dropdown-toggle ml-4 mr-4 pb-2" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-bars"></span>
				          All Categories
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="#Samsung">Samsung</a>
				          <a class="dropdown-item" href="#Apple">Apple</a>
				          <a class="dropdown-item" href="#Huawei">Huawei</a>
				          <a class="dropdown-item" href="#Nokia">Nokia</a>
				          <a class="dropdown-item" href="#Xiaomi">Xiaomi Mi</a>

				        </div>
				    </li>
				</ul>
			<div class="col-sm-12 col-lg">
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  </div>
			  <div class="collapse navbar-collapse " id="navbarSupportedContent">
			    <ul class="navbar-nav mx-auto">
			      <li class="nav-item active pr-2">
			        <a class="nav-link active" href="index.php">HOME</a>
			      </li>
			      
			      <li class="nav-item active ">
			        <a class="nav-link" href="#contact">CONTACT US</a>
			      </li>
			    </ul>
			  </div>
			</nav>
			</div>
		</div>
	</div>				
</header>