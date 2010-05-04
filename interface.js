//          if(data === 'allow') {  window.location = "index.php?code="+data+"&pass=64v50" }
//          if(data === 'dont') {$('#show').html("Invalid code. Please try again or email marketwise@communitylink.com.");}

function getTodo(user_id,order_id,page_num) {
       $.get('interface.php?user_id='+user_id+'&order_id='+order_id+'&task=todo', function(data) {
    	   $('.the-text').html(data);
    	   $(".the-text").accordion('destroy').accordion( { autoHeight: false, active: page_num } );
    	   var tbHigh = $('.the-text').height();
    	   $('.the-box-to-do').height(tbHigh + 375);
    	   //tb_init('a.thickbox');
       });
       }

function loadPreview(pub_id,page_num,user_id,order_id) {
	/* $('#load').fadeIn('normal');
    $('.the-box-template').fadeOut('normal'); */
    
    var data = '<img src=\"interface.php?pub_id='+pub_id+'&page_num='+page_num+'&user_id='+user_id+'&order_id='+order_id+'&task=loadPreview\" usemap="#map" border="0" class="map"/>';
    $.get('interface.php?pub_id='+pub_id+'&page_num='+page_num+'&user_id='+user_id+'&order_id='+order_id+'&task=getMap', function(map) {
    	data = data + map;
 	    $('.the-box-template').html(data);
		$('a.tips').tooltip({
		  track: true,
		  delay: 0,
		  showURL: false,
		  extraClass: "right"
		}); 
    });
    
    /* $('.the-box-template').fadeIn('normal');
    $('#load').fadeOut('normal'); */

	 }

function panel(id,user_id,order_id,pub_id,page_num,asset_des,asset_type,asset_num,img,type,data) {
	$.get('upload.php?id='+id+'&user_id='+user_id+'&order_id='+order_id+'&pub_id='+pub_id+'&page_num='+page_num+'&asset_des='+asset_des+'&asset_type='+asset_type+'&asset_num='+asset_num+'&img='+img+'&type='+type+'&data='+data+'', function(data) {
	 	   $('#panel').html(data);
	 	   $('#content-overlay').show();
	 	   $('#panel').slideDown('slow');	   
	    });
	
	}

function closePanel() {
   		$('#content-overlay').fadeOut('slow');
   		$('#panel').slideUp('slow');	   
	}

    