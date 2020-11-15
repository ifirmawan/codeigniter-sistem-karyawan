$(document).ready(function(){
  	//autometically refresh after every 1000 millisecond.
    load_data ={'fetch':1};
    window.setInterval(function(){
    	$.post('shout.php', load_data, function(data){
    		$('.message_box').html(data);
    		var scrolltoh = $('.message_box')[0].scrollHeight;
    		$('message_box').scrollTop(scrolltoh);
    	});
    }, 1000);
    //method to tringger when user hits enter key
    /*$("#shout_message").keypress(function(evt){
    	if(evt.which == 13){
    		var iusername = ('#shout_username').val();
    		var imessage = $('shout_message').val();

    		post_data = {'username' : iusername, 'message':imessage};

    		//send data to "shout.php" using jQuery $.post()
    		$.post('shout.php', post_data, function(data){

    			//appaned data into messagesbox with jQuery fade effect!
    			$(data).hide().appanedTo('.message_box').fadeIn();

    			//keep scrolled to bottom of chat!
    			var scrolltoh = $('.message_box')[0].scrollHeight;
    			$('.message_box').scrollTop(scrolltoh);

    			//reset value of massage box
    			$('#shout_message').val('');

    		}).fail(function(err){
    		//alert HTTP server eror
    		alert(err.statusText);	
    		});
    	}
    });*/
  

  });