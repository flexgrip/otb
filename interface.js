//          if(data === 'allow') {  window.location = "index.php?code="+data+"&pass=64v50" }
//          if(data === 'dont') {$('#show').html("Invalid code. Please try again or email marketwise@communitylink.com.");}

function getTodo(user_id,order_id) {
       $.get('interface.php?user_id=ray'/*+user_id+*/'&order_id=1001'/*+order_id+*/'&task=todo', function(data) {
    	   $('.the-box-to-do').html(data);
       });
       }