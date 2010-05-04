<html>
<head>
<?php $page_number = $page_num - 1; ?>


		<script>
			function submitText() {
				$.post("textin.php", { 
					id : '<?php echo $id; ?>',
				    user_id : '<?php echo $user_id; ?>',
				    order_id : '<?php echo $order_id; ?>',
				    page_num : '<?php echo $page_num; ?>',
				    asset_num : '<?php echo $asset_num; ?>',
				    pub_id : '<?php echo $pub_id; ?>',
				    asset_typ : '<?php echo $type; ?>',
					txtd : $('#textin').val()
				},function(data){ 
                    if(data === '1') { $('#resp').html("Successfuly saved!"); }
                    if(data === '0') { $('#resp').html("Error: Please try again."); }
                    getTodo("<?php echo $_GET['user_id']; ?>", "<?php echo $_GET['order_id']; ?>", <?php echo $page_number; ?>);
                    closePanel();
				} );
//               $.get('textin.php?='+$('#login2').val(), function(data) {
//                  if(data === 'allow') {  window.location = "index.php?code="+data+"&pass=64v50" }
//                  if(data === 'dont') {$('#show').html("Invalid code. Please try again or email marketwise@communitylink.com.");}
//
//               });
               }
		</script>
<?php if ($img == "1") { ?>		
	<script type="text/javascript">
	$(document).ready(function(){
		
		var button = $('#button1'), interval;
		
		new AjaxUpload(button, {
			action: 'scripts/uploaded.php', 
			name: 'userfile',
			data: {
		        id : '<?php echo $id; ?>',
			    user_id : '<?php echo $user_id; ?>',
			    order_id : '<?php echo $order_id; ?>',
			    page_num : '<?php echo $page_num; ?>',
			    asset_num : '<?php echo $asset_num; ?>',
			    pub_id : '<?php echo $pub_id; ?>',
			    asset_typ : '<?php echo $type; ?>'
			  },
			onSubmit : function(file, ext){
				// change button text, when user selects file			
				button.text('Uploading');
								
				// If you want to allow uploading only 1 file at time,
				// you can disable upload button
				this.disable();
				
				// Uploading -> Uploading. -> Uploading...
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
				button.text('Done!');
							
				window.clearInterval(interval);
							
				// enable upload button
				// this.enable();
				//parent.getTodo("<?php echo $_GET['user_id']; ?>", "<?php echo $_GET['order_id']; ?>");
				//panelClose();
				// add file to the list
				// $('<li></li>').appendTo('#upload1 .files').text(file);						
			}
		});
	});
	</script>
<?php } ?>

<?php
	$asset_number = $asset_num;
	$page_number = $page_num; 
	if ($asset_number <= 1) { $asset_number = ""; }
	if ($page_number <= 1) { $page_number = "Cover Page";} else { $page_number = "Page " . $page_number; } 
?>

</head>

<body>
<div id="resp" style="width: 100%; background-color: red; color: white; font-size: 22px"></div>
<span id="breadcrumb-page"><?php echo $page_number . " > "; ?></span><span id="breadcrumb-asset"><?php echo $asset_type . " " .$asset_number; ?></span>
</span>
<form onsubmit="return false;">
<?php if ($img != "1") {?>
<?php if ($asset_des) { ?><p><?php echo $asset_des; ?></p><?php } ?>
<?php if ( strpos($type, 'copy') !== false ) { ?>
Your copy:<br /> <textarea id="textin"></textarea><br />
<?php } else {?>
Your text:<br /> <input type="text" name="firstname" id="textin" value="<?php echo $data; ?>"/><br />
<?php } ?>
<input align="right" type="submit" onClick="submitText()" value="Submit" />
<?php } ?>

<?php if ($img == "1") { ?>

			<p>1. Click on the upload button.<br />2. Select the image to upload for this spot.</p>
			<div class="wrapper" style="background: url(images/uploadbutton.png) 0 0 no-repeat; width: 100px; height: 38px; font-size: 18px; color: #ffffff;">
				<div id="button1" class="button" style="text-align: center; padding-top: 7px;">Upload</div>
			</div>

<?php } ?>
</form>
</body>
</html>