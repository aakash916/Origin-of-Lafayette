<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/mainpage.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>HomePage</title>
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	  <script type="text/javascript" src="jquery.min.js"></script>
          <script type="text/javascript" src="jquery.maphilight.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $('.map').maphilight();
        });
    </script>
</head>
<body>
	<h1>Origin of Lafayette</h1>
	
	<div class="contentAdmin">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3 align="center">
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p align="center">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		<?php endif ?>
	</div>

	<a href="indexAdmin.php?logout='1'" style="color: red;"><button class = "buttonlogin">Logout</button></a>
	<a href="buildingForm.html" style="color: red;"><button class = "buttonlogin">Add Building</button></a>
	


	<div class = "img-container">
		<img src="images/Lafayettemap.jpg" alt="Map of Lafayatte" usemap="#lafayettemap" width="384" height="685" class="map" />
	<map name = "lafayettemap"/>
		<area shape="circle" coords="57,253,8" alt="St Mary District" href="">
		<area shape="circle" coords="145,262,8" alt="St Mary District" href="">
		<area shape="circle" coords="111,169,8" alt="St Mary District" href="">
		<area shape="circle" coords="192,185,8" alt="St Mary District" href="">
		<area shape="circle" coords="178,102,8" alt="St Mary District" href="">
		<area shape="circle" coords="243,290,8" alt="St Mary District" href="">
		<area shape="poly" id="green" rel="red,blue" href="#" coords="209,273,265,270,273,273,280,277,291,281,295,286,297,297,282,300,276,300,266,300,255,300,242,300,231,299,219,299,213,299,205,298,204,286,204,277" shape="poly">
	</map>
	</div>
	<div class = "table-placement">
	<table>
	<tr>
		<th>District list</th>
	</tr>
	<tr>
		<td><a id="downtown" href="webpage" target="_blank">Downtown</a></td>
	</tr>
	<tr>
		<td><a id="uppermain" href="webpage" target="_blank">Upper Main</a></td>
	</tr>
	<tr>
		<td><a id="centennial" href="webpage" target="_blank">Centennial</a></td>
	</tr>
	<tr>
		<td><a id="oldjefferson" href="webpage" target="_blank">Old Jefferson</a></td>
	</tr>
	<tr>
		<td><a id="parkmarry" href="webpage" target="_blank">Park Mary</a></td>
	</tr>
	<tr>
		<td><a id="stmary" href="page2.html" target="_blank">St.Mary</a></td>
	</tr>
	<tr>
		<td><a id="ninthsthill" href="webpage" target="_blank">Ninth St.Hill</a></td>
	</tr>
	<tr>
		<td><a id="ellsworth" href="webpage" target="_blank">Ellsworth</a></td>
	</tr>
	<tr>
		<td><a id="highlandpaer" href="webpage" target="_blank">Highland Paer</a></td>
	</tr>
	<tr>
		<td><a id="perrin" href="webpage" target="_blank">Perrin</a></td>
	</tr>
	</table>
</div> 	

</body>
</html>