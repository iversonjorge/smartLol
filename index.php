<!doctype html>
<html lang="en">
	<head>
		<title>SmartLol</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/styles.css">
		<link href="images/favico.png" rel="shortcut icon">
		<meta name="keywords" content="league of legends, lol, league, tools, analysis, videogames, smartlol, esports, ranking">
		<meta name="author" content="Jorch">
	</head>
	<body>
		<main>
			<div id="loader"></div>
			<div id="modal"></div>
			<div class="tabs">
				<ul class="tabs_nav" id="tabs_nav">
					<li id="home" class="active">
						<a>Home</a>
					</li>
    				<li id="onLive">
						<a>On Live</a>
					</li>
					<li id="offline">
						<a>Offline</a>
					</li>
					<li id="championSelect">
						<a>Champion Select</a>
					</li>
					<li id="statistics">
						<a>Statistics</a>
					</li>
					<li id="forum">
						<a>Forum</a>
					</li>
				</ul>
			</div>
			<input type="button" value="Join the Battle" class="joinBattle" onclick="document.getElementById('loginModal').style.display='block'">
			<div class="loginModal" id="loginModal">
				<form class="loginContent" action="#">
					<span onclick="document.getElementById('loginModal').style.display='none'" class="close" title="Close Modal">&times;</span>
					<h3>Log In</h3>
					<input type="text" placeholder="Username or email">
					<input type="password" placeholder="Password">
					<input type="submit" value="Log In" class="btnLogIn">
					<a href="#" class="lnkRegister">Register</a>
					<a href="#" class="lnkForgot">Forgot your password?</a>
					<Label>Or Log in with social media</label>
					<input type="button" class="btnFacebooklogin" value="Facebook">
					<input type="button" class="btnTwitterlogin" value="Twitter">
					<input type="button" class="btnGooglelogin" value="Google">
				</form>
			</div>
			<div class="cube" id="cube">

				<div id="cubeLiveData" class="cubeInactive">
					<h2 id="summonerName" class="summonerLiveName"></h2>
					<p id="queueMapServer"></p>
					<div class="line"></div>
					<div class="a">
						<div class="teamBlue">
							<div id="summonerLiveData0" class="summonerLiveData0 , summonerLiveDataYellow">
								<img id="championImg0">
								<div class="summonerHeader">
									<h4 id="playerName0"></h4>
									<img id="championImgSmall0">
								</div>
								<div class="summonerUpperHalf">
									<img id="summoner0Spell0" class="spells , spell1">
									<img id="summoner0Spell1" class="spells , spell2">
									<img id="mastery0" class="spells , mastery">
									<p id="gamesPlayed0" class="gamesPlayed"></p>
									<p class="ranking">4533</p>
									<div class="summonerLowerHalf"></div>
									<h5 class="performance">Performance:</h5>
									<p class="performance , statisticYellow , performanceP"> 3.2%</p>
									<img id="rankedLeague0" class="rankingLeague">
									<p id="tier0" class="tier"></p>
									<h5 class="winLoss">W/L:</h5>
									<p id="winLoss0" class="winLoss , statisticYellow"></p>
									<h5 class="kills">Kills:</h5>
									<p id="kills0" class="kills , statisticGreen"></p>
									<h5 class="deaths">Deaths:</h5>
									<p id="deaths0" class="deaths , statisticRed"></p>
									<h5 class="assists">Assists:</h5>
									<p id="assists0" class="assists , statisticYellow"></p>
									<h5 class="cs">CS:</h5>
									<p id="cs0" class="cs , statisticGreen"></p>
									<h5 class="mains">Main:</h5>
									<p id="mains0" class="mains"></p>
								</div>
							</div>
							<div id="summonerLiveData1" class="summonerLiveData1 , summonerLiveDataBlue">
								<img id="championImg1">
								<div class="summonerHeader">
									<h4 id="playerName1"></h4>
									<img id="championImgSmall1">
								</div>
								<div class="summonerUpperHalf">
									<img id="summoner1Spell0" class="spells , spell1">
									<img id="summoner1Spell1" class="spells , spell2">
									<img id="mastery1" class="spells , mastery">
									<p id="gamesPlayed1" class="gamesPlayed"></p>
									<p class="ranking">4587</p>
									<div class="summonerLowerHalf"></div>
									<h5 class="performance">Performance:</h5>
									<p class="performance , statisticGreen , performanceP">14.8%</p>
									<img id="rankedLeague1" class="rankingLeague">
									<p id="tier1" class="tier"></p>
									<h5 class="winLoss">W/L:</h5>
									<p id="winLoss1" class="winLoss , statisticGreen"></p>
									<h5 class="kills">Kills:</h5>
									<p id="kills1" class="kills , statisticGreen"></p>
									<h5 class="deaths">Deaths:</h5>
									<p id="deaths1" class="deaths , statisticGreen"></p>
									<h5 class="assists">Assists:</h5>
									<p id="assists1" class="assists , statisticYellow"></p>
									<h5 class="cs">CS:</h5>
									<p id="cs1" class="cs , statisticGreen"></p>
									<h5 class="mains">Main:</h5>
									<p id="mains1" class="mains"></p>
								</div>
							</div>
							<div id="summonerLiveData2" class="summonerLiveData2 , summonerLiveDataBlue">
								<img id="championImg2">
								<div class="summonerHeader">
									<h4 id="playerName2"></h4>
									<img id="championImgSmall2">
								</div>
								<div class="summonerUpperHalf">
									<img id="summoner2Spell0" class="spells , spell1">
									<img id="summoner2Spell1" class="spells , spell2">
									<img id="mastery2" class="spells , mastery">
									<p id="gamesPlayed2" class="gamesPlayed"></p>
									<p class="ranking">4489</p>
									<div class="summonerLowerHalf"></div>
									<h5 class="performance">Performance:</h5>
									<p class="performance , statisticYellow , performanceP">-4.0%</p>
									<img id="rankedLeague2" class="rankingLeague">
									<p id="tier2" class="tier"></p>
									<h5 class="winLoss">W/L:</h5>
									<p id="winLoss2" class="winLoss , statisticYellow"></p>
									<h5 class="kills">Kills:</h5>
									<p id="kills2" class="kills , statisticRed"></p>
									<h5 class="deaths">Deaths:</h5>
									<p id="deaths2" class="deaths , statisticRed"></p>
									<h5 class="assists">Assists:</h5>
									<p id="assists2" class="assists , statisticGreen"></p>
									<h5 class="cs">CS:</h5>
									<p id="cs2" class="cs , statisticGreen"></p>
									<h5 class="mains">Main:</h5>
									<p id="mains2" class="mains"></p>
								</div>
							</div>
							<div id="summonerLiveData3" class="summonerLiveData3 , summonerLiveDataBlue">
								<img id="championImg3">
								<div class="summonerHeader">
									<h4 id="playerName3"></h4>
									<img id="championImgSmall3">
								</div>
								<div class="summonerUpperHalf">
									<img id="summoner3Spell0" class="spells , spell1">
									<img id="summoner3Spell1" class="spells , spell2">
									<img id="mastery3" class="spells , mastery">
									<p id="gamesPlayed3" class="gamesPlayed"></p>
									<p class="ranking">4420</p>
									<div class="summonerLowerHalf"></div>
									<h5 class="performance">Performance:</h5>
									<p class="performance , statisticGreen , performanceP">16.6%</p>
									<img id="rankedLeague3" class="rankingLeague">
									<p id="tier3" class="tier"></p>
									<h5 class="winLoss">W/L:</h5>
									<p id="winLoss3" class="winLoss , statisticRed"></p>
									<h5 class="kills">Kills:</h5>
									<p id="kills3" class="kills , statisticGreen"></p>
									<h5 class="deaths">Deaths:</h5>
									<p id="deaths3" class="deaths , statisticGreen"></p>
									<h5 class="assists">Assists:</h5>
									<p id="assists3" class="assists , statisticRed"></p>
									<h5 class="cs">CS:</h5>
									<p id="cs3" class="cs , statisticYellow"></p>
									<h5 class="mains">Main:</h5>
									<p id="mains3" class="mains"></p>
								</div>
							</div>
							<div id="summonerLiveData4" class="summonerLiveData4 , summonerLiveDataBlue">
								<img id="championImg4">
								<div class="summonerHeader">
									<h4 id="playerName4"></h4>
									<img id="championImgSmall4">
								</div>
								<div class="summonerUpperHalf">
									<img id="summoner4Spell0" class="spells , spell1">
									<img id="summoner4Spell1" class="spells , spell2">
									<img id="mastery4" class="spells , mastery">
									<p id="gamesPlayed4" class="gamesPlayed"></p>
									<p class="ranking">4403</p>
									<div class="summonerLowerHalf"></div>
									<h5 class="performance">Performance:</h5>
									<p class="performance , statisticGreen , performanceP">16.6%</p>
									<img id="rankedLeague4" class="rankingLeague">
									<p id="tier4" class="tier"></p>
									<h5 class="winLoss">W/L:</h5>
									<p id="winLoss4" class="winLoss , statisticRed"></p>
									<h5 class="kills">Kills:</h5>
									<p id="kills4" class="kills , statisticYellow"></p>
									<h5 class="deaths">Deaths:</h5>
									<p id="deaths4" class="deaths , statisticRed"></p>
									<h5 class="assists">Assists:</h5>
									<p id="assists4" class="assists , statisticYellow"></p>
									<h5 class="cs">CS:</h5>
									<p id="cs4" class="cs , statisticYellow"></p>
									<h5 class="mains">Main:</h5>
									<p id="mains4" class="mains"></p>
								</div>
							</div>
						</div>
						<div class="teamRed">
							<div id="summonerLiveData5" class="summonerLiveData5 , summonerLiveDataRed">
								<img id="championImg5">
								<div class="summonerHeader">
									<h4 id="playerName5"></h4>
									<img id="championImgSmall5">
								</div>
								<div class="summonerUpperHalf">
									<img id="summoner5Spell0" class="spells , spell1">
									<img id="summoner5Spell1" class="spells , spell2">
									<img id="mastery5" class="spells , mastery">
									<p id="gamesPlayed5" class="gamesPlayed"></p>
									<p class="ranking">4852</p>
									<div class="summonerLowerHalf"></div>
									<h5 class="performance">Performance:</h5>
									<p class="performance , statisticGreen , performanceP">12.9%</p>
									<img id="rankedLeague5" class="rankingLeague">
									<p id="tier5" class="tier"></p>
									<h5 class="winLoss">W/L:</h5>
									<p id="winLoss5" class="winLoss , statisticGreen"></p>
									<h5 class="kills">Kills:</h5>
									<p id="kills5" class="kills , statisticGreen"></p>
									<h5 class="deaths">Deaths:</h5>
									<p id="deaths5" class="deaths , statisticYellow"></p>
									<h5 class="assists">Assists:</h5>
									<p id="assists5" class="assists , statisticGreen"></p>
									<h5 class="cs">CS:</h5>
									<p id="cs5" class="cs , statisticGreen"></p>
									<h5 class="mains">Main:</h5>
									<p id="mains5" class="mains"></p>
								</div>
							</div>
							<div id="summonerLiveData6" class="summonerLiveData6 , summonerLiveDataRed">
								<img id="championImg6">
								<div class="summonerHeader">
									<h4 id="playerName6"></h4>
									<img id="championImgSmall6">
								</div>
								<div class="summonerUpperHalf">
									<img id="summoner6Spell0" class="spells , spell1">
									<img id="summoner6Spell1" class="spells , spell2">
									<img id="mastery6" class="spells , mastery">
									<p id="gamesPlayed6" class="gamesPlayed"></p>
									<p class="ranking">4260</p>
									<div class="summonerLowerHalf"></div>
									<h5 class="performance">Performance:</h5>
									<p class="performance , statisticYellow , performanceP">-3.9%</p>
									<img id="rankedLeague6" class="rankingLeague">
									<p id="tier6" class="tier"></p>
									<h5 class="winLoss">W/L:</h5>
									<p id="winLoss6" class="winLoss , statisticGreen"></p>
									<h5 class="kills">Kills:</h5>
									<p id="kills6" class="kills , statisticYellow"></p>
									<h5 class="deaths">Deaths:</h5>
									<p id="deaths6" class="deaths , statisticYellow"></p>
									<h5 class="assists">Assists:</h5>
									<p id="assists6" class="assists , statisticYellow"></p>
									<h5 class="cs">CS:</h5>
									<p id="cs6" class="cs , statisticRed"></p>
									<h5 class="mains">Main:</h5>
									<p id="mains6" class="mains"></p>
								</div>
							</div>
							<div id="summonerLiveData7" class="summonerLiveData7 , summonerLiveDataRed">
								<img id="championImg7">
								<div class="summonerHeader">
									<h4 id="playerName7"></h4>
									<img id="championImgSmall7">
								</div>
								<div class="summonerUpperHalf">
									<img id="summoner7Spell0" class="spells , spell1">
									<img id="summoner7Spell1" class="spells , spell2">
									<img id="mastery7" class="spells , mastery">
									<p id="gamesPlayed7" class="gamesPlayed"></p>
									<p class="ranking">4311</p>
									<div class="summonerLowerHalf"></div>
									<h5 class="performance">Performance:</h5>
									<p class="performance , statisticYellow , performanceP">2.0%</p>
									<img id="rankedLeague7" class="rankingLeague">
									<p id="tier7" class="tier"></p>
									<h5 class="winLoss">W/L:</h5>
									<p id="winLoss7" class="winLoss , statisticRed"></p>
									<h5 class="kills">Kills:</h5>
									<p id="kills7" class="kills , statisticRed"></p>
									<h5 class="deaths">Deaths:</h5>
									<p id="deaths7" class="deaths , statisticGreen"></p>
									<h5 class="assists">Assists:</h5>
									<p id="assists7" class="assists , statisticYellow"></p>
									<h5 class="cs">CS:</h5>
									<p id="cs7" class="cs , statisticGreen"></p>
									<h5 class="mains">Main:</h5>
									<p id="mains7" class="mains"></p>
								</div>
							</div>
							<div id="summonerLiveData8" class="summonerLiveData8 , summonerLiveDataRed">
								<img id="championImg8" src="" alt="">
								<div class="summonerHeader">
									<h4 id="playerName8"></h4>
									<img id="championImgSmall8" src="" alt="">
								</div>
								<div class="summonerUpperHalf">
									<img id="summoner8Spell0" class="spells , spell1">
									<img id="summoner8Spell1" class="spells , spell2">
									<img id="mastery8" class="spells , mastery">
									<p id="gamesPlayed8" class="gamesPlayed"></p>
									<p class="ranking">4689</p>
									<div class="summonerLowerHalf"></div>
									<h5 class="performance">Performance:</h5>
									<p class="performance , statisticGreen , performanceP">21.4%</p>
									<img id="rankedLeague8" class="rankingLeague">
									<p id="tier8" class="tier"></p>
									<h5 class="winLoss">W/L:</h5>
									<p id="winLoss8" class="winLoss , statisticRed"></p>
									<h5 class="kills">Kills:</h5>
									<p id="kills8" class="kills , statisticYellow"></p>
									<h5 class="deaths">Deaths:</h5>
									<p id="deaths8" class="deaths , statisticGreen"></p>
									<h5 class="assists">Assists:</h5>
									<p id="assists8" class="assists , statisticYellow"></p>
									<h5 class="cs">CS:</h5>
									<p id="cs8" class="cs , statisticGreen"></p>
									<h5 class="mains">Main:</h5>
									<p id="mains8" class="mains"></p>
								</div>
							</div>
							<div id="summonerLiveData9" class="summonerLiveData9 , summonerLiveDataRed">
							<img id="championImg9" src="" alt="">
								<div class="summonerHeader">
									<h4 id="playerName9"></h4>
									<img id="championImgSmall9" src="" alt="">
								</div>
								<div class="summonerUpperHalf">
									<img id="summoner9Spell0" class="spells , spell1">
									<img id="summoner9Spell1" class="spells , spell2">
									<img id="mastery9" class="spells , mastery">
									<p id="gamesPlayed9" class="gamesPlayed"></p>
									<p class="ranking">5188</p>
									<div class="summonerLowerHalf"></div>
									<h5 class="performance">Performance:</h5>
									<p class="performance , statisticYellow , performanceP">1.4%</p>
									<img id="rankedLeague9" class="rankingLeague">
									<p id="tier9" class="tier"></p>
									<h5 class="winLoss">W/L:</h5>
									<p id="winLoss9" class="winLoss , statisticYellow"></p>
									<h5 class="kills">Kills:</h5>
									<p id="kills9" class="kills , statisticGreen"></p>
									<h5 class="deaths">Deaths:</h5>
									<p id="deaths9" class="deaths , statisticGreen"></p>
									<h5 class="assists">Assists:</h5>
									<p id="assists9" class="assists , statisticYellow"></p>
									<h5 class="cs">CS:</h5>
									<p id="cs9" class="cs , statisticGreen"></p>
									<h5 class="mains">Main:</h5>
									<p id="mains9" class="mains"></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="cubeHome" id="cubehome" class="cubeActive">
					<input type="button" value="GET STARTED" class="btnGetStarted" id="btnGetStarted">
					<div class="mainBottom">
						<div class="mainBottomOnLive">
							<img src="images/live.png" alt="A picture of a Camera indicting that is recording" width="15%">
							<h3>On live tool</h3>
							<p>Search your summoner to get all the information you need of your current game</p>
						</div>
						<div class="mainBottomOffline">
							<img src="images/offline.png" alt="A picture of an offline signal" width="20%">
							<h3>Offline tool</h3>
							<p>Search your summoner to find all the information about your account and ranking history</p>
						</div>
						<div class="mainBottomChampionSelect">
							<img src="images/championselect.png" alt="A picture of the champpion select feature" width="20%">
							<h3>Champion Select tool</h3>
							<p>Use the Champion Select tool to pick the perfect champion for each situation</p>
						</div>
						<div class="mainBottomStatistics">
							<img src="images/statistics.png" alt="A chart with statistics" width="20%">
							<h3>Statistics</h3>
							<p>Do your own analisys using this giant tool based on the server statistics.</p>
						</div>
					</div>
				</div>
				<div class="cubeOnLive" id="cubeonLive">
					<h2>On Live Tool</h2>
					<p>You can search the actual game of any Summoner you want obtaining a lof of information just putting the name of the summoner on the text box.</p>
					<input type="text" id="txtSearchBar" name="txtSearchBar" placeholder="Summoner Name" autocomplete="username" maxlength="50" size="50" required autofocus>
					<input type="button" value="Search Summoner Live Game" class="btnSearchLiveGame" id="searchSummonerLiveGame">
				</div>
				<div class="cubeOffline" id="cubeoffline">
				</div>
				<div class="cubeChampionSelect" id="cubechampionSelect">
				</div>
				<div class="cubeStatistics" id="cubestatistics">
				</div>
			</div>
			<div class="globalVariables">
				<div id="serverActualVersion"></div>
				<div id="searchedSummonerId"></div>
				<div id="searchedAccountId"></div>
				<div id="championTotalGames0"></div>
				<div id="championTotalGames1"></div>
				<div id="championTotalGames2"></div>
				<div id="championTotalGames3"></div>
				<div id="championTotalGames4"></div>
				<div id="championTotalGames5"></div>
				<div id="championTotalGames6"></div>
				<div id="championTotalGames7"></div>
				<div id="championTotalGames8"></div>
				<div id="championTotalGames9"></div>
				<div id="summonersLoaded">0</div>
			</div>
		</main>
		<footer>
			<ul class="footer footerLinks">
				<li>
					<div class="imgFooterAhri"><img src="images/ahri.jpg" alt="una foto de arcade ezreal"></div>
				</li>
				<li>
					<a href="#" class="about">About Smart Lol</a>
				</li>
				<li>
					<a href="#" class="contact">Contact Us</a>
				</li>
				<li>
					<a href="#" class="privacy">Privacy Policy</a>
				</li>
				<li>
					<a href="#" class="faq">FAQ</a>
				</li>
			</ul>
			<ul class="footer footerSocial">
				<li>
					<a href="#" class="social"><img src="images/facebook.jpg" alt="logo facebook"></a>
				</li>
				<li>
					<a href="#" class="social"><img src="images/twitter.png" alt="logo twitter"></a>
				</li>
				<li>
					<a href="#" class="social"><img src="images/instagram.png" alt="logo instagram"></a>
				</li>
				<li>
					<a href="#" class="social"><img src="images/g+.png" alt="logo g+"></a>
				</li>
				<li class="ezreal">
					<div class="imgFooterEzreal"><img src="images/ezreal.jpg" alt="una foto de arcade ezreal"></div>
				</li>
			</ul>
		</footer>
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>-->
		<script src="js/smartlol.js"></script>
	</body>
</html>