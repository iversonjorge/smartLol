<?php 
	//insertStaticMasteriesData.php
	include("apiKey.php");
 	$json = file_get_contents("https://la2.api.riotgames.com/lol/static-data/v3/masteries?locale=en_US&api_key={$apiKey}");
 	$array = json_decode($json,true);
	include ('conection.php');
	$query = "";
	$descriptionQuery = "";
	$iterator = new RecursiveArrayIterator($array['data']);
	while ($iterator->valid()) {
		if ($iterator->hasChildren()) {
		    $query = $query . "INSERT INTO masteries (id, name) VALUES ( ";
			foreach ($iterator->getChildren() as $key => $value) {
				if ($key == "name") {
					$query = $query . '"'. $value .'"' . ");";
				} elseif($key == "id"){
					$query = $query . $value . ", " ;
					$masteryId = $value;
				} else{
					foreach ($value as $childKey => $childValue){
						$descriptionQuery = $descriptionQuery . "INSERT INTO masteriesDescriptions (masteryId, masteryDescriptionId, description) VALUES ( " . $GLOBALS['masteryId'] . ", " . $childKey . ", ". '"' . $childValue . '"' . ");";
					}
				}
			}
		}
		$iterator->next();
    }
	$execute = mysqli_multi_query($conection, $query . $descriptionQuery);
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