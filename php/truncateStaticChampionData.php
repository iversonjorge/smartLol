<?php 
	//insertStaticChampionData.php
	include ('conection.php');
	$query = "TRUNCATE TABLE champions";
	$execute = mysqli_query($conection, $query);
?>