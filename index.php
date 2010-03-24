<?php //reserved for session_start ?>
<?php
// Programming - Ray Aguilar
// Project Goal - Facilitate buyers in configuring their projects/books
// Based on - PHP, MySQL, HTML, CSS
// Date - March 15th, 2010

require 'scripts/dbconnect.php';
include 'scripts/config.php';



?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<link rel = "stylesheet" type="text/css" href="style.css" >
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
	<script type="text/javascript" src="interface.js"></script>
	
<!--  -->
		<script type="text/javascript">
		
		</script>

		<script type="text/javascript">
//		function getPublication() {
//               $.get('interface.php?todo='+$('#login2').val(), function(data) {
//                  if(data === 'allow') {  window.location = "index.php?code="+data+"&pass=64v50" }
//                  if(data === 'dont') {$('#show').html("Invalid code. Please try again or email marketwise@communitylink.com.");}
//
//               });
//               }
		</script>
	
</head>
<body>

	<div id="container">
		<div id="header">
			<div id="otb-logo"></div>
			<div id="cl-logo"></div>
		</div>
		
		<div id="content-wrapper">
			<div id="top-bar"></div>
			<div id="top-bar-spacer"></div>
			
			<!-- BEGIN CONTENT -->
			<div class="content">
				<h1 class="page-title">Greetings Earthling,</h1><a href="" onClick="getTodo();">Get todo</a>
				<div id="heading-spacer"></div>
				<div class="the-box the-box-to-do">
					<div class="the-title"><h3 class="the-heading">To-Do List</h3></div><img class="the-box-bg" src="images/boxbg.png" width="100%" height="100%" /><div class="the-text">
					<p>test</p>
					</div>
				</div>
				
			<div style="clear: both;"></div>	
			</div>
			<!-- END CONTENT -->
		</div>
	
	
	</div><!-- END #CONTAINER -->

</body>
</html>