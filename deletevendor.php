<?php
require 'connect.php';
$vendor_email= $_GET['vendor_email'];
$sql= "DELETE FROM vendor WHERE vendor_email='$vendor_email'";
if (mysqli_query( $link, $sql))
{
header("Location: http://localhost/property/managevendors.php");
exit;
}
else
{ 
echo "Could not delete product";
}
mysqli_close($link);
?>