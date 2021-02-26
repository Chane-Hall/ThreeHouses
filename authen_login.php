<?php  
 require('db_connect.php');

if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];
$cnt = 1;

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `users` WHERE username='$username' and Password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
header("Location: home.php");

}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
echo "<script type='text/javascript'><p>Invalid Login Credentials'</p></script>";
$cnt = 7;
//echo "Invalid Login Credentials";
}
if ($cnt == 7){
	header("Location: index.php");
}
}
?>