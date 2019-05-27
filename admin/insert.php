<?php
$target = "photo/";


$Name = "";
$description = "";
$charge = "";
$experience = "";
$Address    = "";
$email= "";

$errors = array(); 

$db = mysqli_connect('localhost', 'root', 'avi9584', 'seaters');


if (isset($_POST['confirm'])) {
  $Name = mysqli_real_escape_string($db, $_POST['Name']);
  $target = $target . basename( $_FILES['image']['name']); 
  $pic=($_FILES['image']['name']); 
   $description = mysqli_real_escape_string($db, $_POST['description']);
    $charge = mysqli_real_escape_string($db, $_POST['charge']);
    $experience = mysqli_real_escape_string($db, $_POST['experience']);
  $Address = mysqli_real_escape_string($db, $_POST['Address']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  


                
     $query = "INSERT INTO seatersdetails (Name, photo, description, charge, experience, Address, email) 
          VALUES('$Name', '$pic', '$description', '$charge', '$experience', '$Address',  '$email')";
    mysqli_query($db, $query);
  move_uploaded_file($_FILES['image']['tmp_name'],$target);
  header("Location: sitter.php");
}


?>
  