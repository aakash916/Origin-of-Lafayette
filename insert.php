<?php
	ob_start();
	$con = mysqli_connect('127.0.0.1', 'root', 'epicsDisc1');
	
	if(!$con)
	{
		echo 'Connection to database could not be established';
	}

	if(!mysqli_select_db($con,'buildingData'))
	{
		echo 'Database not Selected';
	}
	# Add code for District (dropdown) and architect


	$District = $_POST['district'];
	$Name = $_POST['buildingName'];
	$Address = $_POST['address'];
	$Rating = $_POST['rating'];
	$Section = $_POST['sectionInfo'];
	$Year = $_POST['year'];
	$Architecture = $_POST['architecture'];

	$sql = "INSERT INTO buildingData(District, Name, Address, Section, Ranking, Architecture, Year) VALUES ('$District', '$Name', '$Address', '$Section', '$Rating', '$Architecture', '$Year');";

	if(!mysqli_query($con,$sql))
	{
		echo 'Not able to insert entry into databse';
	} 
	else {
		echo 'Entry succesfully inserted into database';
	}

	header('refresh:2; url=index.html');
	exit;
?>