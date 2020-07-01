<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: proyectos_login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>incio de sesion</title>
	<link rel="stylesheet" href="mijares.css">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">

</head>
<body>
<div id="wrapper">
	<div id="login">
		<img src="./imagen P1/logo.png" id="logo" height="100" width="100">
		<h2 id="logint">CENTRO AUGUSTO MIJARES​</h2>
		<h3>Iniciar Sesion</h3>
		<div id="inputs">
			<form id="loginform" method="post">
				<input type="email" id="email" name="email" placeholder="Nombre de Ususario o Correo" required><br><br>
				<input type="password" id="pwd" name="password" placeholder="Contrasena" required><br><br>
				<input type="submit" name="submit" value="Entrar" id="loginbtn" onclick="validateEmailPwd()">
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	function validateEmailPwd(){
		var email = document.getElementById("email").value;
		//alert(email);
		var pwd = document.getElementById("pwd").value;

		if(email == "" || pwd == ""){
			alert("Email and Password cannot be empty.");
			return false;
		}
	}
</script>

</body>
</html>