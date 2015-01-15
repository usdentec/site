<?php
$page_title = 'Product List';
include 'header.php';
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
			i am a search bubble
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
		<div class="bubble" id="autobubble">
			i am a caculator bubble
		</div>
	</div>
<?php
}
else{
include 'login.php';
}
include 'footer.php';
?>
