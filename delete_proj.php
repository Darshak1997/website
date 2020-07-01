<!DOCTYPE html>
<html>
<head>
  <title>Proyectos</title>
  <link rel="stylesheet" href="mijares.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
<div id="wrapper">

<?php
  $conn = mysqli_connect("localhost", "root", "", "wdm") or die(mysqli_error());
  $result = mysqli_query($conn, "SELECT * FROM projects") or die(mysqli_error($conn));

  // Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$idErr = "True";
$id = mysqli_real_escape_string($conn, $_REQUEST['id']);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["id"])) {
    echo "*ID is required";
    $idErr = "False";
    echo "<br>";
    echo "<a href='eventos_login.php' class='button_echo'>Back to main page</a>";
  } else {
    $id = test_input($_POST["id"]);
    if (!preg_match("/^([0-9])*$/",$id)) {
      echo "Only Numbers allowed";
      echo "<a href='eventos_login.php' class='button_echo'>Back to main page</a>";
      $idErr = "False";
    }
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($idErr == "True"){
  $sql = "DELETE FROM projects WHERE id = '$id'";

  if (mysqli_query($conn, $sql)) {
      echo "Old record Deleted successfully";
      echo "<br>";
      echo "<a href='proyectos_login.php' class='button_echo'>Back to main page</a>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
  mysqli_close($conn);
?>
</div>
</body>
</html>