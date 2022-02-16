<html lang="en">
	<head>
		<meta charset ="utf-8"/>
		<meta name = "viewport" content = "width=device-width, initial-scale = 1.0"/>
		<meta name = "description" content = "About the site"/>
		<meta name = "author" content = "Author name"/>
		<title> THE TITLE </title>
		
		<!-- coreCSS -->
		<link href = "css/bootstrap.min.css" rel = "stylesheet"/>
		<link href = "css/font-awesome.min.css" rel = "stylesheet"/>
		<link href = "css/animate.min.css" rel = "stylesheet"/>
		<link href = "css/main.css" rel = "stylesheet"/>
	</head>
	
	<body>
	
	<section id = "header">
		<div class = "row">
			<div class = "col-md-2" style = "font-size: 30px;color:#F2674A;">RIDE SHARE</div>
			<div class = "col-md-10" style = "text-align: right">
				<a href = "home.php">Home </a>
				<a href = "register.php" style = "margin-left: 20px;"> Sign Up </a>
				<a href = "show_riders.php" style = "margin-left: 20px;"> Rider Info </a>
				<a href = "aboutus.php" style = "margin-left: 20px;"> About Us </a>
			</div>	
		</div>	
	</section>

	<section id = "section1">
		<div class = "title"> ALL Riders List </div>
		<div style = "margin-left:10%;margin-right:10%;margin-top:50px;margin-bottom:50px;text-align:center;background:#4d0000;">
			<div class="row" style = "padding:5px;">
				<div class="col-md-3"> Rider ID </div>
				<div class="col-md-3"> Rider Name </div>
				<div class="col-md-3"> Rating </div>
				<div class="col-md-3"> Rides Completed </div>
			</div>	
			
			
			<?php
			require_once("DBconnect.php");
			$sql = "SELECT * FROM riders";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) != 0){
				
				while($row = mysqli_fetch_array($result)){
					
			?>		
			<div class="row" style = "padding:5px;">
				<div class="col-md-3"> <?php echo $row[0]; ?> </div>
				<div class="col-md-3"> <?php echo $row[1]; ?> </div>
				<div class="col-md-3"> <?php echo $row[2]; ?> </div>
				<div class="col-md-3"> <?php echo $row[3]; ?> </div>
			</div>	
			
			<?php
				}
			}
			?>
		</div>	
		
		<form action = "add_rider.php" class = "form_design" method = "post">
			<input type = "submit" value = "Add a Rider">
		</form>
	</section>


	<section id = "footer">
	
	</section>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.min.js"></script>
	<script src = "js/jquery.isotope.min.js"></script>
	<script src = "js/wow.min.js"></script>
	</body>
<html>