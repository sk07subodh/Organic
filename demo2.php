<?php
session_start(); 
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>Login with Facebook</title>
<link href="http://www.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet"> 
 </head>
  <body>
  <?php if ($_SESSION['id']): ?>      
  <!--  After user login  -->
<div class="container">
<div class="hero-unit">
  <h1>Hello <?php echo $_SESSION['name']; ?></h1>
  <p>Welcome to "facebook login" tutorial</p>
  </div>
<div class="span4">
 <ul class="nav nav-list">
<li class="nav-header">Image</li>
	<li><img src="https://graph.facebook.com/<?php echo $_SESSION['id']; ?>/picture"></li>
<li class="nav-header">Facebook ID</li>
<li><?php echo  $_SESSION['id']; ?></li>
<li class="nav-header">Facebook fullname</li>
<li><?php echo $_SESSION['name']; ?></li>
<li class="nav-header">Facebook Email</li>
<li><?php echo $_SESSION['email']; ?></li>
<li class="nav-header">Facebook LINK</li>
<li><?php echo $_SESSION['link']; ?></li>
<li class="nav-header">Facebook GENDER</li>
<li><?php echo $_SESSION['gender']; ?></li>
<li class="nav-header">Facebook DOB</li>
<li><?php echo $_SESSION['dob']; ?></li>
<div><a href="logout.php">Logout</a></div>
</ul></div></div>
    <?php else: ?>     <!-- Before login --> 
<div class="container">
<h1>Login with Facebook</h1>
           Not Connected
<div>
      <a href="fbconfig.php">Login with Facebook</a></div>
	 
      </div>
    <?php endif ?>
  </body>
</html>
