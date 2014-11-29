<? 

	// checks if someone is logged in
	
	if (!isset($_SESSION["email"])) {
			header( 'Location: login' ) ;
	}
?>

<HTML>
	<head>
		<title>My TODO List</title>
	</head>
	<body>
		<div id="header">Logged as, <?$_SESSION["email"] ?> </div>
		
	
	</body>
</HTML>
