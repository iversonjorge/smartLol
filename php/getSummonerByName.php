<?php 
	//getSummonerByName.php
	include("../apikey.php");

	function get_http_response_code($url) {
	    $headers = get_headers($url);
	    return substr($headers[0], 9, 3);
	}
	
	if(get_http_response_code("https://la2.api.riotgames.com/lol/summoner/v3/summoners/by-name/{$_GET['name']}?api_key={$apiKey}") != "200"){
    	echo "Mandaste fruta en el nombre del summoner";
	}else{
    	$name= $_GET['name'];
		echo file_get_contents("https://la2.api.riotgames.com/lol/summoner/v3/summoners/by-name/{$_GET['name']}?api_key={$apiKey}");
	}
?>