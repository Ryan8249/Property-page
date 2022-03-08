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
<h3>Add a Vendor</h3>
<p>
<div id="addvendor">
<form method="post" action="processaddvendor.php">
<table>
<tr>
<td>Vendor Email: </td>
<td><input type="text" name="vendor_email" required="required"/></td>
</tr>
<tr>
<td>Vendor First Name: </td>
<td><input type="text" name="vendor_firstname" required="required" /></td>
</tr>
<tr>
<td>Vendor Surname : </td>
<td><input type="text" name="vendor_surname" required="required" /></td>
</tr>
<tr>
<td>Vendor Phone Number: </td>
<td><input type="text" name="vendor_phone" required="required" /></td>
</tr>
<tr>
<tr>
<td><input type="submit" name="submit" value="Add Vendor"/></td>
</tr>
</table>
</form>
</div>
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
