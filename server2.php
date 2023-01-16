<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'project');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $usn = mysqli_real_escape_string($db, $_POST['usn']);
  $branch = mysqli_real_escape_string($db, $_POST['branch']);
  $sem = mysqli_real_escape_string($db, $_POST['sem']);
  $scheme = mysqli_real_escape_string($db, $_POST['scheme']);
 
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "name is required"); }
  if (empty($usn)) { array_push($errors, "usn is required"); }
  if (empty($branch)) { array_push($errors, "branch is required"); }
  if (empty($sem)) { array_push($errors, "sem is required"); }
  if (empty($scheme)) { array_push($errors, "scheme is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $student_check_query = "SELECT * FROM student WHERE OR usn='$usn' LIMIT 1";
  $result = mysqli_query($db, $student_check_query);
  $student = mysqli_fetch_assoc($result);
  
  if ($student) { // if user exists
    if ($student['usn'] === $usn) {
      array_push($errors, "usn already exists");
    }

  
  
  	$query = "INSERT INTO student(name,usn,branch,sem,scheme) 
  			  VALUES('$name', '$usn', '$branch','$sem','$scheme')";
  	mysqli_query($db, $query);
  	$_SESSION['name'] = $name;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index2.php');
  }
}


?>