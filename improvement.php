<?php 

	include('config/global.php');
	include('function/format_date_time.php'); 
	session_start();
	
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
	
		<title><?= $MAIN_PAGE_TITLE; ?> | Improvement</title>

		<?php include('include/head.php'); ?>
	
	</head>
    
	<body class="home page tt_responsive">
		
		<div id="home" >
			
			<div id="layout">
			<!--<div id="layout" class="boxed-margin">-->
			
				<?php include('include/header.php'); ?>

				<div class="page-content">
				   
					<div class="row clearfix">
						
						<?php	
							include('function/connect_db.php'); 

							if ($_GET['imp_id']) {
								$imp_id = $_GET['imp_id'];
								
								$sql = "select * from tbl_improvement where id='".$imp_id."'";
								$res = mysqli_query($conn, $sql);
								
								while ($data = $res->fetch_array()) { ?>
									<div class="grid_12 posts">
										<h3 class="col-title">Improvement Topic : &nbsp;&nbsp;</h3><strong><?= $data['topic']; ?></strong>
										<span class="liner"></span>
									</div><!-- grid 12 posts -->
									<div class="grid_12 posts">
										<h3 class="col-title">Improvement Date : &nbsp;&nbsp;</h3><strong><?= convert_date($data['date_improvement']); ?></strong>
										<span class="liner"></span>
									</div><!-- grid 12 posts -->
									<div class="grid_12 posts">
										<h3 class="col-title">Improvement Description</h3>
										<p>
											<?= $data['improvement_description']; ?>
										</p>
										<span class="liner"></span>
									</div><!-- grid 12 posts -->									
									<div class="grid_12 posts">
										<h3 class="col-title">Team Leader : &nbsp;&nbsp;</h3><strong><?= $data['team_leader']; ?></strong>
										<span class="liner"></span>
									</div><!-- grid 12 posts -->
									<div class="grid_12 posts">
										<h3 class="col-title">Team Member : &nbsp;&nbsp;</h3><strong><?= $data['team_member']; ?></strong>
										<span class="liner"></span>
									</div><!-- grid 12 posts -->
									<div class="grid_12 posts">
										<h3 class="col-title">Department : &nbsp;&nbsp;</h3><strong><?= $data['department']; ?></strong>
										<span class="liner"></span>
									</div><!-- grid 12 posts -->
								<?php }
							}	
						?>
					
					</div><!-- end row -->    
				
				</div><!-- end page-content -->
			
				<?php include('include/footer.php'); ?>
			
			</div><!-- end layout -->
		
		</div><!-- end frame -->

		<div id="toTop"><i class="icon-angle-up"></i></div><!-- Back to top -->
					
		<?php include('include/javascript.php'); ?>			
		<?php include('include/script_jstree.php'); ?>
		
	</body>
	
</html>