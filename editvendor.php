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
$vendor_email=$_GET['vendor_email'];
$sql="SELECT * FROM vendor WHERE vendor_email='$vendor_email'";
$result=mysqli_query($link, $sql);
$row=mysqli_fetch_array($result);
$vendor_email=$row["vendor_email"];
$vendor_firstname=$row["vendor_firstname"];
$vendor_surname=$row["vendor_surname"];
$vendor_phone=$row["vendor_phone"];
mysqli_close($link);
?>
<form method="post" action="processeditvendor.php">
<input type="hidden" name="vendor_email" value="<?php echo $vendor_email; ?>"readonly/>
<table>
<tr>
<td>Vendor Email: </td>
<td><input type="text" name="vendor_email" value="<?php echo $vendor_email;?>"/></td>
</tr>
<tr>
<td>Vendor First Name: </td>
<td><input type="text" name="vendor_firstname" value="<?php echo $vendor_firstname;?>"/></td>
</tr>
<tr>
<td>Vendor Surname : </td>
<td><input type="text" name="vendor_surname" value="<?php echo $vendor_surname;?>"/></td>
</tr>
<tr>
<td>Vendor Phone Number: </td>
<td><input type="text" name="vendor_phone" value="<?php echo $vendor_phone;?>"/></td>
</tr>
<tr>
<tr>
<td><input type="submit" name="submit" value="Update Vendor"/></td>
</tr>
</table>
</form>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
