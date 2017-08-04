
<?php
	//getMasteryInfobyId.php
	include("conection.php");
	$search = "SELECT name FROM masteries WHERE id = {$_GET['id']};";
	$execute = mysqli_query($conection, $search);
	$json = "{";
	// 4º Preguntamos si NO funcionó
	if($execute == false){
		echo "Error en SQL.";
	} else {
		while($array = mysqli_fetch_array($execute)){
			$json .= '"name":"' . $array['name'] . '"';
		}
	}
	$json .= "}";
	echo $json;
	
?>