<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_seater'])){
		$experience = $_POST['experience'];
		$charge = $_POST['charge'];
		$email = $_POST['email'];
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("UPDATE `seatersdetails` SET  `experience` = '$experience', `charge` = '$charge', `email` = '$email', `photo` = '$photo_name' WHERE `seaterid` = '$_REQUEST[seaterid]'") or die(mysqli_error());
		header("location:sitter.php");
	}
?>