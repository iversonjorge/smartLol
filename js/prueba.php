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