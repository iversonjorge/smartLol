// smartlol.js
//-----------------------HOME FUNCTIONS----------------------------
function changeTabs(tab){
	if (tab == "forum" || tab == "offline" || tab == "championSelect" || tab == "statistics") {
		alert("This feature is under construction. We'll let you know when it's finished! =)");
	} else {
		if (tab=="cubeLiveData") {
			/*
			cubeLiveData.classList.remove("cubeActivate");
			cubeLiveData.style.display="none";
			cubeOnLive.style.display="block";
			cubeOnLive.classList.add("cubeActivate");
			onLive.classList.add("active");
			cubeOnLive.style.filter = "none";
			txtSearchBar.value = "";
			txtSearchBar.focus();*/
		} else {
			if (lastOpenedCubeDataLive.innerHTML == 'true'){
				cubeLiveData.style.display="none";
				onLive.classList.remove("active");
			} else {
				string = (document.getElementsByClassName("active")[0].id);
				document.getElementById("cube"+ string[0].toUpperCase() + string.substring(1)).classList.add("cubeInactive");
				document.getElementsByClassName("active")[0].classList.remove("active");
			}
			document.getElementById(tab).classList.add("active");
			document.getElementById("cube"+tab[0].toUpperCase() + tab.substring(1)).classList.remove("cubeInactive");
			document.getElementById("cube"+tab[0].toUpperCase() + tab.substring(1)).classList.add("cubeActive");
		}
	}
}

//Here I define the click functions of all the tabs
home.addEventListener("click", function(){changeTabs("home")});
onLive.addEventListener("click", function(){
	if(cubeLiveData.classList.contains("active")){
		changeTabs("cubeLiveData");
	} else {
		changeTabs("onLive");
	}
});
offline.addEventListener("click", function(){changeTabs("offline")});
championSelect.addEventListener("click", function(){changeTabs("championSelect")});
statistics.addEventListener("click", function(){changeTabs("statistics")});
forum.addEventListener("click", function(){changeTabs("forum")});
btnGetStarted.addEventListener("click", function(){changeTabs("onLive")});

//-----------------------/HOME FUNCTIONS----------------------------
//-----------------------ON LIVE FUNCTIONS----------------------------

	//---------STEP 1 Execute the click/enter event to search the data----------

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
	if (key === 13){
		if (document.getElementById("txtSearchBar").value != ""){
			document.getElementById("txtSearchBar").blur();
			searchLiveData();
		} else{
			alert("You must fill the Summoner Name text field");
		}
	}
})

	//---------STEP 2 Raise the modal and start searching the data of the user wanted and the actual server version (needed for future calls) asynchronously-------------
function searchLiveData(){
	cubeOnLive.style.filter = "blur(10px) opacity(0.9)";
	modal.classList.add("modal");
	loader.classList.add("loader");
	getTheJson("php/getSummonerByName.php?name=" + txtSearchBar.value, getSummonerByName, "Ese Summoner Name no existe!", null, null, null); //Start loading all the data
	getTheJson("php/getCurrentVersions.php", getCurrentVersions, "Falló al buscar la version actual del servidor", null, null, null); //gets the current version of the data
}

	
	//--------STEP GET THE JSON!: This function needs an special note: for itself doesn't do anything, but when it's called triggers calls to APIs or db depends on the parameters it receives
//How it works? I pass the url, a callback function, an error in case of error or if I need to know which is the function calling it and 3 optional parameters.
//First: I create the ajax with the normal verification of status and stuff.
//Second: On the request open, I set url that is the url sent by parameter.
//Third: I ask if what I got as response is a json, so I call the other function isJson to verify it.
//Forth: If it's Json means that I got a correct response and I parse that response as Json and I sent to the next function (callback) passing all the parameters and the data got from the ajax.
//Fifth: If it's not Json, means that something went wrong, so it triggers the error message
//Sixth: If the errorMessage is "notPlaying" it means that the function who has called getTheJson is the one which verifies if the user is playing, so it returns the appropiate message.
//Seventh: If the errorMessage is "noRankedGamesPlayedWithCurrentChampion" means that the function which has called getTheJson is the one that verifies the ranked games of a player, so it returns the appropiate message.
//Eight: If the errorMessage is "noGamesPlayed" means that the player never has played before so it fills the preferred rol as "-"
//Nine: All the other messages are shown in the log

function getTheJson(url, callback, errorMessage, parameter1, parameter2, parameter3){ 
	/*the parameters of this function are
	url: the url of the json
	callback: the next function to call with the json as response, if callback is null the json will be returned to the function who has called this function.
	errorMessage: the Message in case of error
	parameters: optional parameters in case the callback function needs them*/
	var request = new XMLHttpRequest();//I create the ajax with the normal verification of status and stuff
	request.onreadystatechange = function (){
		if(request.readyState == 4 && request.status == 200){
			if(isJson(request.responseText)){//I ask if what I got as response is a json, so I call the other function isJson to verify it.
				data = JSON.parse(request.responseText);//If it's Json means that I got a correct response and I parse that response as Json and I sent to the next function (callback) passing all the parameters and the data got from the ajax.
				callback(data, parameter1, parameter2, parameter3);
			} else{//If it's not Json, means that something went wrong, so it triggers the error message
				if(errorMessage=="notPlaying"){ //If the errorMessage is "notPlaying" it means that the function which has called getTheJson is function which verifies if the user is playing, so it returns the appropiate message.
					alert(parameter1 + " is not in a game");
				} else{
					if(errorMessage=="noRankedGamesPlayedWithCurrentChampion"){//If the errorMessage is "noRankedGamesPlayedWithCurrentChampion" means that the function which has called getTheJson is the one that verifies the ranked games of a player, so it returns the appropiate message.
						zeroGamesPlayed(parameter1);
					} else{
						if (errorMessage=="noGamesPlayed") {//If the errorMessage is "noGamesPlayed" means that the player never has played before so it fills the preferred rol as "-"
							document.getElementById("mains"+parameter1).innerHTML = "-";
						} else {
							console.log(errorMessage);//All the other messages are shown in the log
						}
					}
				}
			}
		}
	}
	request.open("GET", url, true);//On the request open I set url that is the url sent by parameter.
	request.send();
}

//Function called by the getTheJson to know if what the API returned is an error or is good data. If it's an error, it triggers a message which is sent by parameter.
function isJson(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}


//Receives the current versions and sets them in "global variables".
function getCurrentVersions(){
	cssCurrentVersion.innerHTML = data.css;
	ddCurrentVersion.innerHTML = data.dd;
	lCurrentVersion.innerHTML = data.l;
	itemCurrentVersion.innerHTML = data.item;
	runeCurrentVersion.innerHTML = data.rune;
	masteryCurrentVersion.innerHTML = data.mastery;
	summonerCurrentVersion.innerHTML = data.summoner;
	championCurrentVersion.innerHTML = data.champion;
	profileIconCurrentVersion.innerHTML = data.profileicon;
	mapCurrentVersion.innerHTML = data.map;
	languageCurrentVersion.innerHTML = data.language;
	stickerCurrentVersion.innerHTML = data.sticker;
	vCurrentVersion.innerHTML = data.v;
	lgCurrentVersion.innerHTML = data.lg;
	cdnCurrentVersion.innerHTML = data.cdn;
}

	//---------STEP 3: I receive the summoner data and the fun starts. With that data I set global variables with the name, id and accountId of the player(needed for later) and I start searching the info of the current game if the user is playing (next line)
	// otherwise returns a message indicating that the user is not in a game. You can notice that there are 2 calls in the else. I reuse this function later on because I needed the same call to the API. So to differenciate if it's the first (next line)
	// time I was calling to this function I look if the summoner name of the player I was looking for is already set. If it's not set, it means is the first time I call this function. But if it is, means that is later in the search and the (next line)
	//---------STEP 6 starts: If you haven't gone for the intermediate steps (4 and 5) ignore this message and go back later for the STEP 6
	// So First: I fetch the games played by that champion to see how the player performed with it. (To be continued on STEP 7)
	// Second: I fetch all the games played (ranked and normal aswell) with the account to know what is the preferred rol of the player. (To be continued on STEP 8)
	// Hey! Go back to the future! I mean scroll down to STEP 7 to follow what's next.

function getSummonerByName(){
	if (summonerName.innerHTML == "") {
		summonerName.innerHTML = data.name;
		searchedSummonerId.innerHTML = data.id;
		searchedAccountId.innerHTML = data.accountId;
		getTheJson("php/getCurrentGameInfoBySummoner.php?summonerId=" + data.id, getCurrentGameInfoBySummoner, "notPlaying", summonerName.innerHTML, null, null); //search the summoner data
	} else {
	 	getTheJson("php/getGamesPlayedByChampion.php?championId=" + getSummonerByName.arguments[2] + "&accountId=" + data.accountId , getGamesPlayedByChampion, "noRankedGamesPlayedWithCurrentChampion", getSummonerByName.arguments[1],  data.accountId, null); //I fetch the games played by that champion to see how the player performed with it.
	 	getTheJson("php/getGamesPlayedByAccount.php?accountId=" + data.accountId , getGamesPlayedByAccount, "noGamesPlayed", getSummonerByName.arguments[1],  data.accountId, null); //I fetch all the games played (ranked and normal aswell) with the account to know what is the preferred rol of the player.
	}
}

	//---------STEP 4: I receive all the info of the current game. So first of all I search the queue (queue = game type) of the current game.
	//Second: I fetch the map name of the current game.
	//Third: I fetch the server region to get the name of the region.
	//Forth: Start looping for all the players in game
	//Fifth: I fetch the player name
	//Sixth: I fetch the champion info to know what url image I need
	//Seventh/Eight: The players have 2 spells so I need 2 calls to get the url images of the spells
	//Ninth: I fetch the ranking league of the player
	//Tenth: I go back to the step 1 (getSummonerByName) to get the user info of all the players of the game
	//Eleventh: I have the id of the mastery so I can search directly to the url.
	//Twelfth: But I don't have the name of the mastery, so I go to search to the api the name for the accessibility users.

function getCurrentGameInfoBySummoner(){
	 getTheJson("json/matchMakingQueues.json", getQueueName, "Falló al buscar la queue", data.gameQueueConfigId, null, null); //I search the current queue name
	 getTheJson("json/maps.json", getMapName, "Falló al buscar el mapa", data.mapId, null); //I search the map name of the current game.
	 getTheJson("php/getCurrentServerStatus.php?regionTag=" + data.platformId, getServerName, "Falló al buscar el status del servidor", null, null, null); //I search the server region to get the name of the region.
	 for(var i = 0; i < data.participants.length; i++){
	 	document.getElementById("playerName"+i).innerHTML = data.participants[i].summonerName;//I get the player name
	 	getTheJson("php/getChampionInfo.php?championId=" + data.participants[i].championId, getChampionsImgsUrl, "Falló al buscar la imagen del Champion", i, null, null); //I get the champion info to know what url image I need
	 	getTheJson("php/getSpellsInfo.php?spellId=" + data.participants[i].spell1Id, getSpellsImgsUrl, "Falló al buscar el Spell 0", i, 0, null); //The players have 2 spells so I need 2 calls to get the url images of the spells(spell 1)
	 	getTheJson("php/getSpellsInfo.php?spellId=" + data.participants[i].spell2Id, getSpellsImgsUrl, "Fallo al buscar el Spell 1", i, 1, null); //The players have 2 spells so I need 2 calls to get the url images of the spells(spell 2)
	 	getTheJson("php/getRankingLeagueInfo.php?summonerId=" + data.participants[i].summonerId, getRankedInfo, "Fallo al buscar la info de ranked", i, data.participants[i].summonerId, null); //I get the ranking league of the player
		getTheJson("php/getSummonerByName.php?name=" + data.participants[i].summonerName, getSummonerByName, "Falló al buscar la información del Summoner By Name", i, data.participants[i].championId, null); //I go back to the step 1 (getSummonerByName) to get the user info of all the players of the game
	 	for(var n = 0; n < data.participants[i].masteries.length; n++){
	 		if (data.participants[i].masteries[n].masteryId == 6161 || data.participants[i].masteries[n].masteryId == 6162 || data.participants[i].masteries[n].masteryId == 6164 || data.participants[i].masteries[n].masteryId == 6361 || data.participants[i].masteries[n].masteryId == 6362 || data.participants[i].masteries[n].masteryId == 6363 || data.participants[i].masteries[n].masteryId == 6261 || data.participants[i].masteries[n].masteryId == 6262 || data.participants[i].masteries[n].masteryId == 6263 ) {
	 			document.getElementById("mastery"+i).src = cdnCurrentVersion.innerHTML+"/"+championCurrentVersion.innerHTML+"/img/mastery/"+data.participants[i].masteries[n].masteryId+".png"; //I have the id of the mastery so I can search directly to the url.
	 			getTheJson("php/getMasteryInfobyId.php?id=" + data.participants[i].masteries[n].masteryId, getMasteryInfobyId, "Fallo al buscar la info de la maestria por id", i, null, null); //But I don't have the name of the mastery, so I go to search to the api the name for the accessibility users.
	 		}
	 	}

	 }
}

	//---------STEP 5: Here are all the functions I've search on the step 4

//I got the queue id so I search for the name of it
function getQueueName(){
	for(var i = 0; i < data.queues.length; i++){
		if (data.queues[i].gameQueueConfigId == getQueueName.arguments[1]) {//I get the queue id so I search for the name of it
			queueMapServer.innerHTML = data.queues[i].name;
		}
	}
}

//I got the map id so I search for the name of it
function getMapName(){
	for(var i = 0; i < data.maps.length; i++){
		if (data.maps[i].mapId == getMapName.arguments[1]) {//I get the map id so I search for the name of it
			queueMapServer.innerHTML += " · " + data.maps[i].name;
		}
	}
}

//I got the server name
function getServerName(){
	queueMapServer.innerHTML += " · " + data.name;
}

//I got the champions data so I complete the url with it
function getChampionsImgsUrl(){
	document.getElementById("championImgSmall"+getChampionsImgsUrl.arguments[1]).src = cdnCurrentVersion.innerHTML+"/"+championCurrentVersion.innerHTML+"/img/champion/" + data.key + ".png";
	document.getElementById("championImgSmall"+getChampionsImgsUrl.arguments[1]).alt= data.name + " small image";
	document.getElementById("championImg"+getChampionsImgsUrl.arguments[1]).src = cdnCurrentVersion.innerHTML+"/img/champion/loading/"+ data.key + "_0.jpg";
	document.getElementById("championImg"+getChampionsImgsUrl.arguments[1]).alt= data.name + " image";
}

//I got the spells data so I complete the url with it
function getSpellsImgsUrl(){
	document.getElementById("summoner"+getSpellsImgsUrl.arguments[1]+"Spell"+getSpellsImgsUrl.arguments[2]).src = cdnCurrentVersion.innerHTML+"/"+championCurrentVersion.innerHTML+"/img/spell/"+ data.key +".png";
	document.getElementById("summoner"+getSpellsImgsUrl.arguments[1]+"Spell"+getSpellsImgsUrl.arguments[2]).alt= data.name + " image";
}

//I got the ranked data so I look at it to fill the containers. If the user don't have games played, I fill the containers with hardcoded data (0 games) and the provisional ranked icon.
function getRankedInfo(){
	if (data != ""){
		if(data[0].playerOrTeamId == getRankedInfo.arguments[2]){
			document.getElementById("gamesPlayed"+getRankedInfo.arguments[1]).innerHTML = "W: " + data[0].wins + "   L: " + data[0].losses;
			document.getElementById("tier"+getRankedInfo.arguments[1]).innerHTML = data[0].rank;
			document.getElementById("rankedLeague"+getRankedInfo.arguments[1]).src = "images/rankedIcons/" + data[0].tier + "_" + data[0].rank + ".png";
			document.getElementById("rankedLeague"+getRankedInfo.arguments[1]).alt = data[0].tier+" Icon";
		}
	} else{
		document.getElementById("gamesPlayed"+getRankedInfo.arguments[1]).innerHTML = "W: 0   L: 0";
		document.getElementById("tier"+getRankedInfo.arguments[1]).innerHTML = "";
		document.getElementById("rankedLeague"+getRankedInfo.arguments[1]).src = "images/rankedIcons/provisional.png";
		document.getElementById("rankedLeague"+getRankedInfo.arguments[1]).alt = "Unranked Icon";
	}
}

//I got the mastery data so I complete the alt of the mastery image with it
function getMasteryInfobyId(){
	document.getElementById("mastery"+getMasteryInfobyId.arguments[1]).alt = data.name + " mastery";
}

	//---------STEP 6: Yes, we have to go back to the getSummonerByName function. Back to the past!(scroll up!)

	//---------STEP 7: Remember STEP 6? I had 2 calls 1 for games played by Account and another for games played by champion in ranked.
	// In this step will focus on games played by account the other call is on STEP 8
	// I got the total games of the account so:
	//First: I loop the data to count how mutch games I have per rol.
	//Second: I make an array of results to compare which is the most used rol

function getGamesPlayedByAccount(){
	var positionTop = 0;
	var jg = 0;
	var mid = 0;
	var adc = 0;
	var supp = 0;
	for (var n = 0; n < data.matches.length; n++){//I loop the data to count how mutch games I have per rol.
		switch(data.matches[n].lane) {
    		case "TOP":
    			positionTop = positionTop+1;
        	break;
    		case "JUNGLE":
        		jg = jg+1;
        	break;
        	case "MID":
        		mid = mid+1;
        	break;
    		case "BOTTOM":
    			if (data.matches[n].role == "DUO_CARRY") {
    				adc = adc+1;
    			} else{
    				supp = supp+1;
    			}
    		break;
    	}
    }

    //I make an array of results to compare which is the most used rol
    var positions = [["TOP", positionTop, parseInt(positionTop * 100 / parseInt(data.matches.length))],["JUNGLE", jg, parseInt(jg * 100 / parseInt(data.matches.length))],["MID", mid, parseInt(mid * 100 / parseInt(data.matches.length))],["ADC", adc, parseInt(adc * 100 / parseInt(data.matches.length))],["SUPP", supp, parseInt(supp * 100 / parseInt(data.matches.length))]];
    firstMain = positions[0];
    firstMainId = 0;
    for(var n = 1; n <= 4; n++){
    	if ( firstMain[1] < positions[n][1] ) {
    		firstMain = positions[n];
    		firstMainId = n;
    	}
    }
    document.getElementById("mains"+getGamesPlayedByAccount.arguments[1]).innerHTML = firstMain[0]+" ("+firstMain[2]+"%)";
}


//---------STEP 8: This is the hardest part of the code. I got the games played by champion, but I just go the ID of the matches, not the performance of the player for each game. So I need to search game by game and look for the performance of the player.
//First: Things gets tricky. Because I need to do things after all the information is loaded later on (like give a format the information and close the modal that is showing a "loading" right now) I need to know when all this calls finish for all the players.(next line)
	//So I initialize a counter for the current player whos running this function which later on I will set the counter on 1 as a sign that I've finished loading all the data for this player.
//Second: Things gets more tricky. Maybe is the first time of the user with the current champion so if it's the case I call a function which fills the containers with harcoded data with information as 0 (0 games and all that stuff)
//Third: Things gets way more tricky. Sometimes Riots f*cks up (they are humans of course!) or the just want to make your things more difficult, so I've found some cases where you are fetching games for some server, and it returns you games of other servers.(next line)
	//That implodes your code. So... you have to make sure to erase that data of the json.
//Forth: Well the life of the developer isn't sweet, so to make things harder, if you don't have a production key, Riot limits your calls. Which means that if you have 1000 games with a champion I just have to fetch the last 50 games if I want my app works.(next line)
	//so I cut all the data older than 50 games.
//Fifth: Because the reason I gave you on the First part of this step I need to know when this champion finish to load all the games. So I created a flag to know when is the last game. It starts on false. Later on it will activate (true) with the last game.
//Sixth: Start looping all over the matches.
//Seventh: If it's the last match to search changes the flat to true and to send it to the getMatchDataByMatchIdAccountId.
//Eight: Later on I will need a total counter for each match searched (to do some average counts) so I count every match I call in a "global variable"
//Ninth: Fetch the info of each match
function getGamesPlayedByChampion(){
	document.getElementById("championTotalGames"+getGamesPlayedByChampion.arguments[1]).innerHTML = 0;//So I initialize a counter for the current player whos running this function which later on I will set the counter on 1 as a sign that I've finished loading all the data for this player.
	if (data.matches.length==0) {
		zeroGamesPlayed(getGamesPlayedByChampion.arguments[1]);//Maybe is the first time of the user with the current champion so if it's the case I call a function which fills the containers with harcoded data with information as 0 (0 games and all that stuff)
	} else{
		for (var n = 0; n < data.matches.length; n++){ //I've found some cases where you are fetching games for some server, and it returns you games of other servers. That implodes your code. So... you have to make sure to erase that data of the json.
			if(data.matches[n].platformId!="LA2"){
				data.matches.splice(n,1);
			}
		}
		if (data.matches.length > 50){ // Fetch the last 50 games if I want my app works.
			data.matches.splice(50,(data.matches.length-50));
		}
		lastMatch = false;//I created a flag to know when is the last game. It starts on false. Later on it will activate (true) with the last game.
		for (var n = 0; n < data.matches.length; n++){//Start looping all over the matches.
			if (document.getElementById("championTotalGames"+getGamesPlayedByChampion.arguments[1]).innerHTML<=49) {
				if (n == (data.matches.length-1)) {lastMatch = true;}//If it's the last match to search changes the flat to true and to send it to the getMatchDataByMatchIdAccountId.
				document.getElementById("championTotalGames"+getGamesPlayedByChampion.arguments[1]).innerHTML = parseInt(document.getElementById("championTotalGames"+getGamesPlayedByChampion.arguments[1]).innerHTML)+1;//I count every match I call in a "global variable"
				getTheJson("php/getMatchDataByMatchIdAccountId.php?matchId=" + data.matches[n].gameId + "&accountId=" + getGamesPlayedByChampion.arguments[2]+ "&playerNumber=" + getGamesPlayedByChampion.arguments[1], getMatchDataByMatchIdAccountId, "Falló al buscar la información del Match by Id de match", getGamesPlayedByChampion.arguments[1], getGamesPlayedByChampion.arguments[2], lastMatch); //Fetch the info of each match
			}
		}
	}
}

//---------STEP 9: as I said before maybe is the first time of the user with the current champion so 
//First: I fill the containers with harcoded data with information as 0 (0 games and all that stuff).
//Second: I call the function summonerLoaded which counts +1 when each summoner has finished loading. This is very important to know when all the players are already loaded.
function zeroGamesPlayed(i){
	document.getElementById("winLoss"+i).innerHTML = "0 / 0 (0%)";
	document.getElementById("winLoss"+i).classList.add("statisticYellow");
	document.getElementById("kills"+i).innerHTML = "0";
	document.getElementById("deaths"+i).innerHTML = "0";
	document.getElementById("assists"+i).innerHTML = "0";
	document.getElementById("cs"+i).innerHTML = "0";
	summonerLoaded();//I call the function summonerLoaded which counts +1 when each summoner has finished loading.
}

//---------STEP 10: aaaaaaaand finally!!! After all that stupid code, here I have the performance of the player on each game.
//This function is being called for each match of each player has played with the champion has selected, so it will be run a lot of times.
//First: I got the Match data by account, so first I have to ask if it's the participant(player) that I'm looking for.
//Second: if the game was won by the player: +1, if lost: -1 (will make sense later on)
//Third: fill the containers adding all the data (will make sense later on)
//Fourth: Remember the flag asking if it's the last match of the user? Well here it ask if it's true, if it is, calls the function summonerLoads
function getMatchDataByMatchIdAccountId(){
	for (var n = 0; n < data.participantIdentities.length; n++){
		if (data.participantIdentities[n].player.currentAccountId == getMatchDataByMatchIdAccountId.arguments[2]){
		//I got the Match data by account, so first I have to ask if it's the participant(player) that I'm looking for.
			if (data.participants[n].stats.win){//if the game was won by the player: +1, if lost: -1 (will make sense later on)
				document.getElementById("win"+getMatchDataByMatchIdAccountId.arguments[1]).innerHTML = parseInt(document.getElementById("win"+getMatchDataByMatchIdAccountId.arguments[1]).innerHTML) + 1;
			}else{
				document.getElementById("loss"+getMatchDataByMatchIdAccountId.arguments[1]).innerHTML = parseInt(document.getElementById("loss"+getMatchDataByMatchIdAccountId.arguments[1]).innerHTML) + 1;
			}
			//fill the containers adding all the data (will make sense later on)
			document.getElementById("kills"+getMatchDataByMatchIdAccountId.arguments[1]).innerHTML = parseInt(document.getElementById("kills"+getMatchDataByMatchIdAccountId.arguments[1]).innerHTML) + parseInt(data.participants[n].stats.kills);
			document.getElementById("deaths"+getMatchDataByMatchIdAccountId.arguments[1]).innerHTML = parseInt(document.getElementById("deaths"+getMatchDataByMatchIdAccountId.arguments[1]).innerHTML) + parseInt(data.participants[n].stats.deaths);
			document.getElementById("assists"+getMatchDataByMatchIdAccountId.arguments[1]).innerHTML = parseInt(document.getElementById("assists"+getMatchDataByMatchIdAccountId.arguments[1]).innerHTML) + parseInt(data.participants[n].stats.assists);
			document.getElementById("cs"+getMatchDataByMatchIdAccountId.arguments[1]).innerHTML = parseInt(document.getElementById("cs"+getMatchDataByMatchIdAccountId.arguments[1]).innerHTML) + parseInt(data.participants[n].stats.totalMinionsKilled) + parseInt(data.participants[n].stats.neutralMinionsKilled);
		}
	}
	if (getMatchDataByMatchIdAccountId.arguments[3]) {  //Remember the flag asking if it's the last match of the user? Well here it ask if it's true, if it is, calls the function summonerLoads
		summonerLoaded();
	}
}

//---------STEP 11: One of the trickiest part was to think how do I know when all the requests are finished. I added a counter for each player. When it finished loading, I call this function (summonerLoaded) and I add 1. When the count is 10, we have all the players done.
//First: Sum 1 to let the know the counter this player is finished.
//Second: When the counter hits 10 it means all the requests are finished and it's time to give a format to the data.
function summonerLoaded(){
	summonersLoaded.innerHTML = parseInt(summonersLoaded.innerHTML) + 1;//Sum 1 to let the know the counter this player is finished.
	if (parseInt(summonersLoaded.innerHTML) == 10) { //When the counter hits 10 it means all the requests are finished and it's time to give a format to the data.
		formatMatchData();
	}
}

//---------STEP 12: Give a format to the data. This function does pretty much it.

function formatMatchData(){
	for (var i = 0; i <= 9; i++){
		if (document.getElementById("championTotalGames"+i).innerHTML != 0){
			totalGames = parseInt(document.getElementById("championTotalGames"+i).innerHTML);
			losses = document.getElementById("loss"+i).innerHTML;
			wins = document.getElementById("win"+i).innerHTML;
			winLossPercent = (wins*100/totalGames).toFixed(0);
			document.getElementById("wlAverage"+i).innerHTML = winLossPercent;
			if (winLossPercent<=47){
				document.getElementById("winLoss"+i).classList.add("statisticRed");
			} else if(winLossPercent<=53){
				document.getElementById("winLoss"+i).classList.add("statisticYellow");
			} else{
				document.getElementById("winLoss"+i).classList.add("statisticGreen");
			}
			document.getElementById("kills"+i).innerHTML = (parseInt(document.getElementById("kills"+i).innerHTML)/totalGames).toFixed(1);
			document.getElementById("deaths"+i).innerHTML = (parseInt(document.getElementById("deaths"+i).innerHTML)/totalGames).toFixed(1);
			document.getElementById("assists"+i).innerHTML = (parseInt(document.getElementById("assists"+i).innerHTML)/totalGames).toFixed(1);
			document.getElementById("cs"+i).innerHTML = (parseInt(document.getElementById("cs"+i).innerHTML)/totalGames).toFixed();
		}
	}
	loadLiveData();
}

//---------STEP 13: Hide the modal and the loader and show the div with all the data loaded.

function loadLiveData(){
	toggleCubeData(true);
	setTimeout ('document.getElementById("modal").classList.remove("modal")', 1000);
	setTimeout ('document.getElementById("loader").classList.remove("loader")', 1000);

}

function toggleCubeData(activate){
	if(activate){
	cubeOnLive.classList.remove("cubeActive");
	cubeOnLive.classList.add("cubeInactive");
	cubeLiveData.classList.remove("cubeInactive");
	cubeLiveData.classList.add("cubeActive");
	cubeLiveData.classList.add("cubeActivate");
	lastOpenedCubeDataLive.innerHTML = "true";
	} else{
	cubeLiveData.classList.remove("cubeActive");
	cubeLiveData.classList.add("cubeInactive");
	cubeOnLive.classList.remove("cubeInactive");
	cubeOnLive.classList.add("cubeActive");
	cubeOnLive.classList.add("cubeActivate");
	lastOpenedCubeDataLive.innerHTML = "false";
	}
}

function searchAgain(){
	cleanOnLiveData();
	toggleCubeData(false);
}

function cleanOnLiveData(){
	summonerName.innerHTML ="";
	queueMapServer.innerHTML="";
	for (var i = 0; i <= 9; i++){
		document.getElementById("championImg"+i).url="";
		document.getElementById("championImg"+i).alt="";
		document.getElementById("playerName"+i).innerHTML="";
		document.getElementById("championImgSmall"+i).url="";
		document.getElementById("championImgSmall"+i).alt="";
		document.getElementById("summoner"+i+"Spell0").url="";
		document.getElementById("summoner"+i+"Spell0").alt="";
		document.getElementById("summoner"+i+"Spell1").url="";
		document.getElementById("summoner"+i+"Spell1").alt="";
		document.getElementById("mastery"+i).url="";
		document.getElementById("mastery"+i).alt="";
		document.getElementById("gamesPlayed"+i).innerHTML="";
		document.getElementById("rankedLeague"+i).url="";
		document.getElementById("rankedLeague"+i).alt="";
		document.getElementById("tier"+i).innerHTML="";
		document.getElementById("tier"+i).innerHTML="";
		document.getElementById("win"+i).innerHTML=0;
		document.getElementById("loss"+i).innerHTML=0;
		document.getElementById("wlAverage"+i).innerHTML=0;
		document.getElementById("kills"+i).innerHTML=0;
		document.getElementById("deaths"+i).innerHTML=0;
		document.getElementById("assists"+i).innerHTML=0;
		document.getElementById("cs"+i).innerHTML=0;
		document.getElementById("mains"+i).innerHTML="";
	}
}

//-----------------------/ON LIVE FUNCTIONS----------------------------