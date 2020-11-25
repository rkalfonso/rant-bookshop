<?php
include('config.php');
if (isset($_GET['action']) == isset($_GET['id'])) {
  $action = $_GET['action'];
  $id = $_GET['id'];
  echo $id;
  echo $action;

  if ($action == 'plus') {
    echo "Panget";
    $query45 = mysqli_query($conn, "SELECT * FROM stock WHERE stock_id = '$id'") or die("Could not perform select on table 'stock': " . mysqli_error($conn));
    $row45 = mysqli_fetch_array($query45);
    $qty = $row45['qty'];
    $qty += 1;
    $query46 = mysqli_query($conn, "UPDATE stock set qty = '$qty' where stock_id = '$id';") or die("Could not perform select on table 'stock': " . mysqli_error($conn));
  } else if ($action == 'minus') {
    echo "pogi";
    $query47 = mysqli_query($conn, "SELECT * FROM stock WHERE stock_id = '$id'") or die("Could not perform select on table 'stock': " . mysqli_error($conn));
    $row47 = mysqli_fetch_array($query47);
    $qty = $row47['qty'];
    $qty -= 1;
    $query48 = mysqli_query($conn, "UPDATE stock set qty = '$qty' where stock_id = '$id';") or die("Could not perform select on table 'stock' .mysqli_error($conn");
  }
  echo "panget";
  header("Location: home.php");
}