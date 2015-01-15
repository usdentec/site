<?php
include 'header.php';
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
<h3>Thing I am passionate about learning!</h3>
<hr>
<br>
<ol>
<li><img src="img/white.png"></img>Cloud Computing: AWS/SAAS</li>
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