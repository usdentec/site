<?php
include 'header.php';
?>
<script>
$(document).ready(function(){
	$('#apibubble').fadeIn(3000);
});
</script>
<?php
if (loggedin()){
	$page_title = 'API Page';
?>
<!---HEADING---->
<div id="heading">
<img src="img/api.gif"></img>
</div>
<br>
<!---content---->
<div id="page-content">
<hr>
<img src="img/construction2.png"></img>
</div>		
<!--MessageBox-->
<div id="messagebox">
	<div class="bubble" id="apibubble">
<h3>APIs</h3>
	<ul>
		<li>API's are crucial part of today's websites.</li>
		<li>This project will revolve around Google,Facebook and Paypal Api. I have to scope it out yet.</li>
		<li>Approximate completion date: 3/01/2015.</li>
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