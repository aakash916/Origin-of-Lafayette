<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Origin of Lafayette Main Page</title>
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>



	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	    <link rel="stylesheet" href="css/mainpage.css">
  	<script type="text/javascript" src="jquery.min.js"></script>
      <script type="text/javascript" src="jquery.maphilight.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $('.map').maphilight();
        });
    </script>

</head>

<body>
	<div class="titleInfo">
		<h1 id="test1">Origin of Lafayette</h1>
	</div>
	

	<div class="contentAdmin">
		<div class="buttons btn-group-vertical btn-group-lg" role="group" aria-label="Button group">
			<button OnClick='location.href="login.php"' class = "btn btn-info">Login</button>
		</div>

	</div>
	
	<div class="elements">

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
		<td><a id="stmary" href="page2.php" target="_blank">St.Mary</a></td>
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
</div>

</body>
</html>
