<?php

require_once('DBconnect.php');


if(isset($_POST['rider_id']) && isset($_POST['rider_name']) && isset($_POST['rating']) && isset($_POST['rides_completed'])){
	
	$u = $_POST['rider_id'];
	$p = $_POST['rider_name'];
	$c = $_POST['rating'];
	$a = $_POST['rides_completed'];
	
	
	$sql = " INSERT INTO riders VALUES('$u', '$p', '$c', '$a' )";
	
	
	$result = mysqli_query($conn, $sql);
	
	
	if(mysqli_affected_rows($conn) ){
		
		echo "Inserted Successfully";
		//header("Location: home.php");
	}
	else{
		echo "Insertion Failed";
		//header("Location: index.php");
	}
}




?>