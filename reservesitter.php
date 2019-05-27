<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Babysitter</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/book.css" />
		
	</head>
<body>
	  <div class="name">
     <h1> Trusted Sitter.com</h1>
      </div>
	<div style = "margin-left:0;" class="container">
		
				<strong><h3>REQUEST A BOOKING</h3></strong>
				
				<div class = "panel">
			
				<?php 
				
					require_once 'connect.php';
					$query = $conn->query("SELECT * FROM `seatersdetails` WHERE `seaterid` = '$_REQUEST[seaterid]'") or die(mysql_error());
					$fetch = $query->fetch_array();
				?>
				
			<div class = "well" style = "height:350px; width:100%;">
				<div style = "float:left;">
			          <img src = "photo/<?php echo $fetch['photo']?>" height = "250" width = "300"/>
						</div>
						<div style = "float:left; margin-left:10px;">
							<h3><?php echo $fetch['Name']?></h3>
							<h4 style = "color:black;"><?php echo $fetch['description']?></h4>
							<h4 style = "color:black;"><?php echo "Charge:- ".$fetch['charge'].""?></h4>
							</br></br></br></br>
							</div>	
						</div>
				<br style = "clear:both;" />
				<div class = "content">
					<form method = "POST" enctype = "multipart/form-data">
						<div class = "form-group">
							<label>Firstname</label>
							<input type = "text"  name = "firstname" required = "required" />
						</div>
						
				         <div class = "form-group">
							<label>Lastname</label>
							<input type = "text"  name = "lastname" required = "required" />
						</div>
						<div class = "form-group">
							<label>kid date of birth</label>
							<input type = "date" class = "form-control" name = "dob" required = "required" />
						</div> 
						<div class="form-group">
						
						<div class = "form-group">
							<label>Address</label>
							<input type = "text" name = "address" required = "required" />
						</div>
						<div class = "form-group">
							<label>Contact No</label>
							<input type = "text"  name = "contactno" required = "required" />
						</div>
						<div class = "form-group">
							<label>email</label>
							<input type = "text"  name = "email" required = "required" />
						</div>
							
						<div class = "form-group">
							<label>Booking date</label>
							<input type = "date" class = "form-control" name = "checkin" required = "required" />
						</div> </br>
						<div class="form-group">
			<button type="submit" name="confirm" class="btn">Submit</button>
		</div>

						<br />
						
					</form>
				
	</div>
	<div class = "col-md-4"></div>
				<?php require_once 'add_reserve.php'?>
			</div>
		</div>
	</div>
	
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" >
		<label>&copy; Trusted sitter.com </label>
	</div>
</body>

</html>