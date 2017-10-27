<?php 
	//getMatchDataByMatchIdAccountId.php
	include("../php/apiKey{$_GET['playerNumber']}.php");
	echo file_get_contents("https://{$_GET['regionTag']}.api.riotgames.com/lol/match/v3/matches/{$_GET['matchId']}?forAccountId={$_GET['accountId']}&api_key={$apiKey}");
?>