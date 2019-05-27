<?php include('server.php') ?>
<!Doctype html>
<html>
<head>
<title> Log-in </title>
<link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<Body>
	<div class="header">
	<h2>Log-in</h2>
	<form method="post" action="server.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="btn">Log-in</button>
		</div>

<p>
      Not yet register?<a href="registration.php">Sign-up</a></p>
      </div>
</form>
</Body>
</html>
