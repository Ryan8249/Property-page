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
<div id="displayproducts">
<h2> Latest Properties</h2>
<?php
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "property");
$sql="SELECT * from property";
$result=mysqli_query($link, $sql);

$rows=mysqli_num_rows($result); // Return the number of rows in result set
if($rows>0) //if there are records
{
$cols = 3; // Define number of columns you want
$counter = 1; // Counter used to identify if we need to start or end a row
while($row=mysqli_fetch_array($result)) {
if(($counter % $cols) == 1) { // Check if it's new row ?>
 <br><br><!--space between rows-->
 <div class="newrow"><!--start a new row-->
<?php
}
$propertyid=$row["propertyid"];
$image=$row["image"];
$address1=$row["address1"];
$shortdescription=$row["shortdescription"];
$price=$row["price"];?>
 <div class="col"><!--create a column for a product-->
 <div class="card"><!--create a styled card for a product-->
 <div class="card-image"><!—create a styled div for the image-->
 <?php
 echo "<img src='$image' style='max-width:100%;'>"?>
 </div>
 <hr>
 <div class="card-body">
 <?php
 echo "<h4>$address1</h4>"; //output the product name
 echo "&euro;"; echo $price; //output the euro sign and price
 ?>
 <p class="card-text">
 <?php
 echo "$shortdescription"; //output the product short desc
 echo "</p>"
 ?>
 <div class="detailslink">
 <?php echo "<a href='moredetails.php?propertyid=$propertyid'>More Details</a>";?>
<br><br>
 </div><!--close detailslink-->
 </div><!--close the card-body-->
 </div><!--close the card-->
 </div><!--close the column-->
 <?php
 if(($counter % $cols) == 0) { // If it's last column in each row then counter remainder will be zero
 echo "</div>"; //close the row
 }
 $counter++; // increase the counter
 } //end of while loop
} //end if
echo"</div><br><br>"; //close the last row and add some space
mysqli_free_result($result); //free the memory associated with result
mysqli_close($link); //close the connection
?>
</div> <!--close the displayproducts div-->
</div> <!--close the content div-->
<?php include("includes/footer.html");?>
</div> <!--close the container div-->
</body> <!--close the body-->
</html>
