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
<div id="displayvendor">
<?php
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "property");
$sql="SELECT * from vendor";
$result=mysqli_query($link, $sql);
if(mysqli_num_rows($result)>0)
{
    echo"<table>";
}
else
{
    echo("There are currently no vendors in the database");
}
echo "
<tr>
<td><strong>Manage Vendors</td>
</tr>";
echo"
<tr>
<td><a href='addvendor.php'>Add a new vendor</a></td>
<tr>
<td><a href='admin.php'>Return To Admin</a></td>
</tr>";
echo"
<tr>
<td><strong>Vendor Email</td>
<td><strong>Vendor First Name</td>
<td><strong>Vendor Surname</td>
<td><strong>Vendor Phone Number</td>
</tr>";
 while($row=mysqli_fetch_array($result)) {
$vendor_email=$row["vendor_email"];
$vendor_firstname=$row["vendor_firstname"];
$vendor_surname=$row["vendor_surname"];
$vendor_phone=$row["vendor_phone"];
echo "<tr>
<td>$vendor_email</td> <td>$vendor_firstname</td>
<td>$vendor_surname</td> <td>$vendor_phone</td>
<td><a href='editvendor.php?vendor_email=$vendor_email'>Edit</a></td>
<td><a href='confirmdeletevendor.php?vendor_email=$vendor_email'>Delete</a></td>
</tr>";
} 
echo "</table>";
; mysqli_close($link);
?>
</div>
</div> <!--close the content div-->
<?php include("includes/footer.html");?>
</div> <!--close the container div-->
</body> <!--close the body-->
</html>
