<?php 
	//getCurrentGameInfoBySummoner.php
//echo file_get_contents(
	$_GET['summonerId'];
	//$jorch = '236104';
	echo file_get_contents("https://la2.api.riotgames.com/lol/spectator/v3/active-games/by-summoner/{$_GET['summonerId']}?api_key=RGAPI-fa1ea219-063f-43bb-aa75-7cb0757e7740");
?>