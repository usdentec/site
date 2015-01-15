<?php
$page_title = 'Registration Page';
$page_keywords = '';
$page_description = 'Registration Form';
?>
<?php include 'header.php'; 
?>
<script>
$( document ).ready(function() {
	$('.register').css('background-color', '#FFFFB8');
	$('.register').css('border-radius', '5px');
	$('#registerbubble').fadeIn(5000);
});
</script>
<?php
if (!loggedin()){
  if(isset($_POST['firstname'])&&isset($_POST['lastname'])&&isset($_POST['email'])&&isset($_POST['verifyemail'])&&isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['verifypassword'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $verifyemail=$_POST['verifyemail'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $verifypassword=$_POST['verifypassword'];
	$passhash = md5($password);
	
	if(!empty($firstname)&&!empty($lastname)&&!empty($email)&&!empty($verifyemail)&&!empty($username)&&!empty($password)&&!empty($verifypassword)){
      if($password==$verifypassword){
	    if($email==$verifyemail){
		  $query1 = "SELECT `username` FROM `user` WHERE `username` = '$username'";
		  $query2 = "SELECT `email` FROM `user` WHERE `email` = '$email'";
		  $query_run1 = mysql_query($query1);
		  $query_run2 = mysql_query($query2);
		  if (mysql_num_rows($query_run1)==1){
		    echo 'The user name '.$username.' is already taken. ';
		  }
		  else if (mysql_num_rows($query_run2)==1){
		    echo 'The e-mail '.$email.' is already registered. ';
		  }
		  else if(strlen($password)<5){  
		    echo 'your password must be at least 5 characters long';
		  }
		  else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		    echo 'Please enter a correct email address';
		  }
		  /*
		  else if(){
		  //any future validation
		  }*/
		  else{
			$query = "INSERT INTO `user` VALUES ('','".mysql_real_escape_string($username)."','".mysql_real_escape_string($passhash)."','".mysql_real_escape_string($email)."','".mysql_real_escape_string($firstname)."','".mysql_real_escape_string($lastname)."')";
			if ($query_run = mysql_query($query)){
			  header('Location: newregister.php');
			}
			else{
			  echo 'Oops! sorry something went wrong. Please try after some time.';
			}
		  }
		}
		else{
		  echo 'Email addresses do not match!';
		}
	  }
	  else{
	    echo 'Passwords do not match!';
	  }
    }
    else{
	echo 'All fields must be filled to register!';
	}
  }

?>
<div id="register" style="float: left;" align="center">
	<h3>Register Your Account Below</h3><hr><br>
	<form id = "register" action ="<?php echo $current_file; ?>" method ="POST">
	<table id="registration">
		<tr><td>First Name: </td><td><input type="text" size="30" name="firstname" onblur="validateF()" value="<?php if(isset($firstname)){ echo $firstname; }?>" id="firstname" /></td><td id="fval" class="hidden"><img src="img/check.gif"></img></td><td id="fvalx" class="hidden"><img src="img/cross.png"></img></td></tr>
		<tr><td>Last Name: </td><td><input type="text" size="30"name="lastname" onblur="validateL()" value="<?php if(isset($lastname)){ echo $lastname; }?>" id="lastname" /></td><td id="lval" class="hidden"><img src="img/check.gif"></img></td><td id="lvalx" class="hidden"><img src="img/cross.png"></img></td></tr>
		<tr><td>Email Address: </td><td><input type="text" size="30" name="email" onblur="validateE()" value="<?php if(isset($email)){ echo $email; }?>" id="email" /></td><td id="eval" class="hidden"><img src="img/check.gif"></img></td><td id="evalx" class="hidden"><img src="img/cross.png"></img></td></tr>
		<tr><td>Verfiy Email: </td><td><input type="text" size="30" name="verifyemail" onblur="validateE2()" id="verifyemail" /></td><td id="reval" class="hidden"><img src="img/check.gif"></img></td><td id="revalx" class="hidden"><img src="img/cross.png"></img></td></tr>
		<tr><td>Username: </td><td><input type="text" size="30" maxlength="15" name="username" onblur="validateU()" value="<?php if(isset($username)){ echo $username; }?>" id="username" /></td><td id="urval" class="hidden"><img src="img/check.gif"></img></td><td id="urvalx" class="hidden"><img src="img/cross.png"></img></td></tr>
		<tr><td>Password: </td><td><input type="password" size="30" name="password" id="password" onblur="validateP()" autocomplete="off"/></td><td id="prval" class="hidden"><img src="img/check.gif"></img></td><td id="prvalx" class="hidden"><img src="img/cross.png"></img></td></tr>
		<tr><td>Verify Password: </td><td><input type="password" size="30" name="verifypassword" id="verifypassword" onblur="validateP2()" /></td><td id="preval" class="hidden"><img src="img/check.gif"></img></td><td id="prevalx" class="hidden"><img src="img/cross.png"></img></td></tr>
		<tr><td colspan="2" align="right"></span><button name="reg_submit" id="reg_submit" /><img src="img/like.png"></img> Register Your Account</button></td></tr>
	</table>
	</form>
</div>
<div id="messagebox">
<div class="bubble" id="registerbubble">
<h3>Client Side for validation (jQuery)</h3>

	<ul>
	<li>All fields must be filled.</li>
	<li>Must provide a valid email address.</li>
	<li>Email and Verify Email must be same.</li>
	<li>Password and Verify Password must be same.</li>
	<li>Password should be at-least 5 characters long.</li>
	</ul>
	<br>
	<h3>Server Side validation & protection (PHP)</h3>
	<ul>
	<li>Protection from SQL injections by escaping and real escape string method.</li>
	<li>No empty field shall be be entered into database.</li>
	<li>Username must not already exist in the database.</li>
	<li>Email address must not already exist in the database.</li>
	(hint: try registering again with the same username or email.)
	<li>Password conversion to MD5 hash before inserting data into database.</li>
	</ul>

</div>
</div>

<div style="clear: both;"></div>
<?php
}
else if (loggedin())
{
echo 'You are already logged in ';
echo '<a href="index.php">Home Page</a>';

}
include 'footer.php'; ?>