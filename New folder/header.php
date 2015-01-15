<?php
require_once("dbconnect.php");
require_once("core.php");
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/green.css" />
	<link rel="stylesheet" type="text/css" href="css/custom.css" />
	<link rel="stylesheet" type="text/css" href="css/messagebox.css" />
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/test.js"></script>
	<script type="text/javascript" src="js/priceCalc.js"></script>
	<script type="text/javascript" src="js/regVal.js"></script>
	<script type="text/javascript" src="ajaxProcess.js"></script>
</head>

<body>

<div id="template_wrapper">
	<div id="template_header" class="">
	Welcome to my Web Application!!
	</div>
	<div id="navigation">
	    <?php
	    if (loggedin()){
		$fName = preg_replace('/\\.[^.\\s]{3,4}$/', '', basename($current_file));
        ?>  
		<center>
		<div id="l1" class="index"><a href="index.php">DB Records<img src="img/data1.png"></img></a></div> 
		<div id="l1" class="auto"><a href="auto.php">AJAX &amp; JQUERY<img src="img/binary.png"></img></a></div> 
		<div id="l1" class="angular"><a href="angular.php">AngularJS<img src="img/worker.png"></img></a></div> 
		<div id="l1" class="mvcorm"><a href="mvcorm.php">MVC/ORM<img src="img/construction10.png"></img></a></div> 
		<div id="l1" class="api"><a href="api.php">API's<img src="img/gears6.png"></img></a></div>  
		<div id="l1" class="future"><a href="future.php">Future<img src="img/education.png"></img></a></div>
		<div id="l1" class=""><a href="logout.php">Logout<img src="img/logout.png"></img></a></div>
		</center>
		<script>
		$( document ).ready(function() {
			$('.<?php echo $fName;?>').css('background-color', '#FFFFB8');
			$('.<?php echo $fName;?>').css('border-radius', '5px');
		});
		</script>
		<?php 
        }
        else {
        ?>  
		<div id="l1" class="login"><a href="index.php">Log In<img src="img/door13.png"></img></a></div>
		<div id="l1" class="register"><a href="register.php">Register <img src="img/clipboard.png"></img></a></div>  
		<?php 
        }
		?> 
	</div>
	
	<div id="template_content" class="content">
