<?php 

	include('config/global.php');
	include('function/connect_db.php');
	
	session_start();

	if (isset($_SESSION['user_session'])!="") {
		header("Location: index.php");
	}

?>

<!DOCTYPE html>

<!--[if IE 7 ]><html class="ie7" lang="en-US"><![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="en-US"><![endif]-->
<!--[if IE 9 ]><html class="ie9" lang="en-US"><![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->

<html lang="en-US"><!--<![endif]-->
	
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">	
		<!-- Basic Page Needs -->
		<meta charset="UTF-8">
		
		<!-- Favicons -->
		<link href="images/favicon.ico" rel="shortcut icon">
	
		<title><?= $MAIN_PAGE_TITLE; ?> | Log In</title>

		<link rel="stylesheet" type="text/css" href="lib/bootstrap-3.3.7-dist/css/bootstrap.min.css" media="screen">
		<link rel="stylesheet" type="text/css" href="lib/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" media="screen"> 
		
		<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
		<script type="text/javascript" src="js/validation.min.js"></script>
		<script type="text/javascript" src="js/script-login.js"></script>	
	</head>
	
	<body>
	
		<div class="container">    
			<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
				<div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title"><strong>DWA - KNOWLEDGE MANAGEMENT SYSTEM - Sign In</strong></div>
                    </div>  

					<div align="center">
						<br />
						<image src="images/km1.jpg" height="180" width="180"></image>
					</div>
					
                    <div style="padding-top:30px" class="panel-body">						
                        <form class="form-signin" method="post" id="login-form">          
							<div id="error">
								<!-- error will be shown here ! -->
							</div>
        
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Username" name="username" id="user_name" />
							</div>
        
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" name="password" id="password" />
							</div>
       
							<hr />
        
							<div class="form-group">
								<button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
									<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
								</button> 
							</div>        
						</form>     
					</div>                     
				</div>  
			</div>
		</div>    
	
	</body>
</html>