<?php 
	//getCurrentServerStatus.php
	include("../php/apiKey.php");
	echo file_get_contents("https://{$_GET['regionTag']}.api.riotgames.com/lol/status/v3/shard-data?api_key={$apiKey}");
?>