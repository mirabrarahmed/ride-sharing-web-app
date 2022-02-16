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
				<a href = "#">Home </a>
				<a href = "register.php" style = "margin-left: 20px;"> Sign Up </a>
				<a href = "show_riders.php" style = "margin-left: 20px;"> Rider Info </a>
				<a href = "aboutus.php" style = "margin-left: 20px;"> About Us </a>
			</div>	
		</div>	
	</section>

	<section id = "section1">
		<div class = "title"> SING IN </div>
		
		<form action = "signin.php" class = "form_design" method = "post">
			Username: <input type = "text" name = "fname"> <br/>
			Password: <input type = "password" name = "pass"> <br/> <br/>
			<input type = "submit" value = "Sign In">
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