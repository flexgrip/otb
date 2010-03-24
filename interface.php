<?php
error_reporting(E_ALL);
include 'scripts/config.php';
include 'scripts/dbconnect.php';

$user = $_GET['user_id'];
$order = $_GET['order_id'];
$task = $_GET['task'];
$pub_id = getpub($user, $order);


if ($task == "todo") { echo todo($pub_id); }

	function getpub($user_id, $order_id) {
		
	$query = "SELECT pub_id FROM users WHERE user_id = '".$user_id."' AND order_id = '".$order_id."'";
	$result = mysql_query($query) or die(mysql_error());
	
	
	// Print out the contents of each row into a table 
	while($row = mysql_fetch_array($result)){
			return $row['pub_id'];
		}

	}
	
	function todo($pub_id) {
		
	$query = "SELECT * FROM assets WHERE pub_id = '".$pub_id."' ORDER BY page_num, CASE WHEN asset_typ = 'Page' THEN 1 ELSE 2 END , asset_typ";
	$result = mysql_query($query) or die(mysql_error());
	
	$num = 0;
	// Print out the contents of each row into a table 
	while($row = mysql_fetch_array($result)){
		if ($num==0 && $row['asset_typ'] == "Page") { echo "<span class=\"todo-page-title\">".$row['asset_typ']." ".$row['page_num']."</span>\n<ul id=\"todo\" class=\"todo\">"; }
	    if ($num>=1 && $row['asset_typ'] == "Page") { echo "</ul>\n<span class=\"todo-page-title\">".$row['asset_typ']." ".$row['page_num']."</span>\n<ul id=\"todo\" class=\"todo\">"; }
		if ($num>=1 && $row['asset_typ'] != "Page") { if ($row['asset_num'] == 0) { $asset_num = ""; } else { $asset_num = $row['asset_num']; } 
		echo "<li><a href=\"#\">".$row['asset_typ']." ".$asset_num."</a></li>"; }
		$num++;
		
		
		}

	}


?>