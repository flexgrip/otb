<?php
$task = $_GET['task'];
 
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
if ($task == "getMap") { echo getMap($pub_id, $page_num); }
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
		if ($num==0 && $row['asset_typ'] == "Page") { echo "<h3 class=\"todo-page-title\"><a class=\"hand\" onClick=\"loadPreview(".$row['pub_id'].",".$row['page_num'].")\">Cover ".$row['asset_typ']."</a></h3>\n<div><ul id=\"todo\" class=\"todo\">"; }
	    if ($num>=1 && $row['asset_typ'] == "Page") { echo "</ul></div>\n<h3 class=\"todo-page-title\"><a class=\"hand\" onClick=\"loadPreview(".$row['pub_id'].",".$row['page_num'].")\">".$row['asset_typ']." ".$row['page_num']."</a></h3>\n<div><ul id=\"todo\" class=\"todo\">"; }
		if ($num>=1 && $row['asset_typ'] != "Page") { if ($row['asset_num'] <= 1) { $asset_num = ""; } else { $asset_num = $row['asset_num']; } 
		echo "<li class=\"need\"><a href=\"#\">".$row['asset_typ']." ".$asset_num."</a></li>"; }
		$num++;
		
		
		}

	}	
 
 
	function loadPreview($pub_id, $page_num) {
		// add more up to four leading zeros because Brad uses an apple computer
 
		$pub_id = sprintf("%05d",$pub_id); 
 
		$lz = "0"; if ($page_num >= 10) { $lz = ""; }
		$filename = "templates/".$pub_id."/images/".$pub_id."_Page_".$lz.$page_num.".jpg";
 
		// Not sure if we need to set the content type... if so:
		/* header('Content-type: image/jpeg'); */
 
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
 
 
	function getMap($pub_id, $page_num) {
 
		// Get the height of the original image and then determine the ratio to size the image maps down.
		// This is just copied from the image resizing function.
		$pub_id = sprintf("%05d",$pub_id);
		$query = "SELECT * FROM assets WHERE pub_id = '".$pub_id."' AND page_num = '1' AND asset_num = '0'";
		$result = mysql_query($query) or die(mysql_error());
			while($row = mysql_fetch_array($result)){
							$document_width = $row['asset_x2'] - $row['asset_x1'];
						}
 
			/*		
			$pub_id = sprintf("%05d",$pub_id); 
			
			$lz = "0"; if ($page_num >= 10) { $lz = ""; }
			$filename = "templates/".$pub_id."/images/".$pub_id."_Page_".$lz.$page_num.".jpg";
			
			// Ratio calc: W/H*444 = New height
			list($width, $height) = getimagesize($filename);
			$ratioy = (444 * $height / $width) / $height; */
 
			$ratio = 444 / $document_width;
 
 
		$pub_id = sprintf("%05d",$pub_id);
		$query = "SELECT  * FROM assets WHERE pub_id = '".$pub_id."' AND page_num = '".$page_num."' ORDER BY CASE  WHEN asset_typ = 'Page' THEN 1 WHEN asset_typ = 'Body copy' THEN 5 WHEN asset_img = '1' THEN 4 ELSE 3 END , asset_typ";
		$result = mysql_query($query) or die(mysql_error());
 
		$num = 0;
		$page_spread = 0;
		// Start the image map
		echo "<MAP NAME=\"map\">";
			while($row = mysql_fetch_array($result)){
					if ($row['asset_x1'] == 0 && $row['asset_typ'] == "Page" && $num == 0) { $document_width = 0; } 
					$x1 = ($row['asset_x1'] - $document_width) * $ratio; $x1=(int)$x1;
					$x2 = ($row['asset_x2'] - $document_width) * $ratio; $x2=(int)$x2;
					$y1 = $row['asset_y1'] * $ratio; $y1=(int)$y1;
					$y2 = $row['asset_y2'] * $ratio; $y2=(int)$y2;
					if ($row['asset_typ'] != "Page") {
						echo "<AREA SHAPE=\"rect\" COORDS=\"".$x1.",".$y1.",".$x2.",".$y2."\" HREF=\"".$num."\" id=\"".$row['asset_typ'].$row['asset_num']."\">";
					}
					$num++;
				}
		echo "</MAP>";
	}
 
 
 
?>