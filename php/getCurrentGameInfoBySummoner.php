<?php 
	//getCurrentGameInfoBySummoner.php
	include("../php/apiKey.php")
	$_GET['summonerId'];
	//$jorch = '236104';
	echo file_get_contents("https://la2.api.riotgames.com/lol/spectator/v3/active-games/by-summoner/{$_GET['summonerId']}?api_key={$apiKey}");
?>