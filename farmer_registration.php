<?php
include "db.php";

	if(mysqli_connect_error())
		{
			echo "connection failed: " . mysql_connect_error();
		}

	
    $f_name='';
	$email='';
	$gender='';
	$mobile='';
	$password='';
	$certificate='';
	 	
	if(isset($_POST["signup"])) 
	{
		$f_name=$_POST["name"]; 
		$email=$_POST["email"];
		$mobile=$_POST["mobile"];
		$gender=$_POST["gender"];
		$password=$_POST["pwd"];
		$certificate=$_POST["certificate"];
		$user_activation_code = md5(rand());
		$user_email_status=	'not verified';
	
	
			if(empty($email) || empty($password))
			{
				echo "
					<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>PLease Fill all fields..!</b>
					</div>
					";
				exit();
			} 
			else 
			{
				$sql = "SELECT farmer_id FROM farmers WHERE email = '$email' LIMIT 1" ;
				$check_query = mysqli_query($con,$sql);
				$count_email = mysqli_num_rows($check_query);
				if($count_email > 0)
				{
					echo "
							<div class='alert alert-danger'>
								<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
								<b>Email Address is already available Try Another email address</b>
							</div>
						";
				exit();
				}
			}
	}
		
	
	$sql="INSERT INTO farmers(f_name,email,mobile,gender,password,certificate,user_activation_code,user_email_status)VALUES('$f_name','$email','$mobile','$gender','$password','$certificate','$user_activation_code','$user_email_status')";
	

		if(isset($sql))
		{
			$base_url = "http://localhost/organic/";  //change this baseurl value as per your file path
			$mail_body = "
			<p>Hi ".$_POST['f_name'].",</p>
			<p>Thanks for Registration. Your password is ".$password.", This password will work only after your email verification.</p>
			<p>Please Open this link to verified your email address - ".$base_url."email_verification.php?activation_code=".$user_activation_code."
			<p>Best Regards,<br />OrganiCrate</p>
			";
			require 'class/class.phpmailer.php';
			$mail = new PHPMailer;
			$mail->IsSMTP();								//Sets Mailer to send message using SMTP
			$mail->Host = 'smtp.gmail.com';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
			$mail->Port = '587';								//Sets the default SMTP server port
			$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
			$mail->Username = 'apsitproject@gmail.com';					//Sets SMTP username
			$mail->Password = 'Pass@123';					//Sets SMTP password
			$mail->SMTPSecure = 'tls';							//Sets connection prefix. Options are "", "ssl" or "tls"
			$mail->From = 'apsitproject@gmail.com';			//Sets the From email address for the message
			$mail->FromName = 'OrganiCrate';					//Sets the From name of the message
			$mail->AddAddress($_POST['email'], $_POST['name']);		//Adds a "To" address			
			$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
			$mail->IsHTML(true);							//Sets message type to HTML				
			$mail->Subject = 'Email Verification';			//Sets the Subject of the message
			$mail->Body = $mail_body;							//An HTML or plain text message body
			if($mail->Send())								//Send an Email. Return true on success or false on error
			{
				$message = '<label class="text-success">Register Done, Please check your mail.</label>';
			}
		}
	
	

	
	if(!mysqli_query($con,$sql))
	{
		die('Error: ' . mysqli_error($con));
	}
	header('location: login.php');
	
	//mysqli_close($con);
?>