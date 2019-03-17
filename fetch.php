<?php 
$connect=mysqli_connect("localhost","root","","project");
$output='';
$sql="SELECT * FROM products WHERE product_title LIKE '%".$_POST["search"]."'";
$result=mysqli_query($connect,$sql);
if(mysqli_num_rows($result)>0)
{
	$output .='<h4 align="center">Products</h4>';
	$output .='<div class="table-responsive">
				<table class="table table bordered">
					<tr>
						<th>product_title</th>
						<th>product_price</th>
						<th>product_desc</th>
						<th>product_image</th>
					</tr>';
		while($row=mysqli_fetch_array($result))
		{
			$output .='
					<tr>
						<td>'.$row["product_title"].'</td>
						<td>'.$row["product_price"].'</td>
						<td>'.$row["product_desc"].'</td>
						<td>'.$row["product_image"].'</td>
					</tr>
					';
		}
		echo $output;
}
else
{
	echo'Data not found';
}
?>