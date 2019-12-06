<?php
include('config.php');
session_start();

$fname = $_POST['fname'];
$fname = $conn->real_escape_string($fname);
$mname = $_POST['mname'];
$mname = $conn->real_escape_string($mname);
$lname = $_POST['lname'];
$lname = $conn->real_escape_string($lname);
$address = $_POST['address'];
$address = $conn->real_escape_string($address);
$country = $_POST['country'];
$country = $conn->real_escape_string($country);
$zip = $_POST['zip'];
$zip = $conn->real_escape_string($zip);
$mobile = $_POST['mobile'];
$mobile = $conn->real_escape_string($mobile);
$telephone = $_POST['telephone'];
$telephone = $conn->real_escape_string($telephone);
$email = $_POST['email'];
$email = $conn->real_escape_string($email);
$password = $_POST['password'];


$target_dir = "photo/";
$target_file = $target_dir . basename($_FILES["fileimg"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileimg"]["tmp_name"]);
    if($check !== false) {
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
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileimg"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileimg"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
$img = basename($_FILES["fileimg"]["name"]);

$query_insert = "INSERT INTO customer (f_name, mi, l_name, address, country, zip, mobile, telephone, email, password, img) VALUES ('$fname', '$mname', '$lname', '$address', '$country', '$zip', '$mobile', '$telephone', '$email', '$password', '$img')";
$result_insert = mysqli_query($conn, $query_insert) or die("Could not perform insert on table 'customer': " .mysqli_error($conn));

$query_login = "SELECT * FROM customer WHERE email = '$email' AND password ='$password';";
$result15 = $conn->query($query_login) or die("Could not select on table customer: " .mysqli_error($conn));

if ($result15->num_rows == 1) {
	$row_session = mysqli_fetch_array($result15);
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
}