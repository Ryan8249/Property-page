<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Search Properties</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/styles.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>
<div id="content">
<form method="post" action="results.php" id="searchform">
<h3>Search Properties</h3>
<hr>
<div id ="gettown" class="searchbox">
<label> Location: </label>
<select name="location" required="required">
 <option value="">Select Town</option>
 <?php
   require "connect.php";
   $sql="select DISTINCT town from property";
   $result=mysqli_query($link, $sql);
   if (mysqli_num_rows($result) >0)
  {
   while ($row=mysqli_fetch_array($result)){
    $town=$row['town'];
    echo "<option value='$town'>$town</option>";
   }
  }
mysqli_close($link);
?>
</select>
</div>

<div id ="getcategory">
<label> Category: </label>
<select name="category" required="required">
<option value="">Select Category</option>
<?php
  require "connect.php";
  $sql="select * from category";
  $result=mysqli_query($link, $sql);
  if (mysqli_num_rows($result) >0)
  {
   while ($row=mysqli_fetch_array($result)){
     $categoryname=$row['categoryname'];
	 $categoryid=$row['categoryid'];
     echo "<option value='$categoryid'>$categoryname</option>";
   }
  }
mysqli_close($link);
?>
</select>
</div>

<div id="price">
<label>Price:</label>
<select name="price" required="required">
   <option value="">Select</option>
  <option value="1">Less than &euro; 100,000</option>
  <option value="2">&euro; 100,000 - &euro; 200,000</option>
  <option value="3">&euro; 200,000 - &euro; 300,000</option>
  <option value="4">Greater than &euro; 300,000 </option>
</select>
</div>

<div><button type="submit" name="submit" id="btnSubmit">Search</button></div>
</form>
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>