<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Manage Properties</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/styles.css">
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>
<div id="content">
<?php

require 'connect.php';

if (isset($_POST['submit']))
{
$town=$_POST['location'];
$categoryid=$_POST['category'];
$pricerange=$_POST['price'];
}

if ($pricerange=='1') {
    $low=0;
	$high=99999;
	}
elseif ($pricerange=='2'){
      $low=100000;
	$high=199999;
	}
elseif ($pricerange=='3'){
      $low=200000;
	$high=299999;
	}
elseif ($pricerange=='4'){
      $low=300000;
	$high=2000000;
	}
	
$sql="SELECT * from property WHERE property.town='$town' AND property.categoryid='$categoryid' AND property.price>='$low' AND property.price<= '$high'";
$result=mysqli_query($link, $sql);

if(mysqli_num_rows($result)>0)
{
echo "<table>";
echo "<tr>
<td><strong>Image</td>
<td><strong>Property</td>
<td><strong>Price</td>
<td><strong>Description</td>
<td><strong>Details</td>
</tr>";
while($row=mysqli_fetch_array($result)) {
$propertyid=$row["propertyid"];
$image=$row["image"];
$address=$row["address1"];
$shortdesc=$row["shortdescription"];
$price=$row["price"];
echo "<tr>
<td><img src='$image' width=100 height=100> </td>
<td>$address</td>
<td>&euro;$price</td>
<td>$shortdesc</td>
<td><a href='moredetails.php?propertyid=$propertyid'>Details</a></td>
</tr>";
}
echo "</table>";
}
else
{
echo "<h3> There are currently no items in this category</h3>";
}
mysqli_close($link);
?>

</html>