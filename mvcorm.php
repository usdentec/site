<?php
include 'header.php';
?>
<script>
$(document).ready(function(){
	$('#mvcbubble').fadeIn(3000);
});
</script>
<?php
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
	<h3>PHP: MVCs</h3>
	<ul>
		<li>This project will either be build upon existing MVC's like laravel, zend etc or I might try to create a project building my own MVC. </li>
		<li>Approximate completion date: 2/15/2015.</li>
	</ul>
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