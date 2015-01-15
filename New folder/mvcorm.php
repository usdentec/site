<?php
include 'header.php';
if (loggedin()){
	$page_title = 'MVC/ORM';
?>
<!---HEADING---->
<div id="heading">
<img src="img/mvc.png"></img>
</div>
<!---content---->
<div id="page-content">
<hr>
<img src="img/construction1.png"></img>
</div>		
<!--MessageBox-->
<div id="messagebox">
	<div class="bubble" id="mvcbubble">
	</div>
</div>		
<!------END------>
<?php
include 'footer.php';
} else {
	include 'login.php';
	include 'footer.php'; 
}
?>