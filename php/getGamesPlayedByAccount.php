<?php 
	//getGamesPlayedByAccount.php
	include("../php/apiKey.php");
	echo file_get_contents("https://{$_GET['regionTag']}.api.riotgames.com/lol/match/v3/matchlists/by-account/{$_GET['accountId']}?season=9&api_key={$apiKey}");
?>