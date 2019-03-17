<?php

include "db.php";

	$product_name='';
	$quantity='';
	$units='';
	$price='';
	$category='';
	$description='';
	$newname='';
	$url='';
	$date='';
	$type='';
	$size='';
	$file_name='';
	$img_newfile='';
	$datetime='';
	
	
	 	
	if(isset($_POST['upload']))
	{

		$datetime = date('Y-m-d H:i:s');
		$file_name=$_FILES['photo']['name'];
		$size=$_FILES['photo']['size'];
		$type=$_FILES['photo']['type'];
		$temp=$_FILES['photo']['tmp_name'];
		$img_extension = explode('.',$file_name);
		$img_extension = strtolower(end($img_extension));	
		$img_newfile = uniqid().'.'.$img_extension; 
		$file_tem_Loc=$_FILES['photo']['tmp_name'];
		$store="product_images/".$file_name;
		if(move_uploaded_file($temp,$store.$img_newfile))
		{
			$url=$store.$img_newfile;
		}
		
		$product_name=$_POST["product_name"];
		$quantity=$_POST["Quantity"];
		$price=$_POST["price"];
		$units=$_POST["units"];
		$category=$_POST["category"];
		$description=$_POST["description"];
		
	}
	

	$sql="INSERT INTO addproduct(url,date,file_name,newname,file_type,file_size,product_name,quantity,units,price,category,description)VALUES
								('$url','$datetime','$file_name','$img_newfile','$type','$size','$product_name','$quantity','$units','$price','$category','$description')";
	$data	=	mysqli_query($con, $sql);
	
	if($data == TRUE)
	{
		echo
		'<script type="text/javascript">
		alert("Your Product Is Uploaded....")
		window.location="add_products.php";		
		</script>';
	}
	else{
		'<script type="text/javascript">
		alert("Something Went Wrong....")
		</script>';
		
	}
	
?>