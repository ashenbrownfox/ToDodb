$(document).ready(function() {
	var interval = setInterval(function(){
		$.ajax({
			url: 'scripts/chat.php',
			success: function(data){
				$('#messages').html(data);
			}
		});
	}, 1000); //every 1 second, run this
});