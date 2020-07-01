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
        <a href="./proyectos_login.php" class="selected">Proyectos</a>
        <a href="" class="h">Eventos</a>
        <a href="" class="h">Videos</a>
        <a href="" class="h">Equipo</a>
        <a href="./inicio de sesion.html" class="h">Inicio de Sesion</a>
        <a href="" class="h">Registro</a>
      </nav>
      </center>
  </header>

  
  <div id="add_proj">
  <h2>Add Project</h2>
  <form method="POST" action="insert_proj.php">
    Image: <input type="file" name="image" id="image" required><br>
      Name:  <input type="text" name="name" id="name" required><br>
      Description: <input type="text" name="description" id="description" required><br>
      From: <input type="date" name="start" id="start" required>
      To: <input type="date" name="end" id="end" required><br>
      <input type="submit" name="submit" value="submit">
  </form>
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