<html>
<head>
    <script type="text/javascript" src="js/ajaxupload.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		var button = $('#button1'), interval;
		
		new AjaxUpload(button, {
			action: 'do-nothing.htm', 
			name: 'myfile',
			onSubmit : function(file, ext){
				// change button text, when user selects file			
				button.text('Uploading');
								
				// If you want to allow uploading only 1 file at time,
				// you can disable upload button
				this.disable();
				
				// Uploding -> Uploading. -> Uploading...
				interval = window.setInterval(function(){
					var text = button.text();
					if (text.length < 13){
						button.text(text + '.');					
					} else {
						button.text('Uploading');				
					}
				}, 200);
			},
			onComplete: function(file, response){
				button.text('Upload');
							
				window.clearInterval(interval);
							
				// enable upload button
				this.enable();
				
				// add file to the list
				//$('<li></li>').appendTo('#example1 .files').text(file);						
			}
		});
	});
	</script>
</head>

<body>
<form>
<?php if ($type == "text") { ?>
First name: <input type="text" name="firstname" />
<?php } ?>

<?php if ($type == "textarea") { ?>
	
<?php } ?>

<?php if ($type == "image") { ?>
	<ul>
		<li id="example1" class="example">
			<p>You can style button as you want</p>
			<div class="wrapper">
				<div id="button1" class="button">Upload</div>
			</div>
			<p>Uploaded files:</p>
			<ol class="files"></ol>
		</li>
	</ul>
<?php } ?>
</form>
</body>
</html>