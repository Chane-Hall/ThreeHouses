<?php
session_start();

$db = mysqli_connect('localhost', 'root', '', 'tree');

if (isset($_POST['name']) and isset($_POST['address'])){
	
// Assigning POST values to variables.
$name = $_POST['name'];
$addr = $_POST['address'];
$descr = $_POST['description'];
$type = $_POST['type'];
$pict = $_POST['picture'];

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($addr)) { array_push($errors, "Address is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM trees WHERE name='$name' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['name'] === $name) {
      array_push($errors, "A habitat with that name already exists");
    }
}
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$query = "INSERT INTO trees ('name', 'address','description','type','owner') 
  			  VALUES($name, $address, $descr, $type, $_SESSION['username'])";
  	mysqli_query($db, $query);
  	//$_SESSION['username'] = $username;???????????????????????
  	$_SESSION['success'] = "New habitat has been created";
  	header('location: home.php');
  }
}



?>