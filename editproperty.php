<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>My first HTML5 page</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/styles.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>
<div id="content">
<?php
require 'connect.php';
$propertyid=$_GET["propertyid"];
$sql="SELECT * FROM property WHERE propertyid=$propertyid";
$result=mysqli_query($link, $sql);
$row=mysqli_fetch_array($result);
$propertyid=$row["propertyid"];
$address1=$row["address1"];
$town=$row["town"];
$county=$row["county"];
$price=$row["price"];
$bedrooms=$row["bedrooms"];   
$shortdescription=$row["shortdescription"];
$longdesccription=$row["longdescription"];
$vendor_email=$row["vendor_email"];
$categoryid=$row["categoryid"];
$image=$row["image"];
mysqli_close($link);
?>
<form method="post" action="processedit.php">
<input type="hidden" name="propertyid" value="<?php echo $propertyid; ?>"/>
<table>
<tr>
<td>Address: </td>
<td><input type="text" name="address1" value="<?php echo $address1;?>"/></td>
</tr>
<tr>
<td>Town: </td>
<td><input type="text" name="town" value="<?php echo $town;?>"/></td>
</tr>
<tr>
<td>County: </td>
<td><input type="text" name="county"value="<?php echo $county;?>"/></td>
</tr>
<tr>
<td>Price: </td>
<td><input type="text" name="price" value="<?php echo $price;?>"/></td>
</tr>
<tr>
<td>Bedrooms: </td>
<td><input type="text" name="bedrooms" value="<?php echo $bedrooms;?>"/></td>
</tr>
<tr>
<td>Description: </td>
<td><textarea name="shortdescription" rows="8" cols="35"><?php echo $shortdescription;?></textarea></td>
</tr>
<tr>
<td>Long Description: </td> <td><textarea name="longdescription" rows="8" cols="35"><?php echo $longdesccription;?></textarea></td>
</tr>
<tr>
<td>Image Path: </td> <td><input type="text" name="image" value="<?php echo $image;?>"/></td>
</tr>
<td>Category ID: </td>
<td><input type="number" name="categoryid" value="<?php echo $categoryid;?>"/></td>
</tr>
<tr>
<td>Vendor Email: </td>
<td><input type="email" name="vendor_email" value="<?php echo $vendor_email;?>"/></td>
</tr>
<tr>
<tr>
<td><input type="submit" name="submit" value="Update Product"/></td>
</tr>
</table>
</form>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
