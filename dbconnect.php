<?php
$host = 'localhost';
$uname = 'adminroot';
$pass ='parliment22';
$db = 'loginsystem';

if(!mysql_connect($host,$uname,$pass)){
  die('Problem Connecting to the Server!!');
} else if (!mysql_select_db($db)) {
  die('DB Select error');
}
?>