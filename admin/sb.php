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
		<li><b><a href="sb.php">Sold Books</a></b></li>
		<li><b><a href="blg.php">Blog</a></b></li>
		<li><b><a href="help.php">Help</a></b></li>
	</ul>
</div>
<div id="container">
	<br><br><center>
    <h1>Sold Book's List</h1>
    <table border="1" align="center">
    	<tr>
    		<td style="color: blue;" width="200" height="50" align="center">Book Nmame</td>
    		<td style="color: blue;"width="200" height="50" align="center">Book ID</td>
    		<td style="color: blue;"width="200" height="50" align="center">Name</td>
            <td style="color: blue;"width="200" height="50" align="center">Address</td>
            <td style="color: blue;"width="200" height="50" align="center">City</td>
            <td style="color: blue;"width="200" height="50" align="center">Pin Code</td>
            <td style="color: blue;"width="200" height="50" align="center">Email</td>
            <td style="color: blue;"width="200" height="50" align="center">Mobile No</td>
    	</tr>
    	<?php
    	$q="select * from sell";
    	$run=mysqli_query($link,$q);
    	while($row=mysqli_fetch_array($run))
    	{
    		$bname=$row['bname'];
    		$bid=$row['bid'];
    		$name1=$row['name1'];
            $add1=$row['add1'];
            $city=$row['city'];
            $pin=$row['pin'];
            $email=$row['email'];
            $mno=$row['mno'];
    	
    	?>
    	<tr>
    		<td width="200" height="50"><center><?php echo $bname ?></center></td>
    		<td width="200" height="50"><center><?php echo $bid ?></center></td>
    		<td width="200" height="50"><center><?php echo $name1 ?></center></td>
            <td width="200" height="50"><center><?php echo $add1 ?></center></td>
            <td width="200" height="50"><center><?php echo $city ?></center></td>
            <td width="200" height="50"><center><?php echo $pin ?></center></td>
            <td width="200" height="50"><center><?php echo $email ?></center></td>
            <td width="200" height="50"><center><?php echo $mno ?></center></td>
    	</tr>
    	<?php
          }
         ?>
    </table>
    </center>
</div>
<div id="footer"><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<h1 style="margin-top: 300px;color: blue;" align="center">PHP PROJECT NIIT BARRACKPORE</h1>
</div>

</body>
</html>