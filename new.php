<html>
<?php include 'session.php'; 
include 'db.php';?>
<?php if(isset($_SESSION['access_token']) || isset($_SESSION['fb_token']) ){
		$user_id = $_SESSION['id'];
		$run=mysqli_query($con,"SELECT * FROM users where oauth_uid= '$user_id'");
		while($row=mysqli_fetch_array($run)){
			$id=$row[0];
			$oauthpro=$row[1];
			$oauthuid=$row[2];
			$f_name=$row[3];
			$l_name=$row[4];
			$name=$row[5];
			$email=$row[6];
			$mobile=$row[7];
			$gender=$row[8];
			$dob=$row[9];
			$locale=$row[10];
			$picture=$row[11];
			$link=$row[12];
			$address=$row[13];
			$city=$row[14];
			$state=$row[15];
			$pincode=$row[16];
}
}
?>
		<?php echo $id; ?>
		<?php echo $oauthpro; ?>
		<?php echo $oauthuid; ?>
</html>