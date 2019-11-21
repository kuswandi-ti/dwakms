<?php

	include('config/global.php'); 
	include('function/connect_db.php'); 
	include('function/format_date_time.php');
	
	session_start();

	if(!isset($_SESSION['login_user'])) {
		header("Location: login.php");
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
	
		<title><?= $MAIN_PAGE_TITLE; ?> | Home</title>

		<?php include('include/head.php'); ?>
	
	</head>
    
	<body class="home page tt_responsive">
		
		<div id="home" >
			
			<!--<div id="layout">-->
			<div id="layout" class="boxed-margin">
			
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
						
						<!-- Tampilkan 10 post terakhir -->
						<div class="grid_8 sidebar omega">							

							<div id="recent-posts-4" class="widget widget_recent_entries">	
								<h3 class="col-title">Recent Article</h3>
								<span class="liner"></span>	
							
								<ul>		
									<?php 												
										$sql = "select * from qview_category_article order by rec_datetime desc limit $RECENT_POST";
										$res = mysqli_query($conn, $sql);
										
										while ($data = $res->fetch_array()) {
											echo '<li>';
											echo '	<a href="article.php?art_id='.$data['id'].'">'.$data['title'].'</a>';
											echo '	<span class="post-date">'.$data['rec_user'].', '.convert_date($data['rec_datetime']).'</span>';
											echo '</li>';
										}		
									?>
								</ul>
							
							</div>	              

						</div><!-- grid 3 Sidebar -->
					
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