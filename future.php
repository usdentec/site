<?php
include 'header.php';
?>
<script>
$(document).ready(function(){
	$('#futurebubble').toggle(1000);
});
</script>
<?php
if (loggedin()){
	$page_title = 'Future Page';
?>
<!---HEADING---->
<div id="heading">
<img src="img/next.jpg"></img>
</div>
<!---content---->
<div id="page-content">
<br>
<h3>Things I am passionate about learning next!</h3>
<hr>
<br>
<ol>
<li><img src="img/white.png"></img>Cloud Computing: AWS/SAAS.</li>
<img src="img/cloud.png"></img>
<li><img src="img/white.png"></img>Python Programming.</li>
<img src="img/python.png"></img>
<li><img src="img/white.png"></img>Automation Testing.</li>
<img src="img/automation.png"></img>
</ol>
</div>		
<!--MessageBox-->
<div id="messagebox">
	<div class="bubble" id="futurebubble">
	<ul>
		<li>After gaining acute proficiency in the technologies listed before these are the things, I would love to learn. </li>
		<li>I am individual who is highly motivated and exited about learning new cutting edge technologies.</li>
		<li>This is more like my new year's resolution to gain some proficiency in these before 2015 is out.</li>
		<li>I hope you liked my first draft, from here I will continue to learn and improve.</li>
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