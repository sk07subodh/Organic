<?php 
include "header.php" ;
?>
<section id="content">
	<div class="container">
	<!--side Menu content-->
		<div class="col-md-4">
			<div class="navbar-collapse dashboard-collapse collapse">
				<div class="panel-group">
					<div class="panel panel-default1">
						<div class="panel-body content_box">
							<ul class="page-list-style">
								<li><a href="add_products.php" onclick="myFunction()">Add Products</a></li>
								<hr class="side-border">
								<li><a href="my_cart.php">My Products</a></li>
								<hr class="side-border">
								<li><a href="#">Orders</a></li>
								<hr class="side-border">
								<li><a href="#">Pending Orders</a></li>
								<hr class="side-border">
								<li><a href="#">Cancel Orders</a></li>
								<hr class="side-border">
								<li><a href="#">Profile Update</a></li>
								<hr class="side-border">
							</ul>		
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- main form-->
		<div class="row ">
			<div class="col-md-6">
			
							<div class="content_box">
								<form method="post" action="product-upload.php" enctype="multipart/form-data">

							<input type="file" name="photo" class="btn1 btn">
		<!--<label class="caption_heading">Product Name:</label><br>-->
		<input type="text" Placeholder ="Product Name" name="product_name" class="product_details"><br>
		<input type="number" Placeholder ="Quantity" name="Quantity" class="product_details">
		<select name="units" class="caption" style="margin-left:5%;">
			<option value="select category">--Units--</option>
			<option value="Grams">Grams</option>
			<option value="Kg">Kg</option>
			<option value="Ton">Ton</option>
			<option value="Dozen">Dozen</option>
			</select><br>	
		<input type="text" Placeholder ="Price" name="price" class="product_details"><br>			
		<select name="category" class="caption">
			<option value="select category">--Category--</option>
			<option value="Fruits">Fruits</option>
			<option value="Vegitables">Vegetables</option>
			<option value="Grains">Grains</option>
		</select><br>
		<label class="caption_heading">Description About Product :</label>
		<textarea name="description" class="caption" rows="6" cols="60"></textarea><br>
		<input type="submit" value="Add" name="upload" class="btn1 btn">
	</div>
	</div>
	</form>
								</div>  
			</div>
			<div class="col-lg-6">
				<p>&nbsp;</p>
			</div>					
		</div>	
					
	</div>
</section>
<?php include('footer.php');?>
	