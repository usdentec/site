<?php
include 'header.php';
if (loggedin()){
	$page_title = 'API Page';
?>
<!---HEADING---->
<div id="heading">
<img src="img/api.gif"></img>
</div>
<!---content---->
<div id="page-content">
<hr>
<img src="img/construction2.png"></img>
</div>		
<!--MessageBox-->
<div id="messagebox">
	<div class="bubble" id="apibubble">
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