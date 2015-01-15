<?php
require 'dbconnect.php';
if (isset($_GET['keyword'])){
  $keyword = $_GET['keyword'];
}
  if(!empty($keyword)){
    $table = 'products';
    $query = "SELECT `name` FROM $table WHERE `name` LIKE '".mysql_real_escape_string($keyword)."%'";
      if($query_run = mysql_query($query)){
	    while($query_row = mysql_fetch_assoc($query_run)) { 
	      echo $name = $query_row['name'].'<br>';
	    }
	  }
  }
?>