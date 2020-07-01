<?php
include('register.php'); // Includes Login Script

?>
<!DOCTYPE html>
<html>
<head>
	<title>registro</title>
	<link rel="stylesheet" href="mijares.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	
</head>
<body>
<div id="wrapper">
	<header>
		<center>
			<nav>
			<img src="./imagen P1/logo.png" height="80" width="80" align="middle" id="logo"> 
			<a href="./inicio.php" class= "h">Inicio</a>
			<a href="./semblance.php" class="h">Semblanza</a>
			<a href="./centro augusto mijares.php" class="h">Centro Augusto Mijares</a>
			<a href="./proyectos.php" class="h">Proyectos</a>
			<a href="./eventos.php" class="h">Eventos</a>
			<a href="http://bxs5834.uta.cloud/shah_rairakhia_mijares/blog" class="h">Blog</a>
			<a href="./videos.php" class="h">Videos</a>
			<a href="./equipo.php" class="h">Equipo</a>
			<a href="./inicio de sesion.php" class="h">Inicio de Sesion</a>
			<a href="./registro.php" class="selected">Registro</a>
			</nav>
		</center>
	</header>
	<div id="registro1" align="middle">
		<img src="./imagen P1/logo.png" height="80" width="80" align="middle" id="logo"> 
		<h3 id="registroh">Registro</h3>

	</div>
	<div id="registro2">
		<div id="formr">
			<form id="registrationform" method="post" action="register.php" onsubmit="return formValidation()">
				<div id="rdiv1">
					<input type="text" id="rname" name="name" placeholder="Nombre" required minlength="2" maxlength="20"><br><br>
					<input type="password" id="rpwd" name="password" placeholder="Contrasena" required minlength="8" maxlength="20"><br><br>
				</div>
				<div id="rdiv2">
					<input type="email" id="remail" name="email" placeholder="Correo" minlength="5" maxlength="255"><br><br>
					<input type="password" id="rpwd1" name="password1" placeholder=" Repeter Contrasena" required minlength="2" maxlength="20"><br><br>
				</div>
				<div id="rdiv3">
					<br>
					<input type="text" id="rdir" name="address" placeholder="Direccion" maxlength="255"><br><br>
				</div>
				<input type="submit" name="reg_user" value="Entrar" id="loginbtnr">

			</form>
		</div>
		<div id="nonform">
			<img src="./imagen P1/logo.png" height="150" width="150" align="middle" id="logo"> 
			<h1 id="rh">CENTRO AGUSTO MIJARES</h1>		
		</div>
	</div>
	<footer id="foo">
		<p id="footerp">Copyright &copy;2020 All rights reserved</p>
		<i class="fab fa-facebook-f" id="fblogo"></i>
		<i class="fab fa-twitter" id="twlogo"></i>
	</footer>
</div>
<script type="text/javascript">
	function formValidation(){
		//onsubmit="return formValidation()"
		var email = document.getElementById("remail").value;
		var pwd = document.getElementById("rpwd").value;
		var pwd1 = document.getElementById("rpwd1").value;
		var address = document.getElementById("rdir").value;
		var rname = document.getElementById("rname").value;
		var emailReg = "/^([w-.]+@([w-]+.)+[w-]{2,4})?$/";
		var emailregex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		var strongRegex = "^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})";
		if(email ==  ""){
			alert("Email cannot be empty.");
			return false;
		}

		if(pwd == ""){
			alert("Password cannot be empty.");
			return false;
		}

		if(address == ""){
			alert("Address cannot be empty.");
			return false;
		}

		if(rname == ""){
			alert("Name cannot be empty.");
			return false;
		}

		if(!pwd.match(strongRegex)){
			alert("Password rquires 1 uppercase,1 lowercase,1 number,1 Special Charecter");
			return false;
		}

		if(!email.match(emailregex)){
			alert("Email format not valid.");
			return false;
		}

		if(pwd != pwd1){
			alert("Password doesn't match.");
			return false;
		}

		return true;
	}
	
</script>
</body>
</html>