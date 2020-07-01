<!DOCTYPE html>
<html>
<head>
	<title>Proyectos</title>
	<link rel="stylesheet" href="mijares.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
<div id="wrapper">
		<header>
		<center>
			<nav>
				<img src="./imagen P1/logo.png" id="logo" height="80" width="80" align="middle"> 
				<a href="" class= "h">Inicio</a>
				<a href="" class="h">Semblanza</a>
				<a href="./centro augusto mijares.html" class="h">Centro Augusto Mijares</a>
				<a href="./proyectos_login.php" class = "h">Proyectos</a>
				<a href="" class="h" class="h">Eventos</a>
				<a href="" class="selected">Videos</a>
				<a href="" class="h">Equipo</a>
				<a href="./inicio de sesion.html" class="h">Inicio de Sesion</a>
				<a href="" class="h">Registro</a>
			</nav>
			</center>
	</header>
	<div class="vertical-menu">
	  	<a href="proyectos_login.php" >Proyectos</a>
	  	<a href="eventos_login.php">Eventos</a>
	  	<a href="videos_login.php" class="active">Videos</a>
	  	<a href="#">Equipo</a>
	</div>
	<div style="position: absolute; margin-left: 15%; top: 20%;">
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "wdm";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT id, name, description, video_link FROM videos";
	if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table style='border: 1px solid #ddd; text-align: left; border-collapse: collapse; width:100%;'>";
            echo "<tr style='color: red;'>";
            	echo "<th style='border: 1px solid #ddd; text-align: left; padding: 15px;'>ID </th>";
                echo "<th style='border: 1px solid #ddd; text-align: left; padding: 15px;'>Name </th>";
                echo "<th style='border: 1px solid #ddd; text-align: left; padding: 15px;'>Description </th>";
                echo "<th style='border: 1px solid #ddd; text-align: left; padding: 15px;'>Video Link </th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            	echo "<td style='border: 1px solid #ddd; text-align: left; padding: 15px;'>" . $row['id'] . "</td>";
                echo "<td style='border: 1px solid #ddd; text-align: left; padding: 15px;'>" . $row['name'] . "</td>";
                echo "<td style='border: 1px solid #ddd; text-align: left; padding: 15px;'>" . $row['description'] . "</td>";
                echo "<td style='border: 1px solid #ddd; text-align: left; padding: 15px;'>" . '<a href="$row["video_link"]"> Video</a>' . "</td>";
                echo "<td style='border: 1px solid #ddd; text-align: left; padding: 15px;'>" . '<a href="edit_videos.php" class="button_echo">Edit</a>' . "</td>";
                echo "<td style='border: 1px solid #ddd; text-align: left; padding: 15px;'>" . '<a href="del_videos.php" class="button_echo">Delete</a>' . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo '<a href="add_videos.php" class="button_echo">Add</a>';
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
        echo "<br>";
        echo '<a href="add_videos.php" class="button_echo">Add</a>';
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($conn);
	?>
	</div>


	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<footer id="foo">
		<p id="footerp">Copyright &copy;2020 All rights reserved</p>
		<i class="fab fa-facebook-f" id="fblogo"></i>
		<i class="fab fa-twitter" id="twlogo"></i>
	</footer>
	</body>
	</html>	