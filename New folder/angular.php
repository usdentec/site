<?php
include 'header.php';
if (loggedin()){
$page_title = 'Angular.js Page';
?>
<!---HEADING---->
<div id="heading">
<img src="img/angular.png"></img>
</div>
<!---content---->
<div id="page-content">
<hr>
<img src="img/construction3.png"></img>
</div>		
<!--MessageBox-->
<div id="messagebox">
	<div class="bubble" id="angularbubble">
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