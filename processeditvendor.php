<?php
require 'connect.php';
$vendor_email=$_POST['vendor_email'];
$vendor_firstname=$_POST['vendor_firstname'];
$vendor_surname=$_POST['vendor_surname'];
$vendor_phone=$_POST['vendor_phone'];
$sql= "UPDATE vendor SET vendor_email='$vendor_email', vendor_firstname='$vendor_firstname', vendor_surname='$vendor_surname', vendor_phone='$vendor_phone' WHERE vendor_email='$vendor_email'";

if (mysqli_query( $link, $sql))
{
    header("Location: http://localhost/property/managevendors.php");
    exit;
}
else
{ echo "Could not update vendor";
}
mysqli_close($link);
?>