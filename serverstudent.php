<?php
session_start();

// initializing variables
$name = "";
$usn    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root','project');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $usn = mysqli_real_escape_string($db, $_POST['usn']);
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "name is required"); }
  if (empty($usn)) { array_push($errors, "usn is required"); }
 
  }

 
  	$query = "INSERT INTO users (username,email,password) 
  			  VALUES('$name', '$usn')";
  	
  	$_SESSION['name'] = $name;
  
  	header('location: index.php');
  
// LOGIN USER
if (isset($_POST['login_user'])) {
  $name = mysqli_real_escape_string($db, $_POST['name']);
 

  if (empty($name)) {
  	array_push($errors, "name is required");
  }
 

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE name='$name' ";
  
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>