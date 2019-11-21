<?php
	
	$servername		=	"192.168.0.4";
	$username		=	"root";
	$password		=	"aa2ee986e23dd4bd5da220d77e5b4ade";
	$dbname			=	"db_dwakms";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
	
	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	
?>