
<?php
	require_once 'connect.php';
	
	$conn->query("UPDATE `transaction` SET  `status` = 'Confirm' WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
	header("location:checkin.php");
?>