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
	<?php
		$connection = mysqli_connect($db_host, $db_user, $db_pass);
		$messages = get_msg($connection);
		foreach($messages as $message){
			echo '<strong>'.$message['sender'].'</strong>:  ';
			echo $message['message']. '<br/><br/>';
		}
	?>

	</div><!-- messages -->
	<div id="input">
		<table>
			<form action="index.php" method="post">
			<tr>
				<td><label>Enter Name:</td></label><td><input type="text" name="sender"/></td>
			</tr>
			<tr>
				<td><label>Enter Message:</label></td><td><textarea name="message" rows="8" cols="40"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name ="send" value="Send Message!"/></td>
			</tr>
		</form>
		</table>
	</div>

</body>

</html>
