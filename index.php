<!doctype html>
<html lang="en">
	<head>
		<title>SmartLol</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/styles.css">
		<link href="images/favico.png" rel="shortcut icon">
		<meta name="keywords" content="league of legends, stats, search, statistics, lol, league, tool, analysis, smartlol, esports, ranked">
		<meta name="author" content="Jorch">
		<meta name="description" content="Real-time League of Legends Stats, Summoner Info/Stats, Pro Itemization, statistics and a feature that picks the best champion on ranked for each situation!">
		<meta name="og:title" content="SmartLol - The best lol tool of the web">
		<meta property="og:type" content="website">
		<meta name="og:description" content="Real-time League of Legends Stats, Summoner Info/Stats, Pro Itemization, statistics and a feature that picks the best champion on ranked for each situation!">
		<meta name="og:image" content="images/ogImage.jpg">
		<meta name="og:url" content="http://www.smartlol.com">
	</head>
	<body>
		<main>
			<div id="loader"></div>
			<div id="modal"></div>
			<div class="tabs">
				<ul class="tabs_nav" id="tabs_nav">
					<li id="home" class="active">
						<a id="homeKey">Home</a>
					</li>
    				<li id="onLive">
						<a id="onLiveKey">On Live</a>
					</li>
					<li id="offline">
						<a id="offlineKey">Offline</a>
					</li>
					<li id="championSelect">
						<a id="championSelectKey">Champion Select</a>
					</li>
					<li id="statistics">
						<a id="statisticsKey">Statistics</a>
					</li>
					<li id="forum">
						<a id="notebookKey">Notebook</a>
					</li>
				</ul>
			</div>
			<div id="languajeDD" class="languajeDD">
				<div class="languajeBtn">English
					<div class="arrowDown"></div>
				</div>
				<div id="languajeDDContent" class="languajeDDContent">
					<ul>
						<li class="langList">
							<img src="images/langen.png" alt="english" class="langIcon">
							<span>English</span>
						</li>
						<li class="langList">
							<img src="images/langes.png" alt="español" class="langIcon">
							<span>Español</span>
						</li>
					</ul>
				</div>
			</div>
			<input type="button" id="joinBattleKey" value="Join the Battle" class="joinBattle" onclick="document.getElementById('loginModal').style.display='block'">
			<div class="loginModal" id="loginModal">
				<form class="loginContent" action="#">
					<span onclick="document.getElementById('loginModal').style.display='none'" class="close" title="Close Modal">&times;</span>
					<h3>Log In</h3>
					<input type="text" placeholder="Username or email">
					<input type="password" placeholder="Password">
					<input type="submit" value="Log In" class="btnLogIn">
					<a href="#" id="lnkRegisterKey" class="lnkRegister">Register</a>
					<a href="#" id="lnkForgotKey" class="lnkForgot">Forgot your password?</a>
					<Label id="socialMediaKey">Or Log in with social media</label>
					<input type="button" class="btnFacebooklogin" value="Facebook">
					<input type="button" class="btnTwitterlogin" value="Twitter">
					<input type="button" class="btnGooglelogin" value="Google">
				</form>
			</div>
			<div class="cube" id="cube">
				<div id="cubeLiveData" class="cubeOnLive cubeInactive">
					<h2 id="summonerName" class="summonerLiveName"></h2>
					<input type="button" name="searchAgainButton" id="searchAgainButton" class="searchAgainButton" onclick="searchAgain()">
					<p id="queueMapServer"></p>
					<div class="line"></div>
					<div class="teamsContainer">
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
									<div class="summonerLowerHalf"></div>
									<img id="rankedLeague0" class="rankingLeague">
									<p id="tier0" class="tier"></p>
									<h5 class="winLoss">W/L:</h5>
									<p id="winLoss0" class="winLoss"><span id="win0">0</span> / <span id="loss0">0</span> (<span id="wlAverage0">0</span>%)</p>
									<h5 class="kills">Kills:</h5>
									<p id="kills0" class="kills">0</p>
									<h5 class="deaths">Deaths:</h5>
									<p id="deaths0" class="deaths">0</p>
									<h5 class="assists">Assists:</h5>
									<p id="assists0" class="assists">0</p>
									<h5 class="cs">CS:</h5>
									<p id="cs0" class="cs">0</p>
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
									<div class="summonerLowerHalf"></div>
									<img id="rankedLeague1" class="rankingLeague">
									<p id="tier1" class="tier"></p>
									<h5 class="winLoss">W/L:</h5>
									<p id="winLoss1" class="winLoss"><span id="win1">0</span> / <span id="loss1">0</span> (<span id="wlAverage1">0</span>%)</p>
									<h5 class="kills">Kills:</h5>
									<p id="kills1" class="kills">0</p>
									<h5 class="deaths">Deaths:</h5>
									<p id="deaths1" class="deaths">0</p>
									<h5 class="assists">Assists:</h5>
									<p id="assists1" class="assists">0</p>
									<h5 class="cs">CS:</h5>
									<p id="cs1" class="cs">0</p>
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
									<div class="summonerLowerHalf"></div>
									<img id="rankedLeague2" class="rankingLeague">
									<p id="tier2" class="tier"></p>
									<h5 class="winLoss">W/L:</h5>
									<p id="winLoss2" class="winLoss"><span id="win2">0</span> / <span id="loss2">0</span> (<span id="wlAverage2">0</span>%)</p>
									<h5 class="kills">Kills:</h5>
									<p id="kills2" class="kills">0</p>
									<h5 class="deaths">Deaths:</h5>
									<p id="deaths2" class="deaths">0</p>
									<h5 class="assists">Assists:</h5>
									<p id="assists2" class="assists">0</p>
									<h5 class="cs">CS:</h5>
									<p id="cs2" class="cs">0</p>
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
									<div class="summonerLowerHalf"></div>
									<img id="rankedLeague3" class="rankingLeague">
									<p id="tier3" class="tier"></p>
									<h5 class="winLoss">W/L:</h5>
									<p id="winLoss3" class="winLoss"><span id="win3">0</span> / <span id="loss3">0</span> (<span id="wlAverage3">0</span>%)</p>
									<h5 class="kills">Kills:</h5>
									<p id="kills3" class="kills">0</p>
									<h5 class="deaths">Deaths:</h5>
									<p id="deaths3" class="deaths">0</p>
									<h5 class="assists">Assists:</h5>
									<p id="assists3" class="assists">0</p>
									<h5 class="cs">CS:</h5>
									<p id="cs3" class="cs">0</p>
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
									<div class="summonerLowerHalf"></div>
									<img id="rankedLeague4" class="rankingLeague">
									<p id="tier4" class="tier"></p>
									<h5 class="winLoss">W/L:</h5>
									<p id="winLoss4" class="winLoss"><span id="win4">0</span> / <span id="loss4">0</span> (<span id="wlAverage4">0</span>%)</p>
									<h5 class="kills">Kills:</h5>
									<p id="kills4" class="kills">0</p>
									<h5 class="deaths">Deaths:</h5>
									<p id="deaths4" class="deaths">0</p>
									<h5 class="assists">Assists:</h5>
									<p id="assists4" class="assists">0</p>
									<h5 class="cs">CS:</h5>
									<p id="cs4" class="cs">0</p>
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
									<div class="summonerLowerHalf"></div>
									<img id="rankedLeague5" class="rankingLeague">
									<p id="tier5" class="tier"></p>
									<h5 class="winLoss">W/L:</h5>
									<p id="winLoss5" class="winLoss"><span id="win5">0</span> / <span id="loss5">0</span> (<span id="wlAverage5">0</span>%)</p>
									<h5 class="kills">Kills:</h5>
									<p id="kills5" class="kills">0</p>
									<h5 class="deaths">Deaths:</h5>
									<p id="deaths5" class="deaths">0</p>
									<h5 class="assists">Assists:</h5>
									<p id="assists5" class="assists">0</p>
									<h5 class="cs">CS:</h5>
									<p id="cs5" class="cs">0</p>
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
									<div class="summonerLowerHalf"></div>
									<img id="rankedLeague6" class="rankingLeague">
									<p id="tier6" class="tier"></p>
									<h5 class="winLoss">W/L:</h5>
									<p id="winLoss6" class="winLoss"><span id="win6">0</span> / <span id="loss6">0</span> (<span id="wlAverage6">0</span>%)</p>
									<h5 class="kills">Kills:</h5>
									<p id="kills6" class="kills">0</p>
									<h5 class="deaths">Deaths:</h5>
									<p id="deaths6" class="deaths">0</p>
									<h5 class="assists">Assists:</h5>
									<p id="assists6" class="assists">0</p>
									<h5 class="cs">CS:</h5>
									<p id="cs6" class="cs">0</p>
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
									<div class="summonerLowerHalf"></div>
									<img id="rankedLeague7" class="rankingLeague">
									<p id="tier7" class="tier"></p>
									<h5 class="winLoss">W/L:</h5>
									<p id="winLoss7" class="winLoss"><span id="win7">0</span> / <span id="loss7">0</span> (<span id="wlAverage7">0</span>%)</p>
									<h5 class="kills">Kills:</h5>
									<p id="kills7" class="kills">0</p>
									<h5 class="deaths">Deaths:</h5>
									<p id="deaths7" class="deaths">0</p>
									<h5 class="assists">Assists:</h5>
									<p id="assists7" class="assists">0</p>
									<h5 class="cs">CS:</h5>
									<p id="cs7" class="cs">0</p>
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
									<div class="summonerLowerHalf"></div>
									<img id="rankedLeague8" class="rankingLeague">
									<p id="tier8" class="tier"></p>
									<h5 class="winLoss">W/L:</h5>
									<p id="winLoss8" class="winLoss"><span id="win8">0</span> / <span id="loss8">0</span> (<span id="wlAverage8">0</span>%)</p>
									<h5 class="kills">Kills:</h5>
									<p id="kills8" class="kills">0</p>
									<h5 class="deaths">Deaths:</h5>
									<p id="deaths8" class="deaths">0</p>
									<h5 class="assists">Assists:</h5>
									<p id="assists8" class="assists">0</p>
									<h5 class="cs">CS:</h5>
									<p id="cs8" class="cs">0</p>
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
									<div class="summonerLowerHalf"></div>
									<img id="rankedLeague9" class="rankingLeague">
									<p id="tier9" class="tier"></p>
									<h5 class="winLoss">W/L:</h5>
									<p id="winLoss9" class="winLoss"><span id="win9">0</span> / <span id="loss9">0</span> (<span id="wlAverage9">0</span>%)</p>
									<h5 class="kills">Kills:</h5>
									<p id="kills9" class="kills">0</p>
									<h5 class="deaths">Deaths:</h5>
									<p id="deaths9" class="deaths">0</p>
									<h5 class="assists">Assists:</h5>
									<p id="assists9" class="assists">0</p>
									<h5 class="cs">CS:</h5>
									<p id="cs9" class="cs">0</p>
									<h5 class="mains">Main:</h5>
									<p id="mains9" class="mains"></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="cubeHome cubeActive" id="cubeHome">
					<input type="button" id="getStartedKey" value="GET STARTED" class="btnGetStarted" id="btnGetStarted">
					<div class="mainBottom">
						<div class="mainBottomOnLive">
							<img src="images/live.png" alt="A picture of a Camera indicting that is recording" width="15%">
							<h3 id="onLiveToolKey">On live tool</h3>
							<p id="onLiveToolTextKey">Search your summoner to get all the information you need of your current game</p>
						</div>
						<div class="mainBottomOffline">
							<img src="images/offline.png" alt="A picture of an offline signal" width="20%">
							<h3 id="offlineToolKey">Offline tool</h3>
							<p id="offlineToolTextKey">Search your summoner to find all the information about your account and ranking history</p>
						</div>
						<div class="mainBottomChampionSelect">
							<img src="images/championselect.png" alt="A picture of the champpion select feature" width="20%">
							<h3 id="championSelectToolKey">Champion Select tool</h3>
							<p id="championSelectToolTextKey">Use the Champion Select tool to pick the perfect champion for each situation</p>
						</div>
						<div class="mainBottomStatistics">
							<img src="images/statistics.png" alt="A chart with statistics" width="20%">
							<h3 id="statisticsToolKey">Statistics</h3>
							<p id="statisticsToolTextKey">Do your own analisys using this giant tool based on the server statistics.</p>
						</div>
					</div>
				</div>
				<div class="cubeOnLive cubeInactive" id="cubeOnLive">
					<h2 id="onLiveTitleKey">On Live Tool</h2>
					<p id="onLiveDescKey">You can search the actual game of any Summoner you want obtaining a lof of information just putting the name of the summoner on the text box.</p>
					<input type="text" id="txtSearchBar" class="txtSearchBar" name="txtSearchBar" placeholder="Summoner Name" autocomplete="username" maxlength="50" size="50" required autofocus>
					<input type="button" id="searchSummonerLiveGame" class="txtSearchButton" value="Search Summoner Live Game" class="btnSearchLiveGame">
				</div>
				<div class="cubeOffline" id="cubeOffline">
				</div>
				<div class="cubeChampionSelect" id="cubeChampionSelect">
				</div>
				<div class="cubeStatistics" id="cubeStatistics">
				</div>
			</div>
			<div class="globalVariables">
				<div id="lastOpenedCubeDataLive">false</div>
				<div id="cssCurrentVersion"></div>
				<div id="ddCurrentVersion"></div>
				<div id="lCurrentVersion"></div>
				<div id="itemCurrentVersion"></div>
				<div id="runeCurrentVersion"></div>
				<div id="masteryCurrentVersion"></div>
				<div id="summonerCurrentVersion"></div>
				<div id="championCurrentVersion"></div>
				<div id="profileIconCurrentVersion"></div>
				<div id="mapCurrentVersion"></div>
				<div id="languageCurrentVersion"></div>
				<div id="stickerCurrentVersion"></div>
				<div id="vCurrentVersion"></div>
				<div id="lgCurrentVersion"></div>
				<div id="cdnCurrentVersion"></div>
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
					<a href="#" id="aboutKey" class="about">About Smart Lol</a>
				</li>
				<li>
					<a href="#" id="contactKey" class="contact">Contact Us</a>
				</li>
				<li>
					<a href="#" id="privacyKey" class="privacy">Privacy Policy</a>
				</li>
				<li>
					<a href="#" id="faqKey" class="faq">FAQ</a>
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
		<script src="js/smartlol.js"></script>
	</body>
</html>