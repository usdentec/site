<?php
$page_title = 'Login System';
$page_keywords = '';
$page_description = 'Sample Login System. USMAN';
?>
<?php include 'header.php'; 
if (loggedin()){
  include 'memberpage.php';
}
else{
  include 'login.php';
}
include 'footer.php'; 
 ?>