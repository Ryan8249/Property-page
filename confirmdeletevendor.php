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
$vendor_email=$_GET['vendor_email'];
$sql="SELECT * from vendor where vendor_email='$vendor_email'";
$result=mysqli_query($link, $sql);
    echo "<h3>Confirm Delete Vendor</h3>";
    echo "<p>";
echo "<table>";
echo "<tr>
<td><strong>Vendor Email</td>
<td><strong>Vendor Firstname</td>
<td><strong>Vendor Surname</td>
<td><strong>vendor Phone Number</td>
</tr>";

$row=mysqli_fetch_array($result);
$vendor_email=$row['vendor_email'];
$vendor_firstname=$row["vendor_firstname"];
$vendor_surname=$row["vendor_surname"];
$vendor_phone=$row["vendor_phone"];
echo "<tr>
        
        <td>$vendor_email</td>
        <td>$vendor_firstname</td>
        <td>$vendor_surname</td>
        <td>$vendor_phone</td>
</tr>";
echo "</table>";
echo "Are you sure you want to delete this vendor? <p>
<a href='deletevendor.php?vendor_email=$vendor_email'>Delete</a>
<a href='managevendors.php'>Cancel</a>";
mysqli_close($link);
    ?>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
