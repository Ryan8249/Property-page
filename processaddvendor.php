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
$vendor_email=$_POST["vendor_email"];
$vendor_firstname=$_POST["vendor_firstname"];
$vendor_surname=$_POST["vendor_surname"];
$vendor_phone=$_POST["vendor_phone"];
$sql_insert="INSERT INTO vendor(vendor_email, vendor_firstname, vendor_surname, vendor_phone) VALUES ('$vendor_email', '$vendor_firstname', '$vendor_surname', '$vendor_phone')";

if(mysqli_query($link, $sql_insert)) {
echo "<h3>Vendor Added!</h3>";
echo "<a href='managevendors.php'>Return to Manage Vendors page</a>";}
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
