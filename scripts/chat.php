<?php
	require("../include/database/connectdb.php");
	require("../include/functions/chat.func.php");

	//$connection = mysqli_connect($db_host, $db_user, $db_pass);
		$messages = get_msg($connection);
		foreach($messages as $message){
			echo '<strong>'.$message['sender'].'</strong>:  ';
			echo $message['message']. '<br/><br/>';
		}

?>