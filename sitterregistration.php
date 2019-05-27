<?php include('sitterserver.php') ?>
<!Doctype html>
<html>
<head>
<title> Registration </title>
<link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<Body>
<div class="header">
	<h2>Register</h2>
	<form method="post" action="sitterregistration.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>E-mail</label>
			<input type="text" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="Address" value="<?php echo $Address; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm Passwords</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
	Already a member?<a href="sitterslogin.php">log-in</a></p>
</form>
</Body>
</html>
