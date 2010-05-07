<?php //reserved for session_start ?>
<?php
// Programming - Ray Aguilar
// Project Goal - Facilitate buyers in configuring their projects/books
// Based on - PHP, MySQL, HTML, CSS
// Date - March 15th, 2010
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>

<!--<link rel = "stylesheet" type="text/css" href="css/thickbox.css" >-->
	<link rel = "stylesheet" type="text/css" href="style.css" > 

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<!--<script type="text/javascript" src="js/jquery.maphilight.min.js"></script>-->
<!--<script type="text/javascript" src="js/thickbox-compressed.js"></script> -->
	<script type="text/javascript" src="js/jquery.dimensions.min.js"></script>
	<script type="text/javascript" src="js/jquery.tooltip.min.js"></script> 
    <script type="text/javascript" src="js/ajaxupload.js"></script>
		<script type="text/javascript" src="interface.js"></script>


					<script type="text/javascript">
					$(document).ready(function() {
					    getTodo("<?php echo $_GET['user_id']; ?>", "<?php echo $_GET['order_id']; ?>", 0);
					    /* loadPreview(pub_id,page_num,"<?php echo $_GET['user_id']; ?>", "<?php echo $_GET['order_id']; ?>") */
					});
					</script>
			
</head>
<body>


<input type="hidden" id=""></input>

	<div id="container">
		<?php include('inc/header.php'); ?>
		
		<div id="content-wrapper">
			<div id="content-overlay" style="width: 100%; height: 1043px; background: #000000; opacity: .5; position: absolute; top: 0px; left: 0px; z-index: 10000; display: none;"></div>
			<div id="top-bar"></div>
			
			<div id="top-bar-spacer"><div id="panel"></div></div>
			
			<!-- BEGIN CONTENT -->
			<div class="content">
				<h1 class="page-title">Greetings Earthling,</h1>
				<div id="heading-spacer"></div>
				<div class="the-box the-box-to-do">
					<div class="the-title"><h3 class="the-heading">To-Do List</h3></div><img class="the-box-bg" src="images/boxbg.png" width="100%" height="100%" /><div class="the-text">
					

					</div>
				</div>
				
				<div class="the-box-template">
					<img src="images/the-box-template.jpg" width="444" height="494" style="display: block;" />
				</div>
				<div class="hidden" id="load">
					<img src="images/loading46-edited.gif" width="444" height="550" style="display: block;" />
				</div>

				
			<div style="clear: both;"></div>	
			</div>
			<!-- END CONTENT -->
		</div>
	
	
	</div><!-- END #CONTAINER -->
</body>
</html>