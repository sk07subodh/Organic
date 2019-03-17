<?php
include "header.php";
include "session.php";
include "side_menu_2.php";
?>
	<br><br><br> 	
<div class='container'>
	<form action="add_pro.php" method="post" enctype="multipart/form-data">
	

	<div class="col-md-3"></div>
	<div class="col-md-6">
	<div class="content_box">
		<input type="file" name="photo" class="btn1 btn">
		<label class="caption_heading">Product Name:</label>
		<input type="text" Placeholder ="Product Name" name="product_title" class="product_details"><br>
		<input type="number" Placeholder ="Quantity" name="quantity" class="product_details">
		<select name="units">
			<option value="select category">--Units--</option>
			<option value="Grams">Grams</option>
			<option value="Kg">Kg</option>
			<option value="Ton">Ton</option>
			<option value="Dozen">Dozen</option>
			</select><br>	
		<input type="text" Placeholder ="Price" name="product_price" class="product_details"><br>			
		<select name="product_cat">
			<option value="select category">--Category--</option>
			<option value="Fruits">Fruits</option>
			<option value="Vegitables">Vegetables</option>
			<option value="Grains">Grains</option>
		</select><br>
		<label class="caption_heading">Description About Product :</label>
		<textarea name="product_desc" class="caption" rows="6" cols="60"></textarea><br>
		<input type="submit" value="Add" name="upload" class="btn1 btn">
	</div>
	</div>
	</form>

</div>
	<br><br><br><br>
</body>
<?php include 'footer.php' ?>
</html>
