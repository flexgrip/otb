//          if(data === 'allow') {  window.location = "index.php?code="+data+"&pass=64v50" }
//          if(data === 'dont') {$('#show').html("Invalid code. Please try again or email marketwise@communitylink.com.");}

function getTodo(user_id,order_id) {
       $.get('interface.php?user_id='+user_id+'&order_id='+order_id+'&task=todo', function(data) {
    	   $('.the-text').html(data);
    	   var tbHigh = $('.the-text').height();
    	   $('.the-box-to-do').height(tbHigh + 35);
       });
       }

function loadPreview(pub_id,page_num) {
    var data = '<img src=\"interface.php?pub_id='+pub_id+'&page_num='+page_num+'&task=loadPreview\" usemap="#map" border="0"/>';
    $.get('interface.php?pub_id='+pub_id+'&page_num='+page_num+'&task=getMap', function(map) {
    	data = data + map;
 	    $('.the-box-template').html(data);	
    });

	 }
    