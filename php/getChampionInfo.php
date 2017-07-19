<?php
	//getChampionInfo.php
	include("../php/apiKey.php");
	echo file_get_contents("https://la2.api.riotgames.com/lol/static-data/v3/champions/{$_GET['championId']}?locale=en_US&tags=image&api_key={$apiKey}");
?>