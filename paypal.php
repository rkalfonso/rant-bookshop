<?php
include('config.php');
if (isset($_POST['pay_now'])) {
	$cid = $_SESSION['id'];
	$total = $_POST['total'];
	//echo $total;
	include("random-code.php");
	$t_id = $r_id;
	$date = date("M d, Y");
	$que = mysqli_query($conn, "INSERT INTO `transaction` (transaction_id, customer_id, amount, order_stat, order_date) VALUES ('$t_id', '$cid', '$total', 'ON HOLD', '$date')") or die("Cannot perform insert on table 'transaction': " . mysqli_error($conn));

	$_SESSION['pid'] = $_POST['pid'];
	$oqty = $_POST['qty'];

	$i = 0;
	foreach ($_SESSION['pid'] as &$pro_id) {
		mysqli_query($conn, "INSERT INTO `transaction_detail` (`product_id`, `order_qty`, `transaction_id`) VALUES ('" . ($pro_id) . "', '" . ($oqty[$i]) . "', '" . ($t_id) . "')") or die("Cannot perform insert on table 'transaction': " . mysqli_error($conn));
		$i++;
	}
	echo "<script>window.location='summary.php?tid=" . $t_id . "'</script>";
}