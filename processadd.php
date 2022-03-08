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
<?php require 'connect.php';
$address1=$_POST["address1"];
$town=$_POST["town"];
$county=$_POST["county"];
$price=$_POST["price"];
$bedrooms=$_POST["bedrooms"];
$shortdescription=$_POST["shortdescription"];
$longdescription=$_POST["longdescription"];
$image=$_POST['image'];
$categoryid=$_POST['categoryid'];
$vendor_email=$_POST["vendor_email"];
$sql_insert="INSERT INTO property(address1, town, county, price, bedrooms, shortdescription, longdescription, image, categoryid, vendor_email) VALUES ('$address1', '$town', '$county', '$price', '$bedrooms', '$shortdescription', '$longdescription', '$image', '$categoryid','$vendor_email' )";

if(mysqli_query($link, $sql_insert)) {
echo "<h3>Property Added!</h3>";
echo "<a href='manageproperties.php'>Return to Manage Products page</a>";}
else { 
echo "An error occurred, try again!";
} 
mysqli_close($link);
?>
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
