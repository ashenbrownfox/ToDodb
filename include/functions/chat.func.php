<?php

function get_msg($connection){
	$query = "SELECT `sender`, `message` FROM `chat`.`chat` ORDER BY `Msg_ID` DESC";

	$result = mysqli_query($connection,$query);

	$messages = array();
	while($row = mysqli_fetch_assoc($result)){
		$messages[] = array('sender' => $row['sender'],
							'message'=>$row['message']);
	}
	return $messages;
}
function send_msg($sender,$message,$connection){

	if(!empty($sender) && !empty($message)){
		$sender = mysqli_real_escape_string($connection,$sender);
		$message = mysqli_real_escape_string($connection,$message);

		$query = "INSERT INTO `chat`.`chat` VALUES(null, '{$sender}', 
			'$message')";

		if($run = mysqli_query($connection,$query)) {
			return true;
		} else {
			return false;
		}
	} else{
		return false;
	}
}
//chat
// chat Msg_ID - Primary Sender Message

//checkdate(month, day, year)
?>