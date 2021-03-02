<?php
session_start();
include ("dbconfig/config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/s2.css">
</head>
<body style="background-color: #ffb142">

	<div id="main-wrapper">
		<center>
			<h2><b>THE READERS JUNCTION</b></h2>
			<h2>Login Form</h2>
		<img src="image/avatar.png" class="avatar">
		</center>
		
	
	<form class="myform" action="index.php" method="POST">
		<label><b>Username:</b></label><br>
		<input name="username" type="text" class="inputvalues" placeholder="Type your username"><br>
		<label><b>Password:</b></label><br>
		<input name="password" type="Password" class="inputvalues" placeholder="Type your password"><br>
		<input name="login" type="submit" id="login_btn" value="Login"><br>
		<a href="register.php"><input type="button" id="reg_btn" value="Register"></a>
	</form>
	<?php
	if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$q="select * from user WHERE username= '$username' AND password= '$password'";
		$run=mysqli_query($con,$q);
		if(mysqli_num_rows($run)>0)
		{
			$_SESSION['username']=$username;
			header('location:uhome.php');
		}
		else
		{
			echo '<script type ="text/javascript">alert("Invalid Credentials")</script>';
		}
	}  
	?>
</div>


</body>
</html>