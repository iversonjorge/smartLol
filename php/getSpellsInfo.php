<?php
	//getSpellsInfo.php
	include("conection.php");
	$search = "SELECT name, spellKey FROM spells WHERE id = {$_GET['spellId']};";
	$execute = mysqli_query($conection, $search);
	$json = "{";
	// 4º Preguntamos si NO funcionó
	if($execute == false){
		echo "Error en SQL.";
	} else {
		while($array = mysqli_fetch_array($execute)){
			$json .= '"name":"' . $array['name'] . '","key":"' . $array['spellKey'] . '"' ;
		}
	}
	$json .= "}";
	echo $json;
?>