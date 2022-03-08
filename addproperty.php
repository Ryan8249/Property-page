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
<h3>Add a Property</h3>
<p>
<div id="addproperty">
<form method="post" action="processadd.php">
<table>
<tr>
<td>Address: </td>
<td><input type="text" name="address1" required="required"/></td>
</tr>
<tr>
<td>Town: </td>
<td><input type="text" name="town" required="required" /></td>
</tr>
<tr>
<td>County: </td>
<td><input type="text" name="county" required="required" /></td>
</tr>
<tr>
<td>Price: </td>
<td><input type="text" name="price" required="required" /></td>
</tr>
<tr>
<td>Bedrooms: </td>
<td><input type="text" name="bedrooms" required="required" /></td>
</tr>
<tr>
<td>Description: </td>
<td><textarea name="shortdescription" rows="8" cols="35" required="required" /></textarea></td>
</tr>
<tr>
<td>Long Description: </td> <td><textarea name="longdescription" rows="8" cols="35" required="required"/></textarea></td>
</tr>
<tr>
<td>Image Path: </td> <td><input type="text" name="image" required="required" /></td>
</tr>
<td>Category ID: </td>
<td><input type="number" name="categoryid" required="required" /></td>
</tr>
<tr>
<td>Vendor Email: </td>
<td><input type="email" name="vendor_email" required="required" /></td>
</tr>
<tr>
<tr>
<td><input type="submit" name="submit" value="Add Property"/></td>
</tr>
</table>
</form>
</div>
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
