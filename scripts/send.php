<?php
	require("../include/database/connectdb.php");
	require("../include/functions/chat.func.php");
	/*
	if(isset($_POST['send'])){
		if(send_msg($_POST['sender'], $_POST['message'],$connection)){
			echo 'Message sent.';
		} else{
			echo "Message Failed.";
		}
	}
	*/
	if(isset($_GET['sender']) && !empty($_GET['sender'])) {
		$sender = $_GET['sender'];

		if(isset($_GET['message']))&& !empty($_GET['message']){
			$message = $_GET['message'];

			if(send_msg($sender,$message)){
				echo "Message sent."
			} else{
				echo "Error sending message."
			}
		} else
			echo "No message.";

	} else {
		echo "No Name was entered.";
	}

?>