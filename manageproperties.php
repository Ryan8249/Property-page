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
<div id="displayproperties">
<?php
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "property");
$sql="SELECT * from property";
$result=mysqli_query($link, $sql);
if(mysqli_num_rows($result)>0)
{
    echo"<table>";
}
else
{
    echo("There are currently no properties in the database");
}
echo "
<tr>
<td><strong>Manage Properties</td>
</tr>";
echo"
<tr>
<td><a href='addproperty.php'>Add a new property</a></td>
<tr>
<td><a href='admin.php'>Return To Admin</a></td>

</tr>";

echo"
<tr>
<td><strong>Image</td>
<td><strong>Address</td>
<td><strong>Price</td>
<td><strong>Description</td>
<td><strong>Edit</td>
<td><strong>Delete</td>
</tr>";

 while($row=mysqli_fetch_array($result)) {
$propertyid=$row["propertyid"];
$image=$row["image"];
$address1=$row["address1"];
$shortdescription=$row["shortdescription"];
$price=$row["price"];
echo "<tr>
<td><img src='$image' width=100 height=100> </td>
<td>$address1</td> <td>&euro; $price</td>
<td>$shortdescription</td>
<td><a href='editproperty.php?propertyid=$propertyid'>Edit</a></td>
<td><a href='confirmdeleteproperty.php?propertyid=$propertyid'>Delete</a></td>
</tr>";
} 
echo "</table>";
; mysqli_close($link);
echo "<p><a href='admin.php'>Return To Admin</a>";
?>
</div>
</div> <!--close the content div-->
<?php include("includes/footer.html");?>
</div> <!--close the container div-->
</body> <!--close the body-->
</html>
