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

<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<li><a href="products.html">Branded Foods</a></li>
						<li><a href="household.html">Households</a></li>
						<li class="dropdown mega-dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Veggies & Fruits<span class="caret"></span></a>				
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>	
										<li><a href="vegetables.html">Vegetables</a></li>
										<li><a href="vegetables.html">Fruits</a></li>
									</ul>
								</div>                  
							</div>				
						</li>
						<li><a href="kitchen.html">Kitchen</a></li>
						<li><a href="short-codes.html">Short Codes</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Beverages<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>
										<li><a href="drinks.html">Soft Drinks</a></li>
										<li><a href="drinks.html">Juices</a></li>
									</ul>
								</div>                  
							</div>	
						</li>
						<li><a href="pet.html">Pet Food</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Frozen Foods<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>
										<li><a href="frozen.html">Frozen Snacks</a></li>
										<li><a href="frozen.html">Frozen Nonveg</a></li>
									</ul>
								</div>                  
							</div>	
						</li>
						<li><a href="bread.html">Bread & Bakery</a></li>
					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
			<div class="w3l_banner_nav_right_banner3">
				<h3>Best Deals For New Products<span class="blink_me"></span></h3>
			</div>
			<div class="agileinfo_single">
				<h5>charminar pulao basmati rice 5 kg</h5>
				<div class="col-md-4 agileinfo_single_left">
					<img id="example" src="images/76.png" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-8 agileinfo_single_right">
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked>
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					<div class="w3agile_description">
						<h4>Description :</h4>
						<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.</p>
					</div>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h4>$21.00 <span>$25.00</span></h4>
						</div>
						<div class="snipcart-details agileinfo_single_right_details">
							<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="business" value=" " />
									<input type="hidden" name="item_name" value="pulao basmati rice" />
									<input type="hidden" name="amount" value="21.00" />
									<input type="hidden" name="discount_amount" value="1.00" />
									<input type="hidden" name="currency_code" value="USD" />
									<input type="hidden" name="return" value=" " />
									<input type="hidden" name="cancel_return" value=" " />
									<input type="submit" name="submit" value="Add to cart" class="button" />
								</fieldset>
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
		<!-- Footer -->
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

<!-- End Footer --> 





    <!-- jQuery -->   <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    
    <!-- Custom Javascript -->
    <script src="js/custom.js"></script>

</body>

</html>
