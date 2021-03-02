<?php
session_start();
include("connection.php");
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
		<li><b><a href="index.php">Home</a></b></li>
		<li><b><a href="trb.php">Top Rated Books</a></b></li>
		<li><b><a href="blog.php">Blog</a></b></li>
		<li><b><a href="contact.php">Contact Us</a></b></li>
		<li><b><a href="about.php">About</a></b></li>
		<li><b><a href="help.php">Help</a></b></li>
	</ul>
</div>
<div id="container">
	<div id="left"><br><br><br>
		<center><img src="image/banner.png" width="200"></center>
		<br>
		<h3 style="color: blue;margin: 50px">Science Books</h3>
		<?php
		   $c= $_GET['id'];
          $q="select * from book where id like '%$c%'";
        $run=mysqli_query($link,$q);
        ($row=mysqli_fetch_array($run));
         $id=$row['id'];
         $bname=$row['name'];
         $price=$row['price'];
         $img=$row['img'];
		?>
		
			<div id="a">
				
						<?php echo "<a href='p.php?id=$id'><img src='im/$img'></a>"; ?>
					    
					    <h3><font color="blue">Name :</font><?php echo $bname; ?><br>
					    	<font color="blue">Price :</font><?php echo $price; ?></h3>
					    	<form action="" method="POST">
					    	<table>
					    		<tr>
					    			<td width="200" height="50">Name</td>
			                    <td width="200" height="50"><input type="text" name="name" placeholder="Enter Name" title="Enter Name"></td>
					    		</tr>
					    		<tr>
					    			<td width="200" height="50">Address</td>
			                    <td width="200" height="50"><input type="text" name="add" placeholder="Enter Address" title="Enter Address"></td>
					    		</tr><tr>
					    			<td width="200" height="50">City</td>
			                    <td width="200" height="50"><input type="text" name="city" placeholder="Enter City" title="Enter City"></td>
					    		</tr><tr>
					    			<td width="200" height="50">Pin Code</td>
			                    <td width="200" height="50"><input type="text" name="pcod" placeholder="Enter Pin Code" title="Enter Pin Code"></td>
					    		</tr><tr>
					    			<td width="200" height="50">E-Mail</td>
			                    <td width="200" height="50"><input type="text" name="email" placeholder="Enter E-Mail" title="Enter E-Mail"></td>
					    		</tr><tr>
					    			<td width="200" height="50">Mobile No.</td>
			                    <td width="200" height="50"><input type="text" name="mno" placeholder="Enter Mobile No" title="Enter Mobile No"></td>
					    		</tr>
					    		<tr>
					    			<td><input type="submit" name="sub" value="Buy Now" style="width: 100px; height: 30px; padding: 5px; border-radius: 5px; background-color: white;"></td>
					    		</tr>
					    	</table>
					       </form>
					       <?php
					       if(isset($_POST['sub']))
					       {
					       	$name1=$_POST['name'];
					       	$add1=$_POST['add'];
					       	$city=$_POST['city'];
					       	$pcod=$_POST['pcod'];
					       	$email=$_POST['email'];
					       	$mno=$_POST['mno'];
					       	if(mysqli_query($link,"insert into sell (bname,bid,name1,add1,city,pin,email,mno) values('$bname','$id','$name1','$add1','$city','$pcod','$email','$mno')"))

                 {
                    mysqli_query($link,"delete from book where id=$id");

                    echo "<script>alert('Data Inserted')</script>";
                 }
                 else
                 {
                      echo "<script>alert('No Data Inserted')</script>";
                 }
					       }
					       ?>
					</div>
		
		</div>
	<div id="right">
		<h1 style="color: blue">Category</h1>
		<a href="sce.php"><b>SCIENCE</b></a><br><br><br>
		<a href="rom.php"><b>ROMANCE</b></a><br><br><br>
		<a href="act.php"><b>ACTION</b></a><br><br><br>
		<a href="trl.php"><b>THRILLER</b></a><br><br><br>
		<a href="bio.php"><b>BIOGRAPHY</b></a><br><br><br>
		<a href="rel.php"><b>RELIGION</b></a>
	</div>
</div>
<div id="footer"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<h1 style="margin-top: 300px;color: blue;" align="center">PHP PROJECT NIIT BARRACKPORE</h1>
</div>

</body>
</html>