<script>
$( document ).ready(function() {
	$('.login').css('background-color', '#FFFFB8');
	$('.login').css('border-radius', '5px');
	$('#loginbubble').hide();
	$('#loginbubble').slideDown(3000);
	$('#pass').fadeIn(20000);
	$('#noregister').fadeIn(20000);
});
</script>
<?php 
if (isset($_POST['username'])&&isset($_POST['password'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $passhash = md5($password);
  if (!empty($username)&&!empty($password)){
    $query = "SELECT `id` FROM `user` WHERE `username` = '".mysql_real_escape_string($username)."' AND `password` = '".mysql_real_escape_string($passhash)."'";
	if($query_run = mysql_query($query)){
	  $num_rows = mysql_num_rows($query_run);
	  if($num_rows==0){
	    echo 'Invalid Username or Password';
	  }
	  else if($num_rows==1){
	    $user_id = mysql_result($query_run,0,'id');
		$_SESSION['user_id']=$user_id;
		header('Location: index.php');
	  }
	}
  }
  else{
    echo 'Please enter Username and a Password';
  }
}
else{
}
?>
<div style="float: left;" align="center">
	<h3>Please Log In</h3><br>
	<form action ="<?php echo $current_file; ?>" method ="POST">
	<table id="Log In">
		<tr><td>Username: </td><td><input type="text" size="30" maxlength="32" name="username" id="username" /></td></tr>
		<tr><td>Password: </td><td><input type="password" size="30" name="password" id="password" autocomplete="off"/></td></tr>
		<tr><td colspan="2" align="right"><span id="reg_span" style="padding-right: 10px;"></span><button name="log_submit" id="log_submit" /><img src="img/enter.png"></img> Submit</button></td></tr>
	</table>
	</form>
	<br>

</div>
<div id="messagebox">
<div class="bubble" id="loginbubble">
<h3>Welcome to Usman's online portfolio!</h3>
<ul>
	<p><li>This is a php application which currently utilize MySql,JavaScript,jQuery,CSS and HTML.</li></p>
	<p><li>Please, keep in mind that this is a work in progress as I started this late December, 2014. As time goes by, I will incorporate more features & functionality.</li></p>
	<li>I strongly recommend that you visit a very brief register page next to gauge my skill level on server and client side validation. Thanks :)</li> 
</ul>
<br><hr>
<center>
	<p id="noregister" class="hidden">Don't want to register?</p>
	<div id="pass">
	Username: <i>test123</i>
	<br>
	Password: <i>pass123</i>
	</div>
	
</center>
	
</div>
</div>
