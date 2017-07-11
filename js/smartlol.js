// smartlol.js
//-----------------------Global Variables--------------------------
var apiKey = "RGAPI-581d3892-95ab-478a-808d-ce8b97044e1d";
var summonerName = "";
var summonerId = "";
var summonerAccountId = "";
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
		setTimeout ('loadLiveData()', 5000); //calls the loadLiveData after waiting a hardcoded amount of seconds
	}
})

//This is the function that is called after 5 seconds of delay on loading. It simulates that the data loading has been finished
function loadLiveData(){
	document.getElementById("cubeonLive").style.display="none";
	document.getElementById("cubeLiveData").classList.add("cubeOnLive");
	document.getElementById("cubeLiveData").classList.add("cubeActivate");
	//load all the data before the modal and loader dissapears
	getSummonerByName();
	//console.log(summonerName + " " + summonerId + " " + summonerAccountId);
	setTimeout ('document.getElementById("modal").classList.remove("modal")', 1000);
	setTimeout ('document.getElementById("loader").classList.remove("loader")', 1000);

}
//-----------------------/ON LIVE FUNCTIONS----------------------------
//-----------------------Riot Api Requests---------------------------------

function getSummonerByName(){
	request = 'https://la2.api.riotgames.com/lol/summoner/v3/summoners/by-name/' + txtSearchBar.value + '?api_key=' + apiKey;
	console.log(request);
	$.ajax({
		dataType: 'jsonp',
		url: request,
		success: fillGameData
	});
}

function fillGameData(data){
	console.log("esta funcionando!!!");
	/*summonerName = data.name;
		summonerId = data.id;
		summonerAccountId = data.accountId;*/
}

//-----------------------/Riot Api Requests---------------------------------