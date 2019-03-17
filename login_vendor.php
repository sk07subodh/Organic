<?php
    require_once "config.php";

	if (isset($_SESSION['access_token'])) {
		header('Location: index.php');
		exit();
	}

	$loginURL = $gClient->createAuthUrl();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>OrganiCrate:login</title>
	
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css/custom.css" rel="stylesheet">
	<link href="css/footer.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom Fonts from Google -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<style type="text/css">
    .form-control {
		font-size: 16px;
		transition: all 0.4s;
		box-shadow: none;
	}
	.form-control:focus {
        border-color: #5cb85c;
    }
    .form-control, .btn {
        border-radius: 50px;
		outline: none !important;
    }
	.signup-form {
		width: 500px;
    	margin: 0 auto;
		padding: 30px 0;
	}
    .signup-form form {
		border-radius: 5px;
    	margin-bottom: 20px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 40px;
    }
	.signup-form a {
		color: #5cb85c;
	}    
	.signup-form h2 {
		text-align: center;
		font-size: 34px;
		margin: 10px 0 15px;
	}
	.signup-form .hint-text {
		color: #999;
		text-align: center;
		margin-bottom: 20px;
	}
	.signup-form .form-group {
		margin-bottom: 20px;
	}
    .signup-form .btn {        
        font-size: 18px;
		line-height: 26px;
        font-weight: bold;
		text-align: center;
    }
	.signup-btn {
		  border: none;
		  color: white;
		  display: inline-block;
		  text-transform: uppercase;
		  text-decoration: none;
		  padding: 20px 50px;
		  border-radius: 3px;
		  margin:5px;
		  border-bottom-style: solid;
		  border-bottom-width: 3px;
		  transition: text-shadow 0.3s ease;
	}
	.signup-btn:hover {
		text-shadow: 2px 2px 0px rgba(0,0,0,.3)
	}
	.signup-btn:hover {
		background: #5cb85c;
		opacity: 0.8;
	}
    .or-seperator {
        margin: 50px 0 15px;
        text-align: center;
        border-top: 1px solid #e0e0e0;
    }
    .or-seperator b {
        padding: 0 10px;
		width: 40px;
		height: 40px;
		font-size: 16px;
		text-align: center;
		line-height: 40px;
		background: #fff;
		display: inline-block;
        border: 1px solid #e0e0e0;
		border-radius: 50%;
        position: relative;
        top: -22px;
        z-index: 1;
    }
	/* vertical line */
	.vl {
	  position: absolute;
	  left: 50%;
	  transform: translate(-50%);
	  border: 2px solid #ddd;
	  height: 175px;
	}

	/* text inside the vertical line */
	.vl-innertext {
	  position: absolute;
	  top: 50%;
	  transform: translate(-50%, -50%);
	  background-color: #f1f1f1;
	  border: 1px solid #ccc;
	  border-radius: 50%;
	  padding: 8px 10px;
	}
	
    .social-btn .btn {
		color: #fff;
        margin: 10px 0 0 15px;
		font-size: 15px;
		border-radius: 50px;
		font-weight: normal;
		border: none;
		transition: all 0.4s;
    }	
	.social-btn .btn:first-child {
		margin-left: 0;
	}
	.social-btn .btn:hover {
		opacity: 0.8;
	}
	.social-btn .btn-primary {
		background: #507cc0;
	}
	.social-btn .btn-danger {
		background: #df4930;
	}
	.social-btn .btn i {
		float: left;
		margin: 3px 10px;
		font-size: 20px;
	}
	input[type="text"],input[type="password"],input[type="email"],input[type="date"]{
    outline: none;
    font-size: 16px;
    color: #cecfd3;
    padding: 20px 30px 10px 10px;
    margin: 0;
    border: none;
	border-radius: 3px;
    border-bottom: 2px solid #cecfd3;
    -webkit-appearance: none;
}
	input[type="radio"] {
    outline: none;
    font-size: 16px;
    color: #cecfd3;
    padding: 20px 30px 10px 10px;
    margin: 0;
    border: none;
	border-radius: 3px;
    border-bottom: 2px solid #cecfd3;
    
}
	.radio-inline{
	font-size: 16px;
	color: #cecfd3;

	}
</style>
</head>

<body>

    <!-- Navigation -->
    <nav id="siteNav" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                	<span class="glyphicon glyphicon-grain"></span> 
                	OrganiCrate
                </a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="index.php">Home</a>
                    </li>
                 
                    <li>
                        <a href="#">Contact</a>
                    </li>
					
					<?php
						
						if (isset($_SESSION['access_token'])): 
						/*{
							header('Location: login.php');
							exit();
						}*/
					?>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Hello <?php echo $_SESSION['givenName']; ?> <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="about-us">
							<li><a href="logout.php">LogOut</a></li>
						</ul>
					</li>
										<!--Before Login-->
					 <?php else: ?>   
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Sign in <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="about-us">
							<li><a href="login.php">Sign in for Customers</a></li>
							<li><a href="login.php">Sign in for Vendors/Farmers</a></li>
						</ul>
					</li>
                       <?php endif ?>


                </ul>
                
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
	<div class="container-fluid">
	<div class="row">
    <div class="col-md-6">
	<div class="signup-form">
    <form action="/examples/actions/confirmation.php" method="post">
		<h2>Create an Account</h2>
		<p class="hint-text">Sign up with your social media account or email address</p>
		<div class="social-btn text-center">
			<a href="fbconfig.php" class="btn btn-primary btn-lg"><i class="fa fa-facebook"></i> Facebook</a>
			<a href="#" class="btn btn-danger btn-lg" onclick= "window.location = '<?php echo $loginURL ?>';"><i class="fa fa-google" ></i> Google</a>
		</div>
		<div class="or-seperator"><b>or</b></div>
        <div class="form-group">
        	<input type="text" class="form-control input-lg" name="name" placeholder="Enter Name" required="required">
        </div>
		<div class="form-group">
		<div class="form-group">
        	<input type="Number" class="form-control input-lg" name="aadhar" placeholder="AADHAAR" required="required">
        </div>
        	<input type="email" class="form-control input-lg" name="email" placeholder="Enter Email Address" required="required">
        </div>
		<div class="form-group row">
		<div class="form-group">
			<div class="col-sm-5">
				<label class="radio-inline">
					<input type="radio" name="optradio" checked>Male 
				</label>
			</div>
			<div class="col-sm-5">
				<label class="radio-inline">
					<input type="radio" name="optradio">Female
				</label>
			</div>
		</div>
		</div>
			<div class="form-group row">
				<div class="form-group">
				<div class="col-sm-5">
					<label class="radio-inline">Date Of Birth</label>
				</div>
				<div class="col-sm-6">
					<input type="date" class="form-control" id="dob" placeholder="Date of Birth">
				</div>
				</div>
			</div>
		<div class="form-group">
            <input type="password" class="form-control input-lg" name="password" placeholder="Enter Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control input-lg" name="confirm_password" placeholder="Confirm Password" required="required">
        </div>  
		<div class="form-group row">
           
				<div class="col-sm-1">
                    <input type="checkbox" name="agree" value="agree" /> 
				</div>
				<div class="col-sm-9">
				<label class="radio-inline">
					Agree with the<a href="#"> Terms and Conditions</a>
                </label>
				</div>
            
        </div>
    
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block signup-btn">Sign Up</button>
        </div>
		
		<div class="text-center">Already have an account? <a href="#">Login here</a></div>
    </form>
    </div>
	</div>
	<div class="col-md-6">
	<div class="vl">
        <span class="vl-innertext">or</span>
      </div>
	</div>
	<div class="col-md-6">
	<div class="signup-form">
    <form action="/examples/actions/confirmation.php" method="post">
		<h2>LogIn To Account </h2>
		<p class="hint-text">SignIn with your social media account or email address</p>
		<div class="social-btn text-center">
			<a href="fbconfig.php" class="btn btn-primary btn-lg"><i class="fa fa-facebook"></i> Facebook</a>
			<a class="btn btn-danger btn-lg" onclick="window.location ='<?php echo $loginURL ?>';"><i class="fa fa-google"></i> Google</a>
		</div>
		<div class="or-seperator"><b>or</b></div>
		<div class="form-group">
        	<input type="email" class="form-control input-lg" name="email" placeholder="Email Address" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control input-lg" name="password" placeholder="Password" required="required">
        </div> 
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block signup-btn">Log In</button>
        </div>
		
		<div class="text-center"><a href="#">Forgot Password..?</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Need an Account..?</a></div>
    </form>
    </div>
	</div>
	  
	  
	  
	  


</div>
</div>
		<!-- Footer >
  <footer>
<div class="newsletter-block">
 <div class="container">
<div class="newsletter-wrap">

                <h4>Sign up for emails</h4>
                <form id="newsletter-validate-detail" method="post" action="#">
                  <div id="container_form_news">
                    <div id="container_form_news2">
                      <input type="text" class="input-text required-entry validate-email" value="Enter your email address" onFocus=" this.value='' " title="Sign up for our newsletter" id="newsletter" name="email">
                      <button class="button subscribe" title="Subscribe" type="submit"><span>Subscribe</span> </button>
                    </div>
                  </div>
                </form>
              </div>
</div>
</div>
    <div class="footer-inner">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-xs-12 col-lg-8 col-md-8">
            <div class="footer-column pull-left">
              <h4>My Account</h4>
              <ul class="links">
                <li class="first"><a title="Login" href="login.html">Login</a> </li>
                <li><a title="About us" href="about_us.html">About us</a> </li>
                <li><a title="Wishlist" href="wishlist.html">Wishlist</a> </li>
                <li><a title="Checkout" href="checkout.html">Checkout</a> </li>
                <li><a title="FAQs" href="faq.html">FAQs</a> </li>
                <li class="last"><a title="Contact Us" href="contact_us.html">Contact Us</a> </li>
              </ul>
            </div>
            <div class="footer-column pull-left">
              <h4>Style Advisor</h4>
              <ul class="links">
                <li class="first"><a title="Your Account" href="#">Your Account</a> </li>
                <li><a title="Information" href="#">Information</a> </li>
                <li><a title="Addresses" href="#">Addresses</a> </li>
                <li><a title="Addresses" href="#">Discount</a> </li>
                <li><a title="Orders History" href="#">Orders History</a> </li>
                <li class="last"><a title=" Additional Information" href="#">Additional Information</a> </li>
              </ul>
            </div>
            <div class="footer-column pull-left">
              <h4>Information</h4>
              <ul class="links">
                <li class="first"><a href="sitemap.html" title="Site Map">Site Map</a> </li>
                <li><a href="#" title="Search Terms">Search Terms</a> </li>
                <li><a href="#" title="Advanced Search">Advanced Search</a> </li>
                <li><a href="contact-us.html" title="Contact Us">Privacy Policy</a> </li>
                <li><a href="#" title="Suppliers">Suppliers</a> </li>
                <li class=" last"><a href="#" title="Our stores" class="link-rss">Our stores</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="footer-column-last">
              
              <div class="social">
                <h4>Follow Us</h4>
                <ul class="link">
                  <li class="fb pull-left"> <a href="#"></a> </li>
                  <li class="tw pull-left"> <a href="#"></a> </li>
                  <li class="googleplus pull-left"> <a href="#"></a> </li>
                  <li class="rss pull-left"> <a href="#"></a> </li>
                  <li class="pintrest pull-left"> <a href="#"></a> </li>
                  <li class="linkedin pull-left"> <a href="#"></a> </li>
                  <li class="youtube pull-left"> <a href="#"></a> </li>
                </ul>
              </div>
              <div class="payment-accept">
<h4>Payment Option</h4>
                <div><img src="images/payment-1.png" alt="payment1"> <img src="images/payment-2.png" alt="payment2"> <img src="images/payment-3.png" alt="payment3"> <img src="images/payment-4.png" alt="payment4"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-middle">
      <div class="container">
        <div class="row">
          <div style="text-align:center"> <a href="index.html"><img src="images/footer-logo.png" alt="logo"> </a> </div>
          <address>
          <i class="fa fa-map-marker"></i> Ghodbunder,Thane,Mumbai 400516 <i class="fa fa-mobile"></i><span> +0123 456 789</span> <i class="fa fa-envelope"></i><span> support@organicrate.com</span>
          </address>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="coppyright">&copy; 2018 organicrate. All Rights Reserved.</div>
        </div>
      </div>
    </div>
  </footer>

End Footer --> 

<?php include('footer.php');?>



    <!-- jQuery -->   <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    
    <!-- Custom Javascript -->
    <script src="js/custom.js"></script>

</body>

</html>
