<?php
session_start();

// initializing variables
$name = "";
$email = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'wdmfinal');


// REGISTER USER
if (isset($_POST['reg_user'])) {

  echo "In register";

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password_1 = $_POST['password'];
  $password_2 = $_POST['password1'];
  $address = $_POST['address'];

  $pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$";
  $emailReg = "/^([w-.]+@([w-]+.)+[w-]{2,4})?$/";

  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if(preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password )){ array_push($errors, "Password Pattern Not valid");}

  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ array_push($errors, "Email Pattern Not valid");}

 $user_check_query = "SELECT * FROM `user` WHERE User_Email='$email'" ;
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists

    if ($user['email'] == $email) {
      array_push($errors, "email already exists");
      echo "<h1>email exist.<h1>";
    }
  }
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    echo "In register";
  	$password = $password_1;
    $msg = "Thank you for registering";
    mail("$email","Registration",$msg);

  	$query = "INSERT INTO user (User_Email,Password,Address,Role,User_Name) 
  			  VALUES('$email', '$password','$address','User','$name')";
  	mysqli_query($db, $query);
    session_start();
  	$_SESSION['username'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header("location: proyectos_login.php");
  }
  else{
    header("location: registro.php");
    
  }
}