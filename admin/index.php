<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>lms</title>
	<link rel="stylesheet" type="text/css" href="CSS/s1.css">
</head>
<body style="background-image: url('image/b1.png');">
<div id="header">
	<h2 style="padding: 10px">THE READERS JUNCTION</h2>
</div>
<div id="nav">
	<ul>
		<li><b><a href="index.php">Home</a></b></li>
		<li><b><a href="index.php">Insert Book</a></b></li>
		<li><b><a href="index.php">Book List</a></b></li>
		<li><b><a href="index.php">About</a></b></li>
		</ul>
</div>
<div id="container">
    <center><h2 style="padding: 10px;">Admin Login</h2></center>
    <br><br><center>
    	<form action="" method="POST">
    	<table>
    		<tr>
    			<td width="200" height="50">Username</td>
    			<td width="200" height="50"><input style="width: 200px;height: 30px;border-radius: 10px;" type="text" name="un" placeholder="Enter Username"></td>
    		</tr>
    		<tr>
    		    <td width="200" height="50">Password</td>
    			<td width="200" height="50"><input style="width: 200px;height: 30px;border-radius: 10px;" type="password" name="ps" placeholder="Enter Password"></td>
    		</tr>
    		<tr>
    			<td><center><input style="width: 100px;height: 20px;border-radius: 10px;" type="submit" name="sub" value="Login"></center></td>
    		</tr>
    	</table>
    	</form>
    	<?php
    	if(isset($_POST['sub']))
    	{
    		$un= $_POST['un'];
    		$ps= $_POST['ps'];
    		$q= "select * from admin";
    		$run= mysqli_query($link,$q);
    		$row= mysqli_fetch_array($run);
    		$u= $row['un'];
    		$p= $row['ps'];
    		if($u==$un && $p==$ps)
    		{
    			header("Location: ahome.php");
    		}
    		else
    		{
    			header("Location: index.php?wrong user");
    		}
    	}
    	?>
    </center>
    	
</div>
<div id="footer"><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<h1 style="margin-top: 300px;color: blue;" align="center">PHP PROJECT NIIT BARRACKPORE</h1>
</div>

</body>
</html>