<?php
include 'config.php';
include 'dbconnect.php';

// Adjust the file name
$ext = substr(strrchr($_FILES['userfile']['name'], "."), 1);
$filename = $pub_id . "_P" . $page_num . "_" . $asset_typ . "_" . $asset_num . "." . $ext;

// Direct the renamed file.
$uploaddir = $basedir.'userfiles/'.$user_id.'/'.$order_id.'/';
$uploadfile = $uploaddir . basename($filename);
 


 
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
  	echo "success";
	
  	$sql = mysql_query("SELECT * FROM completed WHERE user_id = '".$user_id."' AND asset_id = '".$id."' AND order_id = '".$order_id."'") or die ("query 1: " . mysql_error());
		$mysql_num = mysql_num_rows($sql);
		
		if ($mysql_num >= 1)
			{
				mysql_query("UPDATE completed SET data = '".$uploadfile."' WHERE user_id = '".$user_id."' AND asset_id = '".$id."' AND order_id = '".$order_id."'");
			}
		else
			{
				mysql_query("INSERT INTO completed (order_id, user_id, asset_id, data) VALUES ('".$order_id."', '".$user_id."', '".$id."', '".$uploadfile."')");
			} 

} else { echo "error"; }

?>