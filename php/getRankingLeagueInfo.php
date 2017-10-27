<?php 
	//getRankingLeagueInfo.php
	include("../php/apiKey.php");
	echo file_get_contents("https://{$_GET['regionTag']}.api.riotgames.com/lol/league/v3/positions/by-summoner/{$_GET['summonerId']}?api_key={$apiKey}");
?>