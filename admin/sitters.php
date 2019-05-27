<?php include('insert.php') ?>
<!Doctype html>
<html>
<head>
<title> Become a sitter </title>
<link rel="stylesheet" type="text/css" href="../css/form.css" />
</head>
<Body>
	<div class="header">
	<h2>Basic details</h2>
	<form method="post" action="sitters.php" enctype="multipart/form-data">
		<?php include('../errors.php'); ?>
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="Name" >
		</div>
		<div class="des">
			<label>Bio</label>
			<input type="text" name="description" >
		</div>
		<div class="input-group">
			<label>Charge</label>
			<input type="text" name="charge" >
		</div>
		<div class="input-group">
			<label>Experience</label>
			<input type="text" name="experience" >
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="Address">
		</div>
		<div class="input-group">
			<label>E-mail</label>
			<input type="text" name="email">
		</div>
<div class="input-group">
	<br><label>Image</label>
			<br><input type="file" name="image">
		
		</div>
		<div class="input-group">
			<button type="submit" name="confirm" class="btn">Confirm</button>
		</div>
</form>
</div>
</Body>
</html>
