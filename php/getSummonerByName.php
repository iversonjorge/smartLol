<?php 
	//getSummonerByName.php
	include("../php/apiKey.php");
	echo file_get_contents("https://la2.api.riotgames.com/lol/summoner/v3/summoners/by-name/{$_GET['name']}?api_key={$apiKey}");
?>