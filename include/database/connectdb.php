<?php

	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';
	$db_name = 'chat';

	// if($connection = mysqli_connect($db_host, $db_user, $db_pass)){
	// 	echo 'Connection successfully established.... <br/>';

	// 	if($database = mysqli_select_db($db_name,$connection)){
	// 		echo ' '.$db_name. ' Database has been selected....<br/> ';
	// 	} else {
	// 		echo 'Database not found.';
	// 	}
	// } else{
	// 	echo "Unable to connect establish a connection to a database. ";
	// }

	if($connection = mysqli_connect($db_host, $db_user, $db_pass))
	{
		echo "Successfully connected to the Database Server! <br/>";
		$feedback[] = "";
	}

	if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
	} 


	mysqli_select_db($connection, $db_name);

	if ($result = mysqli_query($connection, "SELECT DATABASE()")) {
    $row = mysqli_fetch_row($result);
    printf("Database has been selected. Default database is %s.\n", $row[0]);
    mysqli_free_result($result);
}

	
?>