<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Prueba</title>
</head>
<body>
	<h1>Prueba</h1>
	<p id="aca"></p>
	<input type="text" id="summoner">
	<button onclick='getTheJson("../php/getSummonerByName.php?name=" + summoner.value, getSummonerByName, true, "Ese Summoner Name no existe!")'>Click Me!</button>
	<script type="text/javascript">

function getSummonerByName(){
	aca.innerHTML = data.name; //CAMBIAR DONDE LLENA ESTE innerHTML
	getTheJson("../php/getCurrentGameInfoBySummoner.php?summonerId=" + data.id, getCurrentGameInfoBySummoner, true, aca.innerHTML + " no esta en una partida en este momento!"); //busco los datos del summoner
}

function getCurrentGameInfoBySummoner(){
	console.log(data.gameQueueConfigId);
}

function getTheJson(url, callback, isJSONCheck, errorMessage){
	var request = new XMLHttpRequest();
	request.onreadystatechange = function (){
		if(request.readyState == 4 && request.status == 200){
			if (isJSONCheck) { //pregunta si el json necesita necesita ser chequeado
				if(isJson(request.responseText)){
					data = JSON.parse(request.responseText);
					callback(data);
				} else{
					alert(errorMessage);
				}
			}
		}
	}
	request.open("GET", url, true);
	request.send();
}


function isJson(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}
	</script>
</body>
</html>