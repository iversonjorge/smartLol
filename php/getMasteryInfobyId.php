
<?php
	//getMasteryInfobyId.php
	include("../php/apiKey.php");
	echo file_get_contents("https://la2.api.riotgames.com/lol/static-data/v3/masteries/{$_GET['id']}?locale=en_US&api_key={$apiKey}");
?>