<?php 
	//getGamesPlayedByChampion.php
	include("../php/apiKey.php");
	//All ranked queues are included in the search
	echo file_get_contents("https://{$_GET['regionTag']}.api.riotgames.com/lol/match/v3/matchlists/by-account/{$_GET['accountId']}?season=9&queue=420&queue=440&queue=410&queue=41&queue=42&queue=9&queue=6&queue=4&champion={$_GET['championId']}&api_key={$apiKey}");
?>