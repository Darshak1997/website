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
  $result = mysqli_query($conn, "SELECT * FROM videos") or die(mysqli_error($conn));

  // Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$status = "True";
$id = mysqli_real_escape_string($conn, $_REQUEST['id']);
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$description = mysqli_real_escape_string($conn, $_REQUEST['description']);
$link = mysqli_real_escape_string($conn, $_REQUEST['link']);



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["id"])) {
    echo "*ID is required";
    $status = "False";
    echo "<br>";
  } else {
    $id = test_input($_POST["id"]);
    if (!preg_match("/^([0-9])*$/",$id)) {
      echo "*Only Numbers allowed";
      $status = "False";
    }
  }

  if (empty($_POST["name"])) {
    echo "*Name is required";
    $status = "False";
    echo "<br>";  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^([a-zA-Z ])*$/",$name)) {
      echo "*Only letters and white space allowed";
      echo "<br>";
      $status = "False";
    }
  }
  if (empty($_POST["description"])) {
    echo "*Description is required";
    $status = "False";
    echo "<br>";
  } else {
    $description = test_input($_POST["description"]);
    if (!preg_match("/^([a-zA-Z ])*$/",$description)) {
      echo "*Only letters and white space allowed";
      echo "<br>";
      $status = "False";
    }
  }

  if (empty($_POST["link"])) {
    echo "*Link is required";
    $status = "False";
    echo "<br>";
  } else {
    $link = test_input($_POST["link"]);
    if (!filter_var($link, FILTER_VALIDATE_URL)) {
      echo "$link is not a valid URL";
      $status = "False";
      echo "<br>";

  }
}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($status == "True"){
  $sql = "UPDATE videos SET name = '$name', description = '$description',
    video_link = '$link' WHERE id = '$id'";
if (mysqli_query($conn, $sql)) {
    echo "New record updated successfully";
    echo "<br>";
    echo "<a href='videos_login.php' class='button_echo'>Back to main page</a>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
else{
  echo "<a href='videos_login.php' class='button_echo'>Back to main page</a>";
}
  mysqli_close($conn);
  ?>
</div>
</body>
</html>
