<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM seatersdetails WHERE `seaterid` = '$_REQUEST[seaterid]'") or die(mysql_error());
	header("location:sitter.php");
?>