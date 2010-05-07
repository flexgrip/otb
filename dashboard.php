<?php //reserved for session_start ?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<link rel = "stylesheet" type="text/css" href="css/thickbox.css" />
	<link rel = "stylesheet" type="text/css" href="style.css" />
	<link rel = "stylesheet" type="text/css" href="css/jquery-ui-1.8.custom.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
	<script type="text/javascript" src="flowplayer/flowplayer-3.1.4.min.js"></script>
	<script type="text/javascript" src="interface.js"></script>
	<script>
		$(document).ready(function() {
			completion('<?php echo $_GET['pub_id']; ?>', '<?php echo $_GET['user_id']; ?>', '<?php echo $_GET['order_id']; ?>');


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
				<div id="myPublication" class="infoBox floatLeft">
					<h2>My Publication</h2>
					<h3>Content Contribution Progress</h3>
					<img src="images/progressscale.png" />
					<div id="progressbar"></div>
					<a href="#"><h3>Edit Publication</h3></a>
					<p>Here is your control panel for adding stories and images to your publication. Track your progress, and when you've completed all items submit to CommunityLink for production!</p>
					<p><a href="http://communitylink.com/otb/?user_id=ray&order_id=1001">Let's get started!</a></p>
				</div>
				<div id="myVideo" class="infoBox floatRight">
					<h2>Video Tutorial</h2>
					<a href="images/heinz_deli_mayo.mp4" id="player"></a>
					<script language="JavaScript"> 
						flowplayer("player", "flowplayer/flowplayer-3.1.5.swf", {clip: {autoPlay: false}}); 
					</script>
				</div>
				<div class="clear"></div>
				<div id="myServices" class="infoBox floatLeft">
					<h2>Additional Services</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<ul>
						<li>
							<h4><a href="#">Creative Services</a></h4>
							<p>Need help? A bit of writer's block? Need access to professional photographers and graphic designers? We're here to help!</p>
						</li>
						<li>
							<h4><a href="#">Printing & Fulfillment</a></h4>
							<p>We provide you with a print ready PDF that can be taken to any local printer, but we also offer competitive rates on no hassle fulfillment.</p>
						</li>
					</ul>
				</div>
				<div id="mySupport" class="infoBox floatRight">
					<h2>Customer Support</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<ul>
						<li>
							<h4><a href="#">Tips, Tricks, and Hints</a></h4>
							<p>Some people might call this cheating, but hey. We won't say anything if you don't.</p>
						</li>
						<li>
							<h4><a href="#">Frequently Asked Questions</a></h4>
							<p>Here are some answers to the questions we hear most.</p>
						</li>
						<li>
							<h4><a href="#">Live Chat</a></h4>
							<p>Our online live chat specialists are available from Monday to Friday, 8:00 a.m. to 6:00 p.m. CST.</p>
						</li>
						<li>
							<h4><a href="#">Phone & Email Support</a></h4>
							<p>Feel free to contact us via email at <a href="mailto:outofthebox@communitylink.com">outofthebox@communitylink.com</a>, or by telephone at (800) 455-5600 ext. 1138.</p>
						</li>
					</ul>
				</div>
				<div id="mySalesKit" class="infoBox floatLeft">
					<h2>My Sales Kit</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<ul>
						<li>
							<h4><a href="#">Ad Rate Sheet</a></h4>
							<p>Available in PDF format!</p>
						</li>
						<li>
							<h4><a href="#">My AdLink Reserve</a></h4>
							<p>AdLink Reserve is your online ad reservation system. It makes selling your ads as easy as 1-2-3!</p>
						</li>
						<li>
							<h4><a href="#">MarketWise Out of the Box Edition</a></h4>
							<p>Helpful marketing template to promote to your membership.</p>
						</li>
					</ul>
				</div>
			<div style="clear: both;"></div>	
			</div>
			<!-- END CONTENT -->
		</div>
		<?php include('inc/fineprint.php'); ?>
	
	</div><!-- END #CONTAINER -->
</body>
</html>