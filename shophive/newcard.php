
<div class="col-lg-4 col-md-4 col-12 mt-2">
    <form action="order.php" method="post">
    	<div class="card h-100">
	      <img src="images/<?php echo $row['img']; ?>" class="card-img-top sam-size mx-auto" alt="...">
	      <div class="card-body">
	      	<div class="text-center">
		        <h5 class="card-title"><?php echo $row['brand_name']." ".$row['name'];?></h5>
		        <input type="hidden" name="product_id" value="<?php echo $row['id']?>" >
		        <input type="hidden" name="brand_name" value="<?php echo $row['brand_name']?>" >
		        <input type="hidden" name="name" value="<?php echo $row['name']?>" >
		        <h6><?php echo $row['description']; ?></h6>
		        <input type="hidden" name="description" value="<?php echo $row['description']?>" >
		        <p class="font-red"><b><?php echo $row['price']; ?></b></p>
		        <input type="hidden" name="price" value="<?php echo $row['price']?>" >
		        <input type="hidden" name="qty" value=1 >
		       	<p class="font-red p-0">
		        	<b>
		        		<?php
			        		if($row['quantity']>0){
			        			 echo "In Stock <br>"; ?>
			        			 <button type="submit" name="addToCart" class="btn btn-danger" >Add to Cart</button>
			        	<?php
			        		}
			        		else{
			        		 	echo "<br><b>Out of Stock</b><br>";
			        		}
		        	    ?>
		        		
		        	</b>
		        </p>
	        </div>
	      </div>
	    </div>
    </form>
</div>