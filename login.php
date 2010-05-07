<?php //reserved for session_start ?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<link rel = "stylesheet" type="text/css" href="css/thickbox.css" />
	<link rel = "stylesheet" type="text/css" href="style.css" />
	<link rel = "stylesheet" type="text/css" href="css/jquery-ui-1.8.custom.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
	<script type="text/javascript" src="flowplayer/flowplayer-3.1.4.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#dialog').dialog({
				autoOpen: false,
				modal: true
			});
			$('#opener').click(function() {
				$('#dialog').dialog('open');
				return false;
			});
		});
	</script>
</head>
<body>
<input type="hidden" id=""></input>
	<div id="container">
		<?php include('inc/header.php'); ?>
		
		<div id="content-wrapper">
			<div id="top-bar"></div>			
			<!-- BEGIN CONTENT -->
			<div class="content">
				<div id="loginbox" class="infoBox centered">
					<h2>Login</h2>
					<p>To login to your account, please enter the Order ID and Customer ID.</p>
					<form action="#" class="loginform">
						<label for="orderid">
							Order ID:
						</label>
						<input type="text" name="orderid" id="orderid" />
						<label for="customerid">
							Customer ID:
						</label>
						<input type="text" name="customerid" id="customerid" />
						<p class="forgotpassword"><a id="opener">Forgot your Order ID or Customer ID?</a></p>
						<input type="submit" />
					</form>
				</div>
			</div>
			<div id="dialog" title="Login Help">
				<p>Your Order ID and Customer ID should be in the confirmation email you received when making your Out of the Box purchase.</p>
				<p>If you are unable to locate this information, please call 1-800-455-5600.</p>
			</div>

			<!-- END CONTENT -->
			
		</div>
		<?php include('inc/fineprint.php'); ?>
	
	</div><!-- END #CONTAINER -->
</body>
</html>