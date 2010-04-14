<?php
include 'scripts/dbconnect.php';
$y = "1";
$n = "0";
  	$sql = mysql_query("SELECT * FROM completed WHERE user_id = '".$user_id."' AND asset_id = '".$id."' AND order_id = '".$order_id."'");
		$mysql_num = mysql_num_rows($sql);
		if ($mysql_num >= 1) { mysql_query("UPDATE completed SET data = '".$txtd."' WHERE user_id = '".$user_id."' AND asset_id = '".$id."' AND order_id = '".$order_id."'"); echo $y; }
		else { mysql_query("INSERT INTO completed (order_id, user_id, asset_id, data) VALUES ('".$order_id."', '".$user_id."', '".$id."', '".$txtd."')"); echo $y; } 
?>