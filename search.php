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
	
		<title><?= $MAIN_PAGE_TITLE; ?> | Search</title>

		<?php include('include/head.php'); ?>
	
	</head>
    
	<body class="home page tt_responsive">
		
		<div id="home" >
			
			<!--<div id="layout">-->
			<div id="layout" class="boxed-margin">
			
				<?php include('include/header.php'); ?>

				<div class="page-content">
				   
					<div class="row clearfix">
						
						<!-- Tampilkan seluruh article -->
						<div class="grid_12 sidebar omega">	
														
							<?php
							
								if (isset($_POST['txtsearch']) && $_POST['txtsearch'] <> "") {
									$txtsearch = $_POST['txtsearch'];
									$btnsearch = $_POST['btnsearch'];
									$search = $txtsearch;
								} else {
									$search = $_GET['search']; // Nilai dikirim saat klik button paging
								}
								
							?>

							<div id="recent-posts-4" class="widget widget_recent_entries">	
								<h3 class="col-title">Search : <?= $search; ?></i></h3>
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
									$res = mysqli_query($conn, "select * from qview_search 
																where (`title` like '%".$search."%' 
																	or `text1` like '%".$search."%'
																	or `category_text` like '%".$search."%'
																	or `team_leader` like '%".$search."%'
																	or `team_member` like '%".$search."%'
																	or `department` like '%".$search."%'
																	or `text2` like '%".$search."%')
																order by groups asc,rec_datetime desc
																limit $posisi, $batas");
																   
									$num_rows = mysqli_num_rows($res);
									
									if ($num_rows > 0) {
										echo "<ul>";
											while ($data = $res->fetch_array()) {	
												echo '<li>';
												if ($data['groups'] == 'ARTICLE') {
													echo '<a href="article.php?art_id='.$data['id'].'">['.$data['groups'].'] '.$data['title'].'</a>';
													echo '	<span class="post-date">'.$data['rec_user'].', '.convert_date($data['rec_datetime']).'</span>';
												} elseif ($data['groups'] == 'PROBLEM') {
													echo '<a href="problem.php?prb_id='.$data['id'].'">['.$data['groups'].'] '.$data['title'].'</a>';
													echo '	<span class="post-date">'.$data['team_leader'].', '.convert_date($data['date_display']).'</span>';
												} elseif ($data['groups'] == 'IMPROVEMENT') {
													echo '<a href="improvement.php?imp_id='.$data['id'].'">['.$data['groups'].'] '.$data['title'].'</a>';
													echo '	<span class="post-date">'.$data['team_leader'].', '.convert_date($data['date_display']).'</span>';
												}
												echo '</li>';
											}
										echo "</ul>";
									} else {
										echo "Tidak ada data yang cocok dengan kriteria pencarian";
									}
									
									// Langkah 3 : Hitung Total data dan halaman serta link 1,2,3..
									$paging = mysqli_query($conn, "select * from qview_search 
																   where (`title` like '%".$search."%' 
																	  or `text1` like '%".$search."%'
																	  or `category_text` like '%".$search."%'
																	  or `team_leader` like '%".$search."%'
																	  or `team_member` like '%".$search."%'
																	  or `department` like '%".$search."%'
																	  or `text2` like '%".$search."%')");
									$jmldata = mysqli_num_rows($paging);
									$jmlhalaman = ceil($jmldata / $batas);
									
									echo "<div class='pagination-tt clearfix'>";
									echo "<ul>";
									
									// Navigasi ke sebelumnya
									/*if ($halaman > 1) {
										$link = $halaman - 1;
										echo "<li><a href=\"search.php?search={$search}&halaman={$link}\">&lt&lt; Prev</a></li>";
									} else {
										echo "<li><span>&lt&lt; Prev</span></li>";
									}*/
									
									// Navigasi nomor
									for ($i=1;$i<=$jmlhalaman;$i++){
										if ($i != $halaman) {
											echo "<li><a href=\"search.php?search={$search}&halaman=$i\">$i</a></li>";
										} else {
											echo "<li><span>$i</span></li>";
										}
									}
									
									// Navigasi ke selanjutnya
									/*if ($halaman < $jmlhalaman) {
										$link = $halaman + 1;
										echo "<li><a href=\"search.php?search={$search}&halaman={$link}\">Next &gt&gt;</a></li>";
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