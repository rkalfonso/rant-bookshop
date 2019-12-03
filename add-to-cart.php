<?php
// $id = $_GET['id'];
include('config.php');
$status="";
if (isset($_GET['id']) && $_GET['id'] != ""){
  $id = $_GET['id'];
  $result_cart = mysqli_query($conn, "SELECT * FROM book WHERE book_id = '$id'") or die("Could not select on table 'book': " .mysqli_error($conn));
  $row_cart = mysqli_fetch_array($result_cart);
  $book_id = $row_cart['book_id'];
  $name = $row_cart['name'];
  $price = $row_cart['price'];
  $img = $row_cart['img'];

  $cartArray = array('name' => $name, 'price' => $price, 'img' => $img, 'qty' => 1 );

  if(empty($_SESSION['cart'])){
    $_SESSION['cart'] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
    echo $status;
  }else{
    $array_keys = array_keys($_SESSION['cart']);
    if(in_array ($name, $array_keys)){
    $status = "<div class='box'>Product is already added to your cart!</div>";
    echo $status;

    }else{
      $_SESSION['cart'] = array_merge($_SESSION['cart'], $cartArray);
    }
  }
}
print_r($_SESSION['cart']);







// if (isset($_GET['id'])){
//   $id = $_GET['id'];
//   echo $id . '<br>';
// }
// else{
//   $id = 1;
//   echo $id . '<br>';
// }
 
// if (isset($_GET['action'])){
//   $action = $_GET['action'];
//   echo $action . '<br>';
// }
// else{
//   $action = "empty";
//   echo $action . '<br>';
// }

// switch ($action) {

//   case "view":
//     if (isset($_SESSION['cart'][$id]))
//       $_SESSION['cart'][$id];
//     break;
//   case "add":
//     if (isset($_SESSION['cart'][$id]))
//       $_SESSION['cart'][$id]++;
//     else
//       $_SESSION['cart'][$id] = 1;
//     break;
//   case "remove":
//     if (isset($_SESSION['cart'][$id])) {
//       $_SESSION['cart'][$id]--;
//       if ($_SESSION['cart'][$id] == 0)
//         unset($_SESSION['cart'][$id]);
//     }
//     break;
//   case "empty":
//     unset($_SESSION['cart']);
//     break;
// }
// print_r($_SESSION['cart']);
// header('location: home.php');