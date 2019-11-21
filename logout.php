<?php

	session_start();
	
	unset($_SESSION['login_user']);
	unset($_SESSION['group_user']);
 
	if (session_destroy()) {
		header("Location: login.php");
	}
 
?>