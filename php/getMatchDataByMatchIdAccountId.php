<?php 
	//getMatchDataByMatchIdAccountId.php
	include("../php/apiKey.php");
	echo file_get_contents("https://la2.api.riotgames.com/lol/match/v3/matches/{$_GET['matchId']}?forAccountId={$_GET['accountId']}&api_key={$apiKey}");
?>