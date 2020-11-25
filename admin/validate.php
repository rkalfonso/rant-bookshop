<?php
include("../config.php");
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
//5b8ed59a60a45e1b75084099a69d2918
$username = $conn->real_escape_string($username);
//$password = md5($password);
$query_login = "SELECT * FROM admin WHERE username = '$username' AND password ='$password';";
$result = $conn->query($query_login) or die("Could not select on table customer: " .mysqli_error($conn));

if ($result->num_rows == 1) {
	$row_session = mysqli_fetch_array($result);
	$_SESSION['username'] = $row_session['username'];
	$_SESSION['id'] = $row_session['customer_id'];
	// echo $_SESSION['name'];
	// echo '<br>';
	// echo $_SESSION['id'];
	// echo '<br>';
	// echo $_SESSION['email'];
  header('Location: home.php');
} else {
	header('Location: index.php');
}