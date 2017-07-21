<?php 
	//getRankingLeagueInfo.php
	include("../php/apiKey.php");
	echo file_get_contents("https://la2.api.riotgames.com/lol/league/v3/leagues/by-summoner/{$_GET['summonerId']}?api_key={$apiKey}");
?>