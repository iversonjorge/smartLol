<?php 
	//getSummonerByName.php
//echo file_get_contents(
	$name= $_GET['name'];
	echo file_get_contents("https://la2.api.riotgames.com/lol/summoner/v3/summoners/by-name/{$_GET['name']}?api_key=RGAPI-d0bb24ec-f6a8-4397-af34-44834a19b6bd");
?>