<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Prueba</title>
</head>
<body>
	<h1>Prueba</h1>
	<p id="aca"></p>
	<input type="text" id="texto" value="jorch" method="post">
	<script type="text/javascript">
		var request = new XMLHttpRequest();
		pepe.onreadystatechange = function (){
			if(request.readyState == 4 && request.status == 200){
				data = JSON.parse(request.responseText);
				alert(data.name);
			}
		}
		request.open("GET", "../php/getSummonerByName.php?name=" + texto.value, true);
		request.send();
	</script>
</body>
</html>