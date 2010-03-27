<?php
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