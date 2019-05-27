<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Book a sitter</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/book.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		
	</head>
<body>
    <!-- <div class="name">
     <h1> Trusted Sitter.com</h1>
      </div>-->
      <nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Trusted Sitter.com</a>
			</div>
			
					<ul style="float:right">
						<li><a href="admin/logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
					</ul>
				
		</div>
	</nav>
	<div class = "container-fluid">	
		<ul class = "nav nav-pills">
			<li class = "active"><a href = "home.php">Home</a></li>
			<li><a href = "book.php">Book Your Seater</a></li>
					
		</ul>	
	</div>

	<div style = "margin-left:0;" class = "container">
		<strong><h3 style= "margin-bottom:10px;">Apply for sitter</h3></strong>
				<div class = "panel">
				<?php
					require_once 'connect.php';
					$query = $conn->query("SELECT * FROM seatersdetails") or die(mysql_error());
					while($fetch = $query->fetch_array()){
				?>
				<div class = "well" style = "height:350px; width:100%;">
				<div style = "float:left;">
			          <img src = "photo/<?php echo $fetch['photo']?>" height = "250" width = "300"/>
						</div>
						<div style = "float:left; margin-left:10px;">
							<h3><?php echo $fetch['Name']?></h3>
							<h4 style = "color:black;"><?php echo $fetch['description']?></h4>
							<h4 style = "color:black;"><?php echo "Charge:- ".$fetch['charge'].""?></h4>
							<h4 style = "color:indigo;"><?php echo "Experience:-  ".$fetch['experience'].""?></h4>
							<h4 style = "color:indigo;"><?php echo "email:- ".$fetch['email'].""?></h4>
							<h4 style = "color:indigo;"><?php echo "Address:-  ".$fetch['Address'].""?></h4>
							<br /><br /><br /><br /><br /><br />
							</div>			
		<a  href = "reservesitter.php?seaterid=<?php echo $fetch['seaterid']?>" class = "btn-info"> Request a Booking</a>
			
				</div>
				<?php
					}
				?>
			</div>
		</div>
	<br />
	<br />
	
</body>

</html>