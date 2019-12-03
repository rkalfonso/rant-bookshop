<?php
include("config.php");
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
//5b8ed59a60a45e1b75084099a69d2918
$email = $conn->real_escape_string($email);
//$password = md5($password);
$query_login = "SELECT * FROM customer WHERE email = '$email' AND password ='$password';";
$result = $conn->query($query_login) or die("Could not select on table customer: " .mysqli_error($conn));

if ($result->num_rows == 1) {
	$row_session = mysqli_fetch_array($result);
	$_SESSION['name'] = ucwords($row_session['f_name']) . ' ' . ucwords($row_session['l_name']);
	$_SESSION['fname'] = ucwords($row_session['f_name']);
	$_SESSION['id'] = $row_session['customer_id'];
	$_SESSION['email'] = $email;
	$_SESSION['img'] = $row_session['img'];
	// echo $_SESSION['name'];
	// echo '<br>';
	// echo $_SESSION['id'];
	// echo '<br>';
	// echo $_SESSION['email'];
  header('Location: home.php');
} else {
	header('Location: login.html');
}
