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
	<p> So basically we started off by creating a couple users. We granted them sudo permissions by editing that sudo file. The Apache server wasn't set, no webpages could be displayed. So we had to use a package called Yum to install Apache Server. Commands were: sudo yum install httpd, sudo service httpd start. Next we ended up with a picture like <a href="https://i.imgur.com/NLSJR.png">this</a>. Well that was the most basic package and it's all set now.
	</p>
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
	<p>Yum is a command line, RPM based, package manager for Linux operating systems. It uses software repositories to access packages.</p>
	<p>"yum is an interactive, rpm based, package manager. It can automatically perform system updates, including dependency analysis and obsolete processing based on "repository" metadata. It can also perform installation of new packages, removal of old packages and perform queries on the installed and/or available packages among many other commands/services (see below).
	 yum is similar to other high level package managerslike apt-get and smart."</p>
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

	<ul>

	<li><h4><a href="http://www.cs.wmich.edu/~jhughes/team-eval/">Team Evaluations</a></h4></li>
	</ul>
	</div>


	

 

<!-- <ol>

      <li>Browsers are inconsistent in the way they round div sizes in percent-based layouts. If the browser must render a number like 144.5px or 564.5px, they have to round it to the nearest whole number. Safari and Opera round down, Internet Explorer rounds up and Firefox rounds one column up and one down filling the container completely. These rounding issues can cause inconsistencies in some layouts. In this IECC there is a 1px negative margin to fix IE. You may move it to any of the columns (and on either the left or right) to suit your layout needs.</li>

      <li>The zoom property was added to the anchor within the navigation list since, in some cases, extra white space will be rendered in IE6 and IE7. Zoom gives IE its proprietary hasLayout property to fix this issue</li>

    </ol>

 -->

	<div class="section">Things I found on the Internet"</div>

	<p><a href="http://www.youtube.com/watch?v=Ws5se6wLjUY">Don't click</a></p>

	

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
