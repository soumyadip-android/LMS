<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>lms</title>
	<link rel="stylesheet" type="text/css" href="CSS/s1.css">
	<link rel="stylesheet" type="text/css" href="CSS/s2.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body style="background-color: #33d9b2;">
<div id="header">
	
	<img src="image/header.png" class="header_right">
		<h2 style="padding: 5px">THE READERS JUNCTION</h2>
	<h3 style="padding: 5px">Welcome <?php echo $_SESSION['username']; ?></h3>
	<form action="uhome.php" method="POST">
	<input name="logout" type="submit" id="logout_btn" value="Logout"/>
	</form>
	<?php
	if(isset($_POST['logout']))
	{
		session_destroy();
		header('Location:index.php');
	}
	?>
</div>
<div id="nav">
	<ul>
		<li><b><a href="uhome.php">Home</a></b></li>
		<li><b><a href="trb.php">Top Rated Books</a></b></li>
		<li><b><a href="blog.php">Blog</a></b></li>
		<li><b><a href="contact.php">Contact Us</a></b></li>
		
		<li><b><a href="help.php">Help</a></b></li>
	</ul>
</div>
<div id="container">
    <center><h2 style="padding: 10px;">About Us</h2>
    <h1>THE READERS JUNCTION PVT.LTD</h1>
    </center>	
</div>
<div id="footer"><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<h1 style="margin-top: 300px;color: blue;" align="center">PHP PROJECT NIIT BARRACKPORE</h1>
</div>

</body>
</html>