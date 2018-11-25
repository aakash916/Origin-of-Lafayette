<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Origin of Lafayette</title>
</head>


<body>
	<?php
	$con = mysqli_connect('127.0.0.1', 'root', 'epicsDisc1', 'buildingData');
	
	if(!$con)
	{
		echo 'Connection to database could not be established';
	} 
	#else {
	#	echo 'Established connection';
	#}

	if(!mysqli_select_db($con,'buildingData'))
	{
		echo 'Database not Selected';
	}

	$Ranking = $_POST['ranking'];
	#echo $Ranking;
	if ($Ranking = "Outstanding") {
		$Ranking = 'O';
	}

	$sql = "SELECT * FROM buildingData WHERE Ranking = '$Ranking'";

	$results=mysqli_query($con,$sql);

	#echo $results; 
	if (mysqli_num_rows($results)>0) {
		while($row=mysqli_fetch_array($results)) {
			echo $row[1]." ".$row[2]." ".$row[3]." ".$row[4]." "." ".$row[5];
			echo "<br>";

		}
	}

mysqli_close($con);

	?>




</body>


</html>