<?php
session_start();


$username = "";
$email    = "";
$Address="";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', 'avi9584', 'seaters');


if (isset($_POST['register'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $Address = mysqli_real_escape_string($db, $_POST['Address']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

 
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, Address, email, password) 
  			  VALUES('$username','$Address', '$email', '$password')";
  	$results=mysqli_query($db, $query);
  	//$_SESSION['username'] = $username;
  
   echo "<script>alert('Data successfully saved, You may now login!')</script>";       
echo "<script>window.open('login.php','_self')</script>";

$_SESSION['username']=$username;



    
  
       
    
    }

}
// LOGIN USER

if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password_1']);

  if (empty($username)) {
    array_push($errors, "Username is required");    
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if(mysqli_num_rows($results))
    {
   echo "<script>alert('You're successfully login!')</script>";
       
 echo "<script>window.open('home.php','_self')</script>";
       
$_SESSION['username']=$username;


    }
    else
    {
        echo "<script>alert('Username or password is incorrect!')</script>";
		  echo "<script>window.open('index.html','_self')</script>";
		
		 exit();
		
    }
}
  }


?>