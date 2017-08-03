<?php 
	//insertStaticSpellsData.php
	include("apiKey.php");
 	$json = file_get_contents("https://la2.api.riotgames.com/lol/static-data/v3/summoner-spells?locale=en_US&dataById=false&api_key={$apiKey}");
 	$array = json_decode($json,true);
	include ('conection.php');
	$query = "";
	$iterator = new RecursiveArrayIterator($array['data']);
	while ($iterator->valid()) {
		if ($iterator->hasChildren()) {
		    $query .= "INSERT INTO spells (name, description, summonerLevel, id, spellKey) VALUES ( ";
			foreach ($iterator->getChildren() as $key => $value) {
				if ($key == "id" || $key == "summonerLevel") {
					$query .= $value . ", ";
				} elseif($key == "key"){
					$query .= '"' . $value . '"' . "); ";
				} else{
					$query .= '"' . $value . '"' . ", ";
				}
			}
		}
		$iterator->next();
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