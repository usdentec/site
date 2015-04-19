<?php
include 'header.php';
?>
<script>
$(document).ready(function(){
	$('#apibubble').fadeIn(3000);
});
</script>
<?php
if (loggedin()){
	$page_title = 'API Page';
?>
<!---HEADING---->
<div id="heading">
<img src="img/api.gif"></img>
</div>
<br>
<!---content---->
<div id="page-content">
<hr>
<?php
	if (!empty($_GET['location'])){
	/**
	* Building the url to access the google maps api to get lat. and lng. of input location.
	*/
		$maps_location = urlencode($_GET['location']);
		$maps_url = 'https://maps.googleapis.com/maps/api/geocode/json?address='.$maps_location;
		$maps_json = file_get_contents($maps_url);
		$maps_array = json_decode($maps_json, true);
		$lat = $maps_array['results'][0]['geometry']['location']['lat'];
		$lng = $maps_array['results'][0]['geometry']['location']['lng'];
	/**
	* Building url for Instagram api request and passing it the  lat. and lng. values
	* returned by the google maps api
	*/
		$cid= 'eec42870aaa342c787941cfbe6c35397';
		$instagram_url = 'https://api.instagram.com/v1/media/search?lat=' . $lat .'&lng=' . $lng .'&client_id=' . $cid;
		$instagram_json = file_get_contents($instagram_url);
		$instagram_array = json_decode($instagram_json, true);
	}
?>
  <center>
	<br>
	<h3>Find pictures from Instagram by loaction.</h3>
	<p>Type the name of location i.e Chicago, Disney World etc.</p>
	<img src="img/google.png"></img>
	<img src="img/instagram.jpg"></img>
	  <form action="/api.php" method="get">
		<input type="text" name="location"/>
		<button type="submit">Submit</button>
	  </form>
    <br>
<?php
    if(!empty($instagram_array)){
		foreach($instagram_array['data'] as $key=>$image){
			echo '<img src="'.$image['images']['low_resolution']['url'].'" alt=""/><br>';
		}
    }
?>
  </center>
</div>		
<!--MessageBox-->
<div id="messagebox">
	<div class="bubble" id="apibubble">
		<h3>APIs</h3>
		<ul>
			<li>The code will first hit Google API to get longitude & latitude of the input.</li>
			<li>Then it will hit Instagram API to find pictures with the same longitude and latitude.</li>
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
