<?php
session_start();
include ("dbconfig/config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>lms</title>
	<link rel="stylesheet" type="text/css" href="CSS/s1.css">
	<link rel="stylesheet" type="text/css" href="CSS/s2.css">
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
		
		<li><b><a href="trb.php">Top Rated Books</a></b></li>
		<li><b><a href="blog.php">Blog</a></b></li>
		<li><b><a href="contact.php">Contact Us</a></b></li>
		<li><b><a href="about.php">About</a></b></li>
		<li><b><a href="help.php">Help</a></b></li>
	</ul>
</div>
<div id="container">
	<div id="left"><br><br><br>
		<center><img src="image/banner.png" width="300"></center>
		<br>
		<h3 style="color: blue;margin: 50px">Popular Books</h3>
		<div id="a"><center><img src="image/sce2.jpg"></center></div>
		<div id="b"><center><img src="image/tr1.jpg"></center></div>
		<div id="c"><center><img src="image/bio2.jpg"></center></div>
	</div>
	<div id="right">
		<h1 style="color: blue">Category</h1>
		<a href="sce.php"><b>SCIENCE FICTION</b></a><br><br><br>
		<a href="rom.php"><b>ROMANCE</b></a><br><br><br>
		<a href="act.php"><b>ACTION</b></a><br><br><br>
		<a href="trl.php"><b>THRILLER</b></a><br><br><br>
		<a href="bio.php"><b>BIOGRAPHY</b></a><br><br><br>
		<a href="rel.php"><b>RELIGION</b></a>
	</div>
</div>
<div id="footer"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<h1 style="margin-top: 300px;color: blue;" align="center">PHP PROJECT NIIT BARRACKPORE</h1>
</div>

</body>
</html>