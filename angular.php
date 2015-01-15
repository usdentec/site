<?php
include 'header.php';
?>
<script>
$(document).ready(function(){
	$('#angularbubble').fadeIn(3000);
});
</script>
<?php
if (loggedin()){
$page_title = 'Angular.js Page';
?>
<!---HEADING---->
<div id="heading">
<img src="img/angular.png"></img>
</div>
<br><br>
<!---content---->
<div id="page-content">
<hr>
<img src="img/construction3.png"></img>
</div>		
<!--MessageBox-->
<div id="messagebox">
	<div class="bubble" id="angularbubble">
	<h3>Angular.js</h3>
	<ul>
		<li>This project is ready to get off the ground.</li>
		<li>Angular happens to be one of my favorite JavaScript libraries, therefore I am exited about it.</li>
		<li>Approximate completion date: 2/01/2015.</li>
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