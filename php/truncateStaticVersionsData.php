<?php 
	//insertStaticChampionData.php
	include ('conection.php');
	$query = "TRUNCATE TABLE versions";
	$execute = mysqli_query($conection, $query);
?>