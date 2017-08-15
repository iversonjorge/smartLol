<?php 
	//insertStaticChampionData.php
	include ('conection.php');
	$query = "TRUNCATE TABLE spells";
	$execute = mysqli_query($conection, $query);
?>