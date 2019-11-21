<?php
	function printbreadcrumb($category_id) {
		include('function/connect_db.php');
		$sql = "select * from tbl_categories where id = '".$category_id."'";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($res, MYSQLI_ASSOC);
		if ($row['parent_id']) { // if this node has parent
			printbreadcrumb($row['parent_id']); // make recursive call to this function
		}
		echo $row['text'].' > '; // print nodes one by one
		return;
	}
?>