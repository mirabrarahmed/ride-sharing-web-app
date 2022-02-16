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
	<?php
/* [SEARCH FOR USERS] */
if (isset($_POST['search'])) {
  require "search.php";
}

/* [DISPLAY HTML] */ ?>
<!DOCTYPE html>
<html>
  <body>
    <!-- [SEARCH FORM] -->
    <form method="post">
      <h1>
        Please Insert Your Destination
      </h1>
      <input type="text" name="search" required/>
      <input type="submit" value="Search"/>
    </form>

    <!-- [SEARCH RESULTS] -->
    <?php
    if (isset($_POST['search'])) {
      if (count($results) > 0) {
        foreach ($results as $r) {
          printf("<div>%s - %s</div>","<div>Rider Assigned</div>", $r['name'],$r['email']);
        }
      } else {
        echo "No rider found";
      }
    }
    ?>
  </body>
</html>

	</section>


	<section id = "footer">
	
	</section>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.min.js"></script>
	<script src = "js/jquery.isotope.min.js"></script>
	<script src = "js/wow.min.js"></script>
	</body>
<html>