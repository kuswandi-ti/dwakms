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
			
			<!--<div id="layout">-->
			<div id="layout" class="boxed-margin">
			
				<?php include('include/header.php'); ?>
				<?php include('function/breadcrumb.php'); ?>
				<div class="breadcrumb-place breadcrumb-place-image1 centerstyle centerbread tac">               
					<div class="row clearfix">	  
						<h1 class="page-title"><?php printbreadcrumb($_GET['cat_id']); ?></h1>						
					</div><!-- row -->
				</div><!-- breadcrumb -->

				<div class="page-content">
				   
					<div class="row clearfix">
						
						<div class="grid_4 sidebar">
						
							<div id="categories-3" class="widget widget_categories">
								<h3 class="col-title">Product Group</h3>
								<span class="liner"></span>	
								
								<div id="jstree-categories"></div>
							
							</div>
						
						</div><!-- grid 4 Sidebar -->
						
						<!-- Tampilkan seluruh article -->
						<div class="grid_8 sidebar omega">		
							
							<?php
								$cat_id = $_GET['cat_id'];
								$cat_name = $_GET['cat_name'];
							?>

							<div id="recent-posts-4" class="widget widget_recent_entries">	
								<h3 class="col-title"><i><?= $cat_name; ?></i></h3>
								<span class="liner"></span>	
								
								<?php									
								
									include('function/connect_db.php');
									include('config/global.php');
									
									// Langkah 1. Tentukan batas, cek halaman dan posisi data.
									$batas = $PER_PAGE;
									$halaman = (int)(!isset($_GET["halaman"]) ? 1 : $_GET["halaman"]);
									if (empty($halaman)) {
										$posisi = 0;
										$halaman = 1;
									} else {
										$posisi = ($halaman - 1) * $batas;
									}									
									
									// Langkah 2. Sesuaikan Query dengan posisi dan batas
									$res = mysqli_query($conn, "select * from qview_category_article 
									                            where category_id='".$cat_id."'
																order by rec_datetime desc
																limit $posisi, $batas");
																   
									$num_rows = mysqli_num_rows($res);
									
									if ($num_rows > 0) {
										echo "<ul>";
											while ($data = $res->fetch_array()) {	
												echo '<li>';
												echo '	<a href="article.php?art_id='.$data['id'].'">'.$data['title'].'</a>';
												echo '	<span class="post-date">'.$data['rec_user'].', '.$data['rec_datetime'].'</span>';
												echo '</li>';
											}
										echo "</ul>";
									} else {
										echo "Tidak Ada Data";
									}
									
									// Langkah 3 : Hitung Total data dan halaman serta link 1,2,3..
									$paging = mysqli_query($conn, "select * from qview_category_article 
									                               where category_id='".$cat_id."'
																   order by rec_datetime desc");
									$jmldata = mysqli_num_rows($paging);
									$jmlhalaman = ceil($jmldata / $batas);
									
									echo "<div class='pagination-tt clearfix'>";
									echo "<ul>";
									
									// Navigasi ke sebelumnya
									/*if ($halaman > 1) {
										$link = $halaman - 1;
										echo "<li><a href=\"list_article.php?cat_id={$cat_id}&cat_name={$cat_name}&halaman={$link}\">&lt&lt; Prev</a></li>";
									} else {
										echo "<li><span>&lt&lt; Prev</span></li>";
									}*/
									
									// Navigasi nomor
									for ($i=1;$i<=$jmlhalaman;$i++){
										if ($i != $halaman) {
											echo "<li><a href=\"list_article.php?cat_id={$cat_id}&cat_name={$cat_name}&halaman=$i\">$i</a></li>";
										} else {
											echo "<li><span>$i</span></li>";
										}
									}
									
									// Navigasi ke selanjutnya
									/*if ($halaman < $jmlhalaman) {
										$link = $halaman + 1;
										echo "<li><a href=\"list_article.php?cat_id={$cat_id}&cat_name={$cat_name}&halaman={$link}\">Next &gt&gt;</a></li>";
									} else {
										echo "<li><span>Next &gt&gt;</span></li>";
									}*/
									echo "</ul>";
									echo "</div>";
								
								?>
								
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