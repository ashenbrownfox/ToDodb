<?php
	require('include/core.inc.php');

	if(isset($_POST['send'])){
		if(send_msg($_POST['sender'], $_POST['message'],$connection)){
			echo 'Message sent.';
		} else{
			echo "Message Failed.";
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Page TItle-->
	<title>Chat Application</title>
	<link type="text/css" rel="stylesheet" href="css/main.css">
</head>
<body>
	<div id="messages">
	

	</div><!-- messages -->
	<div id="input">
		<table>
			<div id="feedback"></div>
			<form action="index.php" method="post" id="form_input">
			<tr>
				<td><label>Enter Name:</td></label><td><input type="text" id="sender" name="sender"/></td>
			</tr>
			<tr>
				<td><label>Enter Message:</label></td><td><textarea name="message" id="message" rows="8" cols="40"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name ="send" id="send" value="Send Message!"/></td>
			</tr>
		</form>
		</table>
	</div>
<!-- JS -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="scripts/auto_chat.js"></script>
<!--<script type="text/javascript" src="scripts/send.js"></script> -->
</body>

</html>
