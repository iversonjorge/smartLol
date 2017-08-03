<?php 
	//getCurrentVersions.php
	include("conection.php");
	$search = "SELECT * from versions";
	$execute = mysqli_query($conection, $search);
	$json = "{";
	// 4º Preguntamos si NO funcionó
	if($execute == false){
		echo "Error en SQL.";
	} else {
		$count = 0;
		while($array = mysqli_fetch_array($execute)){
			$count = $count + 1;
			if ($count == mysqli_num_rows($execute)) {//I check if it's the last row to not add the last ","
				$json .= '"' . $array['name'] . '" : "' . $array['value'] . '"';
			} else {
				$json .= '"' . $array['name'] . '" : "' . $array['value'] . '",';
			}
		}
	}
	$json .= "}";
	echo $json;
?>