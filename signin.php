<?php

require_once('DBconnect.php');


if(isset($_POST['fname']) && isset($_POST['pass'])){
	
	$u = $_POST['fname'];
	$p = $_POST['pass'];
	$sql = "SELECT * FROM user WHERE username = '$u' AND password  = '$p'";
	
	
	$result = mysqli_query($conn, $sql);
	
	
	if(mysqli_num_rows($result) !=0 ){
		
		//echo "LET HIM ENTER";
		header("Location: home.php");
	}
	else{
		//echo "Username or Password is invalid";
		header("Location: index.php");
	}
}




?>