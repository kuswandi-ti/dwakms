<?php

	session_start();
	include('connect_db.php');

	if (isset($_POST['btn-login'])) {
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
  
		//$password = md5($user_password);  
		
		$sql = "select * from tbl_user where username='".$username."' and password='".$password."'";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($res, MYSQLI_ASSOC);
		$numrows = mysqli_num_rows($res);
		
		if ($numrows >= 1) {			
			$_SESSION['login_user'] = $row['username'];	
			$_SESSION['group_user'] = $row['group'];
			echo 1;
			exit();
		} else {
			echo "Username & password tidak cocok";
		}
		
	}

?>