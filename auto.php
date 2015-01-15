<?php
$page_title = 'Product List';
include 'header.php';
?>
<script>
$( document ).ready(function() {
	$('#autobubble').css('opacity', 0).slideDown(5000).animate({ opacity: 1 },{ queue: false, duration: 7000 });
	$('#calcbubble').css('opacity', 0).slideDown(5000).animate({ opacity: 1 },{ queue: false, duration: 7000 });
});
</script>
<?php
if(loggedin()){
?>
	<div id="search">
		<center>
			<form id="search" name="search">
				<img src="img/searching.png"></img>EASY SEARCH:<br>
				<input type="text" name="keyword" onkeyup="findmatch()">
			</form>
		<div id="results"></div>
		</center>
	</div>
	<div id="messagebox">
		<div class="bubble" id="autobubble">
			<h3>Ajax Dynamic Search</h3>
			<ul>
			<li>Begin typing the name of any product.</li>
			<li>On each key stroke the word will be searched on database products table for matches.</li>
			<li>No page reload!</li>
			</ul>
		</div>
	</div>
	<div id="calculator">
		<h3>Add Items to your cart!</h3>
			<label><input type="checkbox" class="option" value="45"></input><img src="img/cd.png"></img>CD PLAYER</label><br>
			<label><input type="checkbox" class="option" value="240"></input><img src="img/lcd.png"></img>LCD TV</label><br>
			<label><input type="checkbox" class="option" value="600"></input><img src="img/laptop.png"></img>LAPTOP</label><br>
			<label><input type="checkbox" class="option" value="759"></input><img src="img/touch.png"></img>IPAD</label><br>
			<label><input type="checkbox" class="option" value="150"></input><img src="img/iphone.png"></img>CELL PHONE</label><br>
			<img src="img/cashier2.png"></img><input type="text" class="total" value="0"></input>
	</div>
		<div id="messagebox">
		<div class="bubble" id="calcbubble">
			<h3>JQuery Dynamic Checkout</h3>
			<ul>
			<li>Begin adding things to your cart.</li>
			<li>Each item added will update the total price dynamically through DOM traversal.</li>
			<li>No page reload!</li>
			</ul>
		</div>
	</div>
<?php
}
else{
include 'login.php';
}
include 'footer.php';
?>
