<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['email']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['email'];
$password=$_POST['password'];
$connection = mysqli_connect("localhost", "root", "", "wdmfinal");
$query = mysqli_query($connection,"select * from User where Password='$password' AND User_Email='$username' AND Role='Admin'" );
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: proyectos_login.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysqli_close($connection); // Closing Connection
}
}
?>
