<!Doctype html>
<html>
<head>
<title> Log-in </title>
<link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<Body>
	<div class="header">
	<h2> Admin Log-in</h2>
	<form method="post">
		
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
</form>
</Body>
</html>
<?php
$db=mysqli_connect("localhost","root","avi9584","seaters");
error_reporting(0);
if(isset($_POST['login']))
{
$un=$_POST['username'];
$pw=$_POST['password_1'];
if($un!="" &&$pw!="")
{  
$sql=mysqli_query($db,"SELECT password FROM admin WHERE (username='$un')");
if($row=mysqli_fetch_array($sql))
if($pw==$row['password'])
{
	//echo"welcome user";
header("Location:book.php");
}else
{
//echo "invalid attempt";	
echo"<script type='text/javascript'>alert('failed!')</script>";
}
}
}
?>