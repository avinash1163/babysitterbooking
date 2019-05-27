

  <?php
  require_once 'connect.php';
  if(ISSET($_POST['confirm'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $contactno = $_POST['contactno'];
    $email = $_POST['email'];
    $checkin = $_POST['checkin'];

    $conn->query("INSERT INTO `parent` (firstname, lastname, dob, Address, contactno, email) VALUES('$firstname',  '$lastname', '$dob', '$address', '$contactno', '$email')") or die(mysqli_error());
    $query = $conn->query("SELECT * FROM `parent` WHERE `firstname` = '$firstname' && `lastname` = '$lastname' && `contactno` = '$contactno'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $query2 = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkin' && `seaterid` = '$_REQUEST[seaterid]' && `status` = 'Pending'") or die(mysqli_error());
    $row = $query2->num_rows;
    if($checkin < date("Y-m-d", strtotime('+8 HOURS'))){  
        echo "<script>alert('Must be present date')</script>";
      }else{
        if($row > 0){
          echo "<div class = 'col-md-4'>
                <label style = 'color:#ff0000;'>Not Available Date</label><br />";
              $q_date = $conn->query("SELECT * FROM `transaction` WHERE `status` = 'Pending'") or die(mysqli_error());
              while($f_date = $q_date->fetch_array()){
                echo "<ul>
                    <li>  
                      <label class = 'alert-danger'>".date("M d, Y", strtotime($f_date['checkin']."+8HOURS"))."</label> 
                    </li>
                  </ul>";
              }
            "</div>";
        }else{  
            if($parentid = $fetch['parentid']){
              $seaterid = $_REQUEST['seaterid'];
              $conn->query("INSERT INTO `transaction`(parentid, seaterid, status, checkin) VALUES('$parentid', '$seaterid', 'Pending', '$checkin')") or die(mysqli_error());
              header("location:replyreserve.php");
            }else{
              echo "<script>alert('Error Javascript Exception!')</script>";
            }
        } 
      } 
  } 
?>