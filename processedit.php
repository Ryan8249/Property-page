<?php
require 'connect.php';
$propertyid=$_POST['propertyid'];
$address1=$_POST['address1'];
$town=$_POST['town'];
$county=$_POST['county'];
$price=$_POST['price'];
$bedrooms=$_POST['bedrooms'];
$shortdescription=$_POST['shortdescription'];
$longdescription=$_POST['longdescription'];
$vendor_email=$_POST['vendor_email'];
$categoryid=$_POST['categoryid'];
$image=$_POST['image']; $sql= "UPDATE property SET address1='$address1', town='$town', county='$county', price='$price', bedrooms='$bedrooms',
shortdescription='$shortdescription', longdescription='$longdescription', vendor_email='$vendor_email',
categoryid='$categoryid', image='$image' WHERE propertyid='$propertyid'";

if (mysqli_query( $link, $sql))
{
    header("Location: http://localhost/property/manageproperties.php");
    exit;
}
else
{ echo "Could not update product";
}
mysqli_close($link);
?>