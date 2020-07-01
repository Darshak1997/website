<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
$_SESSION = []; 	
header("Location: inicio de sesion.php"); // Redirecting To Home Page
}
?>