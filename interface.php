<?php
error_reporting(E_ALL);


###################### Functions that DO NOT require MySQL ########################
#  For things like using GD to export to /dev/null we need to load these first    #
#  because if not, there might be whitespace before the content string.           #
#_________________________________________________________________________________#

if ($task == "loadPreview") { echo loadPreview($pub_id, $page_num); }

###################################################################################





##################### Includes required for MySQL functions #######################
#                                                                                 #
#                                                                                 #
#                                                                                 #
include 'scripts/config.php';
require 'scripts/dbconnect.php';
###################################################################################





################### Functions that DO require MySQL ###############################
#                                                                                 #
#                                                                                 #
#                                                                                 #
if ($task == "todo") { $pub_id = getpub($user_id, $order_id); echo todo($pub_id); }
###################################################################################



############## OTB Function Library of Functions that have a Function #############
#                                                                                 #
#                                                                                 #
#                                                                                 #
#                                                                                 #
#                                                                                 #
#                                                                                 #
#                                                                                 #
#                                                                                 #
#                                                                                 #
#                                                                                 #
#                                                                                 #
#                                                                                 #
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
		if ($num==0 && $row['asset_typ'] == "Page") { echo "<span class=\"todo-page-title\"><a class=\"hand\" onClick=\"loadPreview(".$row['pub_id'].",".$row['page_num'].")\">Cover ".$row['asset_typ']."</a></span>\n<ul id=\"todo\" class=\"todo\">"; }
	    if ($num>=1 && $row['asset_typ'] == "Page") { echo "</ul>\n<span class=\"todo-page-title\"><a class=\"hand\" onClick=\"loadPreview(".$row['pub_id'].",".$row['page_num'].")\">".$row['asset_typ']." ".$row['page_num']."</a></span>\n<ul id=\"todo\" class=\"todo\">"; }
		if ($num>=1 && $row['asset_typ'] != "Page") { if ($row['asset_num'] <= 1) { $asset_num = ""; } else { $asset_num = $row['asset_num']; } 
		echo "<li><a href=\"#\">".$row['asset_typ']." ".$asset_num."</a></li>"; }
		$num++;
		
		
		}

	}
	

	function loadPreview($pub_id, $page_num) {
		// add more up to four leading zeros because Brad uses an apple computer
 
		$pub_id = sprintf("%05d",$pub_id); 
		
		$lz = "0"; if ($page_num >= 10) { $lz = ""; }
		$filename = "templates/".$pub_id."/images/".$pub_id."_Page_".$lz.$page_num.".jpg";
		
		// Not sure if we need to set the content type... if so:
		header('Content-type: image/jpeg');
		
		// Ratio calc: W/H*444 = New height
		list($width, $height) = getimagesize($filename);
		$new_height = 444 * $height / $width;
		$new_width = 444;
		
		// GD Really needs to resample the image to make it look good.
		$image_p = imagecreatetruecolor($new_width, $new_height);
		$image = imagecreatefromjpeg($filename);
		imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
		
		// Write the image to /dev/null > We could set nice -1 in GD libs later if needed.
		imagejpeg($image_p, null, 100);
	}
	


?>