<?php 
	//getCurrentVersion.php
	include("../php/apiKey.php");
	echo file_get_contents("https://la2.api.riotgames.com/lol/static-data/v3/versions?api_key={$apiKey}");
?>