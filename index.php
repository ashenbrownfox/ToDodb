<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>CS Group Homepage</title>

<meta name="description" content="Hello.

" />



<link href="css/styles.css" rel="stylesheet" type="text/css" />

<link href="icon/favicon.ico" rel="shortcut icon" type="image/x-icon"/>



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript" >

	$(document).ready(function(){

		$('#butt').click(function(){

			$('.hideme').toggle();

		});

	});

	//$(document).ready(function () {

	//$("#butt").text("The DOM is now loaded and can be manipulated.");

	//});

</script>


</head>

<body>

<?php include "req/header.php"; ?>

    

<div class="container">



  

  <div class="content">

   

    <div class="section">Hello World!     	
    	</div>

	<h1>This is just a home page with testing on it. See the other page links above </h1>
	<p><?php echo "Yes! PHP is working now! ".
    	"PHP information: <a href='info.php'>Info</a>";
    	 ?>
		Apache Server is activated, MySQL is installed on it as well.
		The development environment is set.
	</p>
	
	<div class="section">ToDo List</div>
	<p></p>
	<select name="todolist" size="6" multiple="multiple">
		<option value="visa">Visa</option>
		<option value="mastercard">Mastercard</option>
		<option value="amex">American Express</option>
	</select>
	<input type="text" name="do"><br/>
	<button type="button">Add Item</button>
	<button type="button">Delete Item</button>
	<button type="button">Update Item</button>
	<ul>
	<li>1) ssh into your virtual machine in using the root password</li>	
	<li>2) set a better root password</li>
	<li>3) create seperate user accounts for each member of your group check that you can ssh into your new user accouts</li>
	<li>4) add each member of your group to the sudoers list with unlimited power check that it worked</li>
	<li>5) disable root logins check that it worked</li>
	<li>6) set up your credentials for ssh and ssl</li>
     
     find and read an overview of credentials, ssl, and ssh for a basic understanding.
     (for some added security you could disable logins without ssh credentials or
      only alow logins for specific machines, but that is not needed here)

	</ol>
	<div class="section">Yum</div>
	
	<div class="section">Code test</div>
	<p>This is some code. 
	</p>
	<p><div class="code">echo "Hello WOrld!";</div></p>

	<div class="section">Javascript Test Area</div>

	<button type="button" id="butt">Toggle Between Hide and Unhide!</button>

	<div class="hideme">

		<p>This is a test. There is no content here.</p>
		<p>) find references on Apache adminstration, read them and
     enable Apache on your virtual machine, automatically on boot and manually.
     load a web page and check that it works (note your VM is only accesable on campus
      so to see it off campus you have to use the WMU VPN)
2) Investigate the WMU VPN (from Juniper) and install it on your laptop...
3) Invesitgate how to set the Apache log level and where the logs are
4) Look for some "good" references and checklists on securing Apache </p>
		<div class="section">Random Projects</div>

	
	</div>

	</div> <!-- end .content -->

<?php
include "req/footer.php"; 
 ?>
</div><!-- end .container -->
 <div class="footer-wrapper">

   <p id="copyright"> © Copyright information here <br/>

   Private Policy and Terms of Use</p>

    

  </div>   <!-- end footer-wrapper -->

</body>

</html>
