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
		document.getElementById("cubeonLive").style.filter = "blur(10px) opacity(0.9)";
		document.getElementById("modal").classList.add("modal");
		document.getElementById("loader").classList.add("loader");
		setTimeout ('loadLiveData()', 5000); //calls the loadLiveData after waiting a hardcoded amount of seconds
	} else {
		alert("You must fill the Summoner Name text field");
	}
})
// This is the functionality of the button that searches the data on live pressing enter
document.getElementById("txtSearchBar").addEventListener("keypress", function (e) {
	var key = e.which || e.keyCode;
	if (key === 13 && document.getElementById("txtSearchBar").value != ""){
		document.getElementById("txtSearchBar").blur();
		document.getElementById("cubeonLive").style.filter = "blur(10px) opacity(0.5)";
		document.getElementById("modal").classList.add("modal");
		document.getElementById("loader").classList.add("loader");
		//load all the data before the modal and loader dissapears
		getSummonerByName();
		setTimeout ('loadLiveData()', 1000); //calls the loadLiveData after waiting a hardcoded amount of seconds
	}
})

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
	var request = new XMLHttpRequest();
	request.onreadystatechange = function (){
		if(request.readyState == 4 && request.status == 200){
			alert(request.responseText);
			if(isJson(request.responseText)){
				data = JSON.parse(request.responseText);
				summonerName.innerHTML = data.name;
				//getCurrentGameInfoBySummoner(data.id);

			} else {
				alert("mandaste fruta papa!");
			}
		}
	}
	request.open("GET", "php/getSummonerByName.php?name=" + txtSearchBar.value, true);
	request.send();
}

/*function getCurrentGameInfoBySummoner(summonerId){
	var request = new XMLHttpRequest();
	request.onreadystatechange = function (){
		if(request.readyState == 4 && request.status == 200){
			//Check if what I got is a JSON... if not I return a message saying that the player is not in game.
			if(isJson(request.responseText)){
				data = JSON.parse(request.responseText);
				alert(data);
			} else {
				alert("mandaste fruta papa!");
			}
		}
	}
	request.open("GET", "php/getCurrentGameInfoBySummoner.php?summonerId=" + summonerId);
	request.send();
}*/

function isJson(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}

//-----------------------/Riot Api Requests---------------------------------