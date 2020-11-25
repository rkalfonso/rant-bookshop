<?php
include('config.php');

if (isset($_POST['submitted'])) {
  $name = $_POST['name'];
  $author = $_POST['author'];
  $publisher = $_POST['publisher'];
  $price = $_POST['price'];
  $category = $_POST['category'];
  $featured = $_POST['featured'];
  $description = $_POST['description'];
  $description = $conn->real_escape_string($description);
  //$name = $_POST['name'];

  $target_dir = "../img/";
  $target_file = $target_dir . basename($_FILES["fileimg"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  // Check if image file is a actual image or fake image
  if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileimg"]["tmp_name"]);
    if ($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }
  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }
  // Check file size
  /* if ($_FILES["fileToUpload"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
  } */

  // Allow certain file formats
  if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
  ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

    // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileimg"]["tmp_name"], $target_file)) {
      echo "The file " . basename($_FILES["fileimg"]["name"]) . " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
  $img = basename($_FILES["fileimg"]["name"]);

  $query_insert = "INSERT INTO book (name, author, description, publisher, price, category, img, featured) VALUES ('$name', '$author', '$description', '$publisher', '$price', '$category', '$img', '$featured')";
  $result_insert = mysqli_query($conn, $query_insert) or die("Could not perform insert on table 'book': " . mysqli_error($conn));
  $query_book = $conn->query("SELECT * FROM book where name = '$name'") or die("Could not perform select on table 'stock': " . mysqli_error($conn));
  $roww = mysqli_fetch_array($query_book);
  $new_id = $roww['book_id'];
  $query_stock = $conn->query("INSERT INTO stock (book_id, qty) VALUES ('$new_id', '20')") or die("Could not perform select on table 'stock': " . mysqli_error($conn));
  //$result15 = $conn->query($query_login) or die("Could not select on table customer: " .mysqli_error($conn));
  echo "<script> alert('A new book has been uploaded!'); </script>";
  header('location:home.php');
}