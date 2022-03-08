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
$id=$_GET['id'];
$sql="SELECT * from property where id=$id";
$result=mysqli_query($link, $sql);
    echo "<h3>Confirm Delete Comment</h3>";
    echo "<p>";
echo "<table>";
echo "<tr>
<td><strong>Title</td>
<td><strong>Content</td>
<td><strong>Author</td>
<td><strong>Author Email</td>
</tr>";

$row=mysqli_fetch_array($result);
$title=$row["title"];
$content=$row["content"];
$author_name=$row["author_name"];
$author_email=$row["author_email"];
echo "<tr>
        <td>$title</td>
        <td>&euro;$content</td>
        <td>$author_name</td>
        <td>$author_email</td>
</tr>";
echo "</table>";
echo "Are you sure you want to delete this comment? <p>
<a href='deletecomment.php?id=$id'>Delete</a>
<a href='managecomments.php'>Cancel</a>";
mysqli_close($link);
    ?>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
