<?php
	//getSpellsInfo.php
	include("../php/apiKey.php");
	echo file_get_contents("https://la2.api.riotgames.com/lol/static-data/v3/summoner-spells/{$_GET['spellId']}?locale=en_US&tags=image&api_key={$apiKey}");
?>