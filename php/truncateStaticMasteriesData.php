<?php 
	//insertStaticChampionData.php
	include ('conection.php');
	$query = "TRUNCATE TABLE masteriesdescriptions; TRUNCATE TABLE masteries;";
	$execute = mysqli_multi_query($conection, $query);
?>