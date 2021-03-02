<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body style="background-image: url('image/b1.png');">

<div id="header">
    <h2 style="padding: 10px"><font face="Cooper">THE READERS JUNCTION</font></h2>
    <a href="index.php" style="width: 300px; height: 100px; padding: 5px; background-color: white; border-radius: 5px">Logout</a>
</div>
<div id="nav">
    <ul>
        <li><b><a href="ahome.php">Home</a></b></li>
        <li><b><a href="ib.php">Insert Book</a></b></li>
        <li><b><a href="bl.php">Book List</a></b></li>
        <li><b><a href="sb.php">Sold Books</a></b></li>
        <li><b><a href="blg.php">Blog</a></b></li>
        <li><b><a href="help.php">Help</a></b></li>
    </ul>
</div>
<div id="container">
  <br><br><center>
    <h1>Book List</h1>
    <form action="" method="post">
    <select name="c">
    <option>---------Select Category------------</option>
    <option>Science</option>
    <option>Romance</option>
    <option>Action</option>
    <option>Thriller</option>
    <option>Biography</option>
    <option>Religion</option>
    </select>
    <input type="submit" name="sub" value="Ok">
</form><br><br>
    <center><table border="1" align="center ">
        <tr>
            <th width="200" height="50">NAME</th>
            <th width="200" height="50">PRICE</th>
            <th width="200" height="50">CATEGORY</th>
        </tr>
        <?php
        if(isset($_POST['sub']))
        {
             $c=$_POST['c'];
             if($c=="Science")
             {
                   $qq="select * from book where cat like '%$c%'";
                   $run=mysqli_query($link,$qq);
                   while($row=mysqli_fetch_array($run))
                   {
                    $name=$row['name'];
                   $price=$row['price'];
                   $cat=$row['cat'];
                    ?>
                     <tr>
           <td width="200" height="50"><center><?php echo $name ?></center></td>
            <td width="200" height="50"><center><?php echo $price ?></center></td>
             <td width="200" height="50"><center><?php echo $cat ?></center></td>
        </tr>
                    <?php

                   }        
             }
             else if($c=="Romance")
             {
                   $qq="select * from book where cat like '%$c%'";
                   $run=mysqli_query($link,$qq);
                   while($row=mysqli_fetch_array($run))
                   {
                    $name=$row['name'];
                   $price=$row['price'];
                   $cat=$row['cat'];
                    ?>
                     <tr>
           <td width="200" height="50"><center><?php echo $name ?></center></td>
            <td width="200" height="50"><center><?php echo $price ?></center></td>
             <td width="200" height="50"><center><?php echo $cat ?></center></td>
        </tr>
                    <?php

                   }        
             } 
             else if($c=="Action")
             {
                   $qq="select * from book where cat like '%$c%'";
                   $run=mysqli_query($link,$qq);
                   while($row=mysqli_fetch_array($run))
                   {
                    $name=$row['name'];
                   $price=$row['price'];
                   $cat=$row['cat'];
                    ?>
                     <tr>
           <td width="200" height="50"><center><?php echo $name ?></center></td>
            <td width="200" height="50"><center><?php echo $price ?></center></td>
             <td width="200" height="50"><center><?php echo $cat ?></center></td>
        </tr>
                    <?php

                   }        
             }
             else if($c=="Thriller")
             {
                   $qq="select * from book where cat like '%$c%'";
                   $run=mysqli_query($link,$qq);
                   while($row=mysqli_fetch_array($run))
                   {
                    $name=$row['name'];
                   $price=$row['price'];
                   $cat=$row['cat'];
                    ?>
                     <tr>
           <td width="200" height="50"><center><?php echo $name ?></center></td>
            <td width="200" height="50"><center><?php echo $price ?></center></td>
             <td width="200" height="50"><center><?php echo $cat ?></center></td>
        </tr>
                    <?php
                     }        
             }
             else if($c=="Biography")
             {
                   $qq="select * from book where cat like '%$c%'";
                   $run=mysqli_query($link,$qq);
                   while($row=mysqli_fetch_array($run))
                   {
                    $name=$row['name'];
                   $price=$row['price'];
                   $cat=$row['cat'];
                    ?>
                     <tr>
           <td width="200" height="50"><center><?php echo $name ?></center></td>
            <td width="200" height="50"><center><?php echo $price ?></center></td>
             <td width="200" height="50"><center><?php echo $cat ?></center></td>
        </tr>
              <?php
               }        
             }
             else if($c=="Religion")
             {
                   $qq="select * from book where cat like '%$c%'";
                   $run=mysqli_query($link,$qq);
                   while($row=mysqli_fetch_array($run))
                   {
                    $name=$row['name'];
                   $price=$row['price'];
                   $cat=$row['cat'];
                    ?>
                     <tr>
           <td width="200" height="50"><center><?php echo $name ?></center></td>
            <td width="200" height="50"><center><?php echo $price ?></center></td>
             <td width="200" height="50"><center><?php echo $cat ?></center></td>
        </tr>
        <?php
                   }        
             }
             else
             {
                  $q="select * from book";
        $run=mysqli_query($link,$q);
        while($row=mysqli_fetch_array($run))
        {
         $name=$row['name'];
         $price=$row['price'];
         $cat=$row['cat'];
        ?>
        <tr>
           <td width="200" height="50"><center><?php echo $name ?></center></td>
            <td width="200" height="50"><center><?php echo $price ?></center></td>
             <td width="200" height="50"><center><?php echo $cat ?></center></td>
        </tr>
        <?php
        }
    
             }
        }
    ?>   
    </table>
    </center>
</div>
<div id="footer"><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <h1 style="margin-top: 300px; color: red" align="center">My Project HD</h1>
</div>
</body>
</html>