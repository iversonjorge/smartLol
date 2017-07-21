<?php 
	//getSummonerByName.php
	include("../php/apiKey.php");
	$name = urlencode($_GET['name']) ;
	echo file_get_contents("https://la2.api.riotgames.com/lol/summoner/v3/summoners/by-name/{$name}?api_key={$apiKey}");
?>