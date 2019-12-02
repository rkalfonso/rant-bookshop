<?php
include("config.php");
include("session.php");

$id = $_GET['id'];

$fname = $conn->real_escape_string($_POST['fname']);
$mname = $conn->real_escape_string($_POST['mname']);
$lname = $conn->real_escape_string($_POST['lname']);
$address = $conn->real_escape_string($_POST['address']);
$country = $conn->real_escape_string($_POST['country']);
$zip = $conn->real_escape_string($_POST['zip']);
$mobile = $conn->real_escape_string($_POST['mobile']);
$telephone = $conn->real_escape_string($_POST['telephone']);
$email = $conn->real_escape_string($_POST['email']);

$sql_update_cx = "UPDATE customer SET f_name = '$fname', mi = '$mname', l_name = '$lname', address = '$address', country = '$country', zip = '$zip', mobile = '$mobile', telephone = '$telephone', email = '$email' WHERE customer_id = '$id'";
$query_update_cx = $conn->query($sql_update_cx) or die("Could not perform update in table 'customer': " . mysqli_error($conn));
if ($query_update_cx){
  $_SESSION['name'] = ucwords($fname) . ' ' . ucwords($lname);
  $_SESSION['email'] = $email;
  header("Location: home.php");
}
