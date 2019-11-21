<?php

	ini_set('error_reporting', E_STRICT); /* untuk mengatasi error di line 34 */
	
	include("connect_db.php");
	
	$sql = "select * from tbl_categories order by parent_id, id";	
	$res = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	
	//iterate on results row and create new index array of data
	while ($row = mysqli_fetch_assoc($res)) { 
		$data[] = $row;
	}
	$itemsByReference = array();

	// Build array of item references:
	foreach($data as $key => &$item) {
		$itemsByReference[$item['id']] = &$item;
		// Children array:
		$itemsByReference[$item['id']]['children'] = array();
		// Empty data class (so that json_encode adds "data: {}" ) 
		$itemsByReference[$item['id']]['data'] = new StdClass();
	}

	// Set items as children of the relevant parent item.
	foreach($data as $key => &$item)
		if($item['parent_id'] && isset($itemsByReference[$item['parent_id']]))
			$itemsByReference [$item['parent_id']]['children'][] = &$item;
			
	// Remove items that were added to parents elsewhere:
	foreach($data as $key => &$item) {
		// Added href attribut on each leaf node of jstree
		$item['a_attr'] = new StdClass;
		//if(empty($item['children'])) {      
			$item['a_attr']->href = $BASE_URL.'list_article.php?cat_id='.$item['id'].'&cat_name='.$item['name'];
		//}
			
		if ($item['parent_id'] && isset($itemsByReference[$item['parent_id']]))
			unset($data[$key]);
	}
	
	// Encode
	echo json_encode($data);

?>
