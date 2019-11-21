<header id="header" class="header_v6">	

	<div class="head">
		
		<div class="row clearfix">
			
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" alt="Official" /></a>
			</div><!-- end logo -->
			
			<?php
				if (isset($_SESSION['login_user'])) { ?>
					<div class="info">
						<i class="icon-user-md"></i> Welcome, <font color="red"><strong><?= $_SESSION['login_user']; ?></strong></font>
						<i class="icon-signout"></i><a href="logout.php" onclick="return confirm('Are you sure to logout?');"><strong> Logout</strong></a>
					</div><!-- end info -->
				<?php }
			?>			

		</div><!-- row -->
	
	</div><!-- head -->

	<div class="headdown my_sticky">
	
		<div class="row clearfix">
		
			<!-- Menu -->
			<nav class="main">
				
				<ul id="menu-main" class="sf-menu">
					
					<li class="menu-item"><a href="index.php">Product Group</a>
					</li>
					<li class="menu-item"><a href="list_problem.php">Problem</a></li>
					<li class="menu-item"><a href="list_improvement.php">Improvement</a></li>
					</li>
				</ul>
			</nav><!-- /Menu -->

			<div class="search">
				
				<form action="search.php" id="searchform" method="POST" role="search">
					<input id="search" name="txtsearch" type="text" onfocus="if (this.value=='Start Searching...') this.value = '';" onblur="if (this.value=='') this.value = 'Start Searching...';" value="Start Searching..." placeholder="Start Searching ...">
					<button type="submit" name="btnsearch"><i class="icon-search"></i></button>
				</form>
			
			</div><!-- search -->

		</div><!-- row -->
	
	</div><!-- headdown -->

</header><!-- end header -->