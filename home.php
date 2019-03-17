<?php
	session_start();
	?>
<html>
	<head>
		
	</head>
	<body>
	<center>
		<h1> home </h1>
		<h3> welcome <?php echo $_SESSION['name']; ?></h3>
		<a href="login.php">logout</a>
	</body>
</html>
			