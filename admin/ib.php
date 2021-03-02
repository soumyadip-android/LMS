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
    <a href="index.php" style="width: 300px; height: 100px; padding: 5px; background-color: white; border-radius: 5px">Logout</a>
</div>
<div id="nav">
	<ul>
		<li><b><a href="ahome.php">Home</a></b></li>
		<li><b><a href="ib.php">Insert Books</a></b></li>
		<li><b><a href="bl.php">Book List</a></b></li>
		<li><b><a href="sb.php">Sell Books</a></b></li>
		<li><b><a href="blg.php">Blog</a></b></li>
		<li><b><a href="help.php">Help</a></b></li>
	</ul>
</div>
<div id="container">
	<br><br><center>
    <form action="" method="POST" enctype="multipart/form-data">
    	<table>
    		<tr>
    			<td width="200px" height="50px">Enter Book Name</td>
    			<td width="200px" height="50px"><input style="width: 200px; height: 30px; border-radius: 10px;" type="text" name="bname" placeholder="Enter Book Name"></td>
    		</tr>
    		<tr>
    			<td width="200px" height="50px">Enter Book Price</td>
    			<td width="200px" height="50px"><input style="width: 200px; height: 30px; border-radius: 10px;" type="text" name="price" placeholder="Enter Book Price"></td>
    		</tr>
    		<tr>
    			<td width="200px" height="50px">Enter Book Category</td>
    			<td width="200px" height="50px">
    				<select style="width: 200px; height: 30px; border-radius: 10px;" name="cat">
    					<option>-------Select Category-------</option>
    					<option>SCIENCE</option>
    					    <option>ROMANCE</option>
    					         <option>ACTION</option>
    					             <option>THRILLER</option>
    					                 <option>BIOGRAPHY</option>
    					                       <option>RELIGION</option>
    				</select>
    			</td>
    		</tr>
    		<tr>
    			<td width="200px" height="50px">Book Image</td>
    			<td width="200px" height="50px"><input type="file" name="img"></td>
    		</tr>
    		<tr>
    			<td><input type="submit" name="sub" value="Save"></td>
    		</tr>
    	</table>
    </form>
    <?php
    if(isset($_POST['sub']))
    {
    	$name=$_POST['bname'];
    	$price=$_POST['price'];
    	$cat=$_POST['cat'];
    	$image=$_FILES['img']['name'];
    	$image_tmp=$_FILES['img']['tmp_name'];
    	move_uploaded_file($image_tmp,"../im/$image" );
    	if(mysqli_query($link,"insert into book (name,price, cat, img) values ('$name','$price','$cat','$image')"))
    		{
    			echo "<script>alert('Data Inserted')</script>";
    		}
    		else
    		{
    			echo "<script>alert('Data Not Inserted')</script>";
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