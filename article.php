<?php 

	include('config/global.php'); 
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
	
		<title><?= $MAIN_PAGE_TITLE; ?> | Article</title>

		<?php include('include/head.php'); ?>
	
	</head>
    
	<body class="home page tt_responsive">
		
		<div id="home" >
			
			<div id="layout">
			<!--<div id="layout" class="boxed-margin">-->
			
				<?php include('include/header.php'); ?>

				<div class="page-content">
				   
					<div class="row clearfix">
						
						<div class="grid_4 sidebar">
						
							<div id="categories-3" class="widget widget_categories">
								<h3 class="col-title">Product Group</h3>
								<span class="liner"></span>	
								
								<div id="jstree-categories"></div>
							
							</div>
						
						</div><!-- grid 4 Sidebar -->						
						
						<?php	
							include('function/connect_db.php'); 

							if ($_GET['art_id']) {
								$art_id = $_GET['art_id'];
								
								$sql = "select * from tbl_article where id='".$art_id."'";
								$res = mysqli_query($conn, $sql);
								
								while ($data = $res->fetch_array()) { ?>
									<div class="grid_8 posts">
										<h3 class="col-title"><?= $data['title']; ?></h3>										
										<span class="liner"></span>
										<p>
											<?= $data['text']; ?>
										</p>										
									</div><!-- grid 8 posts -->
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