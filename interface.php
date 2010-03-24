<?php
include 'scripts/config.php';

$user_id = $_GET['user_id'];
$order_id = $_GET['order_id'];
$task = $_GET['task'];
$pub_id = getpub($user_id, $order_id);


if ($task == "todo") { echo todo($pub_id); }

	function getpub($user_id, $order_id) {
		
	$query = "SELECT pub_id FROM users WHERE user_id = '.$user_id.' AND order_id = '.$order_id.'";
	$result = mysql_query($query) or die(mysql_error());
	
	
	// Print out the contents of each row into a table 
	while($row = mysql_fetch_array($result)){
			return $row['pub_id'];
		}

	}
	
	function todo($pub_id) {
		
	$query = "SELECT * FROM assets WHERE pub_id = '.$pub_id.' ORDER BY page_num, CASE WHEN asset_typ = 'Page' THEN 1 ELSE 2 END , asset_typ";
	$result = mysql_query($query) or die(mysql_error());
	
	
	// Print out the contents of each row into a table 
	while($row = mysql_fetch_array($result)){
		
		}

	}


?>