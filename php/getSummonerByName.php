<?php 
	//getSummonerByName.php
//echo file_get_contents(
	$name= $_GET['name'];
	echo file_get_contents("https://la2.api.riotgames.com/lol/summoner/v3/summoners/by-name/{$_GET['name']}?api_key=RGAPI-fa1ea219-063f-43bb-aa75-7cb0757e7740");
?>