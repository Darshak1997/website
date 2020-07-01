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
  $result = mysqli_query($conn, "SELECT * FROM events") or die(mysqli_error($conn));

  // Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$status = "True";
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$description = mysqli_real_escape_string($conn, $_REQUEST['description']);
$image = mysqli_real_escape_string($conn, $_REQUEST['image']);
$start = mysqli_real_escape_string($conn, $_REQUEST['start']);
$end = mysqli_real_escape_string($conn, $_REQUEST['end']);



  

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["image"])) {
    echo "*Image is required";
    $status = "False";
    echo "<br>";
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

  if (empty($_POST["start"])) {
    echo "*Start Date is required";
    $status = "False";
    echo "<br>";
    }
  

  if (empty($_POST["end"])) {
    echo "*End Date is required";
    $status = "False";
    echo "<br>";

}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


if ($status == "True"){
  $sql = "INSERT INTO events (image, name, description, start)
  VALUES ('$image', '$name', '$description', '$start')";
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    echo "<br>";
    echo "<a href='eventos_login.php' class='button_echo'>Back to main page</a>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
else{
  echo "<a href='eventos_login.php' class='button_echo'>Back to main page</a>";
}
  mysqli_close($conn);
  ?>
</div>
</body>
</html>