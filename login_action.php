<?php
//Start the Session
session_start();
require 'connect.php'
; // If the form is submitted
if (isset($_POST['admin_email']) and isset($_POST['password'])){

//Assigning posted values to variables.
$username = $_POST['admin_email'];
$password = $_POST['password'];

//Checking the values are existing in the database or not
$query = "SELECT * FROM administrator WHERE admin_email='$username' and password='$password'";
$result = mysqli_query($link, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

//If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$row=mysqli_fetch_array($result);
$_SESSION['username'] = $row['firstname'];
header("Location:admin.php");
exit;
} else 
//If the login credentials don't match, show an error message and return to the login page to retry.
{
$_SESSION['errors'] = array('Your username or password was incorrect');
header("Location:adminlogin.php");
} 
}
?>