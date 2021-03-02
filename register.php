<?php
include ("dbconfig/config.php"); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="css/s2.css">
</head>
<body style="background-color: #ffb142">

	<div id="main-wrapper">
		<center>
			<h2><b>THE READERS JUNCTION</b></h2>
			<h2>Registration Form</h2>
		<img src="image/avatar.png" class="avatar">
		</center>
		
	
	<form class="myform" action="register.php" method="POST">
		<label><b>Username:</b></label><br>
		<input name="username" type="text" class="inputvalues" placeholder="Type your username" required/><br>
		<label><b>Password:</b></label><br>
		<input name="password" type="Password" class="inputvalues" placeholder="Your password" required/><br>
		<label><b>Confirm Password:</b></label><br>
		<input name="cpassword" type="Password" class="inputvalues" placeholder="Confirm password" required/><br>
		<input name="signup" type="submit" id="signup_btn" value="Sign Up"><br>
		<a href="index.php"><input  type="button" id="back_btn" value="Back"></a>
	</form>
	<?php
	if(isset($_POST['signup']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		if($password==$cpassword)
		{
			$q= "select * from user WHERE username='$username'";
			$run=mysqli_query($con,$q);
			if(mysqli_num_rows($run)>0)
			{
				echo '<script type ="text/javascript">alert("user already exist... try another username")</script>';
			}
			else
			{
				$q= "insert into user values('$username','$password')";
				$run=mysqli_query($con,$q);
				if($run)
				{
					echo '<script type ="text/javascript">alert("user registered.......go to login page to login")</script>';
				}
				else
				{
					echo '<script type ="text/javascript">alert("ERROR!")</script>';
				}
			}
		}
		else
		{
			echo '<script type ="text/javascript">alert("password and confirm password doesnot match")</script>';
		}
	}
	?>
</div>


</body>
</html>