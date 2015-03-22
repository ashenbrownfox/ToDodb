#('#form_input').submit(function() {
	alert("Hello");
	var message = $('#message').val();
	var sender = $('#sender').val();
	$.ajax({
		url: 'scripts/send.php',
		data:{ sender: sender, message: message},
		success: function(data){
			$('#feedback').html(data);

			$('feedback').fadeIn('slow',function(){
				$().fadeOut(6000);
			});

			//$('#message').val('');
		}
	});
	return false;
});