<?php
include('config.php');
if(isset($_GET['id'])){
  $id = $_GET['id'];
  echo $id ."<br>";
  $query1 = "SELECT * FROM transaction_detail WHERE transaction_id = '$id'";
  $result1 = mysqli_query($conn, $query1) or die("Could not perform select on table 'transaction_detail: " .mysqli_error($conn));

  while($row = mysqli_fetch_array($result1)){
    $book = $row['product_id'];
    echo $book ."<br>";
    $qty = $row['order_qty'];
    echo $qty ."<br>";

    $query2 = mysqli_query($conn, "SELECT * FROM stock WHERE book_id = '$book'") or die("Could not perform select on table 'stock'" .mysqli_error($conn));
    $row2 = mysqli_fetch_array($query2);
    $stock_qty = $row2['qty'];
    echo $stock_qty ."<br>";
    $stock_qty -= $qty;
    echo $stock_qty ."<br>";

    $query3 = mysqli_query($conn, "UPDATE stock SET qty = '$stock_qty' WHERE book_id = '$book'") or die("Could not perform update on table 'stock': " .mysqli_error($conn));
    
  }
  header('location: confirmation.php');
}