<?php
include('config.php');
session_start();
   
if(!isset($_SESSION['username'])){
  header("location: index.php");
}
// }else {
// $id = $_SESSION['user_id'];

// $session_query = "SELECT f_name, l_name, img FROM employee WHERE user_id = $id";
// $session_result = $mysqli->query($session_query);
// $session_row = mysqli_fetch_array($session_result);
// $_SESSION['name'] = $session_row['f_name'] . " " . $session_row['l_name'];
// $_SESSION['img'] = $session_row['img'];
// }