// smartlol.js
//-----------------------HOME FUNCTIONS----------------------------
function changeTabs(tab){
	if (tab != "forum") {
		document.getElementById("cube"+(document.getElementsByClassName("active")[0].id)).style.display="none"; //quita
		document.getElementsByClassName("active")[0].classList.remove("active");
		document.getElementById(tab).classList.add("active");
		document.getElementById("cube"+tab).style.display="block";
	} else { alert("The forum is not finished yet!!! We'll let you know when it's done! =)");
	}
}

//Here I define the click functions of all the tabs
document.getElementById("home").addEventListener("click", function(){changeTabs("home")});
document.getElementById("onLive").addEventListener("click", function(){changeTabs("onLive")});
document.getElementById("offline").addEventListener("click", function(){changeTabs("offline")});
document.getElementById("championSelect").addEventListener("click", function(){changeTabs("championSelect")});
document.getElementById("statistics").addEventListener("click", function(){changeTabs("statistics")});
document.getElementById("forum").addEventListener("click", function(){changeTabs("forum")});
btnGetStarted.addEventListener("click", function(){changeTabs("onLive")});

//-----------------------/HOME FUNCTIONS----------------------------
//-----------------------ON LIVE FUNCTIONS----------------------------


// This is the functionality of the button that searches the data on live clicking the button
document.getElementById("searchSummonerLiveGame").addEventListener("click", function(){
	if(document.getElementById("txtSearchBar").value != ""){
		searchLiveData();
	} else {
		alert("You must fill the Summoner Name text field");
	}
})

// This is the functionality of the button that searches the data on live pressing enter
document.getElementById("txtSearchBar").addEventListener("keypress", function (e) {
	var key = e.which || e.keyCode;
	if (key === 13 && document.getElementById("txtSearchBar").value != ""){
		document.getElementById("txtSearchBar").blur();
		searchLiveData();
	}
})

function searchLiveData(){
	cubeonLive.style.filter = "blur(10px) opacity(0.9)";
	modal.classList.add("modal");
	loader.classList.add("loader");
	getTheJson("php/getSummonerByName.php?name=" + txtSearchBar.value, getSummonerByName, "Ese Summoner Name no existe!", null); //Start loading all the data
	setTimeout ('loadLiveData()', 1000); //calls the loadLiveData after waiting a hardcoded amount of seconds
}

//This is the function that is called after 5 seconds of delay on loading. It simulates that the data loading has been finished
function loadLiveData(){
	document.getElementById("cubeonLive").style.display="none";
	document.getElementById("cubeLiveData").classList.add("cubeOnLive");
	document.getElementById("cubeLiveData").classList.add("cubeActivate");
	setTimeout ('document.getElementById("modal").classList.remove("modal")', 1000);
	setTimeout ('document.getElementById("loader").classList.remove("loader")', 1000);

}
//-----------------------/ON LIVE FUNCTIONS----------------------------
//-----------------------Riot Api Requests---------------------------------

function getSummonerByName(){
	summonerName.innerHTML = data.name;
	getTheJson("php/getCurrentGameInfoBySummoner.php?summonerId=" + data.id, getCurrentGameInfoBySummoner, summonerName.innerHTML + " no esta en una partida en este momento!", null); //busco los datos del summoner
}

function getCurrentGameInfoBySummoner(){
	 getTheJson("json/matchMakingQueues.json", getQueueName, "", data.gameQueueConfigId); //paso el id del game a la tabla que busca los tipos de games
	 getTheJson("json/maps.json", getMapName, "", data.mapId); //paso el id del mapa a la tabla que busca los tipos de games
	 getTheJson("php/getCurrentServerStatus.php?regionTag=" + data.platformId, getServerName, "", null); //paso el id del mapa a la tabla que busca los tipos de games
}

function getQueueName(){
	for(var i = 0; i < data.queues.length; i++){
		if (data.queues[i].gameQueueConfigId == getQueueName.arguments[1]) {
			queueMapServer.innerHTML = data.queues[i].name;
		}
	}
}

function getMapName(){
	for(var i = 0; i < data.maps.length; i++){
		if (data.maps[i].mapId == getMapName.arguments[1]) {
			queueMapServer.innerHTML += " · " + data.maps[i].name;
		}
	}
}

function getServerName(){
	queueMapServer.innerHTML += " · " + data.name;
}

function getTheJson(url, callback, errorMessage, parameter){ 
	/*the parameters of this function are
	url: the url of the json
	callback: the function to call with the json as response
	errorMessage: the Message in case of error
	parameter: an optional parameter in case the callback function needs it*/
	var request = new XMLHttpRequest();
	request.onreadystatechange = function (){
		if(request.readyState == 4 && request.status == 200){
			if(isJson(request.responseText)){
				data = JSON.parse(request.responseText);
				callback(data, parameter);
			} else{
				alert(errorMessage);
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

//-----------------------/Riot Api Requests---------------------------------