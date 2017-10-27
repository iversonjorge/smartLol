<?php 
	//getSummonerByName.php
	include("../php/apiKey.php");
	$name = urlencode($_GET['name']);
	$name = str_replace("+", "%20", $name);
	echo file_get_contents("https://{$_GET['regionTag']}.api.riotgames.com/lol/summoner/v3/summoners/by-name/{$name}?api_key={$apiKey}");
?>