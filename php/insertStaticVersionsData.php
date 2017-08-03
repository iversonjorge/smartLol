<?php 
	//insertStaticVersionsData.php
	include("apiKey.php");
 	$json = file_get_contents("https://la2.api.riotgames.com/lol/static-data/v3/realms?api_key={$apiKey}");
 	$array = json_decode($json,true);
	include ('conection.php');
	$query = "";

	foreach ($array as $key => $value){
		if ($key == "n") {
			foreach ($value as $childKey => $childValue){
				$query .= "INSERT INTO versions (name, value) VALUES ( ". '"' . $childKey . '"' .", ". '"' . $childValue . '"' . ");";
			}
		} else{
			$query .= "INSERT INTO versions (name, value) VALUES ( ". '"' . $key . '"' .", ". '"' . $value . '"' . ");";
		}
	}
	$execute = mysqli_multi_query($conection, $query);
	// Preguntamos si hay error
	if ($execute) {
	    do {
	        // grab the result of the next query
	        if (($result = mysqli_store_result($conection)) === false && mysqli_error($conection) != '') {
	            echo "Query failed: " . mysqli_error($conection);
	        }
	    } while (mysqli_more_results($conection) && mysqli_next_result($conection)); // while there are more results
	} else {
	    echo "First query failed..." . mysqli_error($conection);
	}
?>