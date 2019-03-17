<?php include('db.php');
$p_id=$_GET['product_id'];
$sql="DELETE FROM cart WHERE product_id=$p_id";
$setapprove=mysqli_query($con,$sql);
header("Location:cart.php");
//include('../close.php');
?>