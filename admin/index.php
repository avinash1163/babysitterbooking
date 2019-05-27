<!DOCTYPE html>
<?php require_once "connect.php"?>
<html lang = "en">
	<head>
		<title>Babysitter</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		
		<link rel = "stylesheet" type = "text/css" href = "../css/form.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand">Trusted sitter.com</a>
			</div>
		</div>
	</nav>
	<div class = "container">
		
			
				<div class="header">
	<h2>Log-in</h2>
					<h4>Administrator</h4>
				
					<form method = "POST">
						<div class = "input-group">
							<label>Username</label>
							<input type = "text" name = "username"  required = "required" />
						</div>
						<div class = "input-group">
							<label>Password</label>
							<input type = "password" name = "password"  required = "required" />
						</div>
						<br />
						<div class = "input-group">
							<button name = "login"  class="btn"> Login</i></button>
						</div>
						
					</form>
					<?php require_once 'login.php'?>
				</div>
			</div>
		
	
</body>

</html>