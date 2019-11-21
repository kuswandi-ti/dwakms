<?php
	
	/* base url */
	$http = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : '') . '://';
	$newurl = str_replace("index.php","", $_SERVER['SCRIPT_NAME']);
	$BASE_URL = "$http" . $_SERVER['SERVER_NAME'] . "" . $newurl;
			
	/* title page */
	$MAIN_PAGE_TITLE = 'DWA KNOWLEDGE MANAGEMENT SYSTEM';
	
	$FORMAT_DATE_TO_DISPLAY = 'd-M-Y';
	
	/* pagination */
	$PER_PAGE = 10;
	
	/* display */
	$RECENT_POST = 10;
	
	/* group user */
	$GROUP_ADMINISTRATOR = 'Administrator';

?>