<script>
$( document ).ready(function() {
	$('#memberbubble').show();
});
</script>
<?php
if (loggedin()){
?>
	<div id="members" style="float: left;">
<?php
		  $firstname = getuserinfo('firstname');
		  $lastname = getuserinfo('lastname');
		  ?><img src="img/hand.png"></img><?php
		  echo '<font size ="4" color ="009900"> '.$firstname.' '.$lastname.' </font>';
		  echo '<hr>';
		  echo 'Please select an option below to find information from on our';
		  echo '<br>';
		  echo '<font color ="0101DF">Suppliers, Employees, Customers </font> and <font color ="0101DF">Registered users.</font>';
?>
		<hr>
		<br>
		  <form id="inquiry" action = "index.php" method="post">
		  <img src="img/database.png"></img><select name ="find" id="indexFind" selected="user" onchange='submitInq()' >
		  <option value=""></option>
		  <option value="suppliers" style="color:#0101DF">Suppliers</option>
		  <option value="employees" style="color:#0101DF">Employees</option>
		  <option value="coustomers" style="color:#0101DF">Coustomers</option>
		  <option value="user" id="user" style="color:#0101DF">Reg. Users</option>
		  </select><br><br>
		  </form>
	  <script>
		$( document ).ready(function() {
		$("#indexFind").val("<?php if(isset($_POST['find'])){echo $_POST['find'];} ?>");
		});
		function submitInq(){
			$('#inquiry').unbind('submit').submit();
		}
	  </script>
<?php
	if(isset($_POST['find'])and!empty($_POST['find'])){
		$find=($_POST['find']);
		$query = "SELECT * FROM `$find`";
		if($find == 'user') {
			if($query_run = mysql_query($query)){
				while($query_row = mysql_fetch_assoc($query_run)) {
				   $name = $query_row['firstname'];
				   $username = $query_row['username'];
				   $email = $query_row['email'];
					echo '<font color ="009900">'.$name.'</font>'.'<p>username is:&nbsp;'.'<font color ="0101DF">'.$username.'</font>'.' &nbsp;and Email:&nbsp; '.'<font color ="0101DF">'.$email.'</font>'.' <br><br>'; 
				}
			}
		} else {
			if($query_run = mysql_query($query)){
				while($query_row = mysql_fetch_assoc($query_run)) {
				   $name = $query_row['name'];
				   $tel = $query_row['tel'];
				   $email = $query_row['email'];
					echo '<font color ="009900">'.$name.'</font>'.'<p>Telephone Number is:&nbsp;'.'<font color ="0101DF">'.$tel.'</font>'.' &nbsp;and Email:&nbsp; '.'<font color ="0101DF">'.$email.'</font>'.' <br><br>'; 
				}
			}
		}
	}
?>
	</div>
	<div id="messagebox">
		<div class="bubble" id="memberbubble">
			<h3>Simple querying data from MySql DB via PHP.</h3>
			<ul>
			<li>This page query different tables from the database.</li>
			<li>This is rather old method of database querying. Page reloads do not provide a good user experience. This is just to show basic understanding of concepts. </li>
			<li>I would rather use Ajax requests which is shown on the next page.</li>
			</ul>
		</div>
	</div>
<?php
}else{
	include 'login.php';
}
?>