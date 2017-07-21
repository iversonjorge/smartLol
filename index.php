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
								<img id="championImg0" src="" alt="">
								<div class="summonerHeader">
									<h4 id="playerName0"></h4>
									<img id="championImgSmall0" src="" alt="">
								</div>
								<div class="summonerUpperHalf">
									<img id="summoner0Spell0" src="images/flash.png" class="spells , spell1" alt="flash spell">
									<img id="summoner0Spell1" src="images/exhaust.png" class="spells , spell2" alt="exhaust spell">
									<div class="spells , spell3 , thunderlord"></div>
									<p id="gamesPlayed0" class="gamesPlayed"></p>
									<p class="ranking">4533</p>
									<div class="summonerLowerHalf"></div>
									<h5 class="performance">Performance:</h5>
									<p class="performance , statisticYellow , performanceP"> 3.2%</p>
									<div class="rankingLeague">
										<img src="images/diamond.png" alt="Diamond Ranking League">
									</div>
									<p id="tier0" class="tier"></p>
									<h5 class="winLoss">W/L:</h5>
									<p class="winLoss , statisticYellow"> 16 / 16 (50.0%)</p>
									<h5 class="kills">Kills:</h5>
									<p class="kills , statisticGreen">4.7 (+1.0)</p>
									<h5 class="deaths">Deaths:</h5>
									<p class="deaths , statisticRed">7.3 (+1.4)</p>
									<h5 class="assists">Assists:</h5>
									<p class="assists , statisticYellow">9.6 (-0.9)</p>
									<h5 class="cs">CS:</h5>
									<p class="cs , statisticGreen"> 56 (+8)</p>
									<h5 class="mains">Mains:</h5>
									<p class="mains">Top, Mid</p>
								</div>
							</div>
							<div id="summonerLiveData1" class="summonerLiveData1 , summonerLiveDataBlue">
								<img id="championImg1" src="" alt="">
								<div class="summonerHeader">
									<h4 id="playerName1"></h4>
									<img id="championImgSmall1" src="" alt="">
								</div>
								<div class="summonerUpperHalf">
									<img id="summoner1Spell0" src="images/teleport.png" class="spells , spell1" alt="teleport spell">
									<img id="summoner1Spell1" src="images/flash.png" class="spells , spell2" alt="flash spell">
									<div class="spells , spell3 , fervor"></div>
									<p id="gamesPlayed1" class="gamesPlayed"></p>
									<p class="ranking">4587</p>
									<div class="summonerLowerHalf"></div>
									<h5 class="performance">Performance:</h5>
									<p class="performance , statisticGreen , performanceP">14.8%</p>
									<div class="rankingLeague">
										<img src="images/diamond.png" alt="Diamond Ranking League">
									</div>
									<p id="tier1" class="tier"></p>
									<h5 class="winLoss">W/L:</h5>
									<p class="winLoss , statisticGreen">17 / 12 (58.6%)</p>
									<h5 class="kills">Kills:</h5>
									<p class="kills , statisticGreen">7.4 (+0.9)</p>
									<h5 class="deaths">Deaths:</h5>
									<p class="deaths , statisticGreen">4.6 (-1.4)</p>
									<h5 class="assists">Assists:</h5>
									<p class="assists , statisticYellow"> 5.3 (-0.1))</p>
									<h5 class="cs">CS:</h5>
									<p class="cs , statisticGreen">210 (+35)</p>
									<h5 class="mains">Mains:</h5>
									<p class="mains">Top, Marksman</p>
								</div>
							</div>
							<div id="summonerLiveData2" class="summonerLiveData2 , summonerLiveDataBlue">
								<img id="championImg2" src="" alt="">
								<div class="summonerHeader">
									<h4 id="playerName2"></h4>
									<img id="championImgSmall2" src="" alt="">
								</div>
								<div class="summonerUpperHalf">
									<img id="summoner2Spell0" src="images/flash.png" class="spells , spell1" alt="flash spell">
									<img id="summoner2Spell1" src="images/heal.png" class="spells , spell2" alt="heal spell">
									<div class="spells , spell3 , fervor"></div>
									<p id="gamesPlayed2" class="gamesPlayed"></p>
									<p class="ranking">4489</p>
									<div class="summonerLowerHalf"></div>
									<h5 class="performance">Performance:</h5>
									<p class="performance , statisticYellow , performanceP">-4.0%</p>
									<div class="rankingLeague">
										<img src="images/diamond.png" alt="Diamond Ranking League">
									</div>
									<p id="tier2" class="tier"></p>
									<h5 class="winLoss">W/L:</h5>
									<p class="winLoss , statisticYellow">10 / 12 (45.5%)</p>
									<h5 class="kills">Kills:</h5>
									<p class="kills , statisticRed">5.6 (-0.6)</p>
									<h5 class="deaths">Deaths:</h5>
									<p class="deaths , statisticRed">7.1 (+1.9)</p>
									<h5 class="assists">Assists:</h5>
									<p class="assists , statisticGreen"> 8.9 (+1.0)</p>
									<h5 class="cs">CS:</h5>
									<p class="cs , statisticGreen">192 (+18)</p>
									<h5 class="mains">Mains:</h5>
									<p class="mains">Mid, Top</p>
								</div>
							</div>
							<div id="summonerLiveData3" class="summonerLiveData3 , summonerLiveDataBlue">
								<img id="championImg3" src="" alt="">
								<div class="summonerHeader">
									<h4 id="playerName3"></h4>
									<img id="championImgSmall3" src="" alt="">
								</div>
								<div class="summonerUpperHalf">
									<img id="summoner3Spell0" src="images/flash.png" class="spells , spell1" alt="flash spell">
									<img id="summoner3Spell1" src="images/smite.png" class="spells , spell2" alt="smite spell">
									<div class="spells , spell3 , thunderlord"></div>
									<p id="gamesPlayed3" class="gamesPlayed"></p>
									<p class="ranking">4420</p>
									<div class="summonerLowerHalf"></div>
									<h5 class="performance">Performance:</h5>
									<p class="performance , statisticGreen , performanceP">16.6%</p>
									<div class="rankingLeague">
										<img src="images/diamond.png" alt="Diamond Ranking League">
									</div>
									<p id="tier3" class="tier"></p>
									<h5 class="winLoss">W/L:</h5>
									<p class="winLoss , statisticRed">7 / 11 (38.9%)</p>
									<h5 class="kills">Kills:</h5>
									<p class="kills , statisticGreen">7.4 (+1.1)</p>
									<h5 class="deaths">Deaths:</h5>
									<p class="deaths , statisticGreen">3.7 (-2.1)</p>
									<h5 class="assists">Assists:</h5>
									<p class="assists , statisticRed">7.3 (-0.8)</p>
									<h5 class="cs">CS:</h5>
									<p class="cs , statisticYellow">38 (+0)</p>
									<h5 class="mains">Mains:</h5>
									<p class="mains">Top, Jungle</p>
								</div>
							</div>
							<div id="summonerLiveData4" class="summonerLiveData4 , summonerLiveDataBlue">
								<img id="championImg4" src="" alt="">
								<div class="summonerHeader">
									<h4 id="playerName4"></h4>
									<img id="championImgSmall4" src="" alt="">
								</div>
								<div class="summonerUpperHalf">
									<img id="summoner4Spell0" src="images/cleanse.png" class="spells , spell1" alt="cleanse spell">
									<img id="summoner4Spell1" src="images/flash.png" class="spells , spell2" alt="flash spell">
									<div class="spells , spell3 , thunderlord"></div>
									<p id="gamesPlayed4" class="gamesPlayed"></p>
									<p class="ranking">4403</p>
									<div class="summonerLowerHalf"></div>
									<h5 class="performance">Performance:</h5>
									<p class="performance , statisticGreen , performanceP">16.6%</p>
									<div class="rankingLeague">
										<img src="images/diamond.png" alt="Diamond Ranking League">
									</div>
									<p id="tier4" class="tier"></p>
									<h5 class="winLoss">W/L:</h5>
									<p class="winLoss , statisticRed">7 / 9 (43.8%)</p>
									<h5 class="kills">Kills:</h5>
									<p class="kills , statisticYellow">6.8 (-0.1)</p>
									<h5 class="deaths">Deaths:</h5>
									<p class="deaths , statisticRed">6.5 (+0.7)</p>
									<h5 class="assists">Assists:</h5>
									<p class="assists , statisticYellow">6.4 (+0.4)</p>
									<h5 class="cs">CS:</h5>
									<p class="cs , statisticYellow">203 (+16)</p>
									<h5 class="mains">Mains:</h5>
									<p class="mains">Mid, Top</p>
								</div>
							</div>
						</div>
						<div class="teamRed">
							<div id="summonerLiveData5" class="summonerLiveData5 , summonerLiveDataRed">
								<img id="championImg5" src="" alt="">
								<div class="summonerHeader">
									<h4 id="playerName5"></h4>
									<img id="championImgSmall5" src="" alt="">
								</div>
								<div class="summonerUpperHalf">
									<img id="summoner5Spell0" src="images/flash.png" class="spells , spell1" alt="flash spell">
									<img id="summoner5Spell1" src="images/heal.png" class="spells , spell2" alt="heal spell">
									<div class="spells , spell3 , deathfire"></div>
									<p id="gamesPlayed5" class="gamesPlayed"></p>
									<p class="ranking">4852</p>
									<div class="summonerLowerHalf"></div>
									<h5 class="performance">Performance:</h5>
									<p class="performance , statisticGreen , performanceP">12.9%</p>
									<div class="rankingLeague">
										<img src="images/platinum.png" alt="Platinum Ranking League">
									</div>
									<p id="tier5" class="tier"></p>
									<h5 class="winLoss">W/L:</h5>
									<p class="winLoss , statisticGreen">42 / 32 (56.8%)</p>
									<h5 class="kills">Kills:</h5>
									<p class="kills , statisticGreen">8.7 (+2.1)</p>
									<h5 class="deaths">Deaths:</h5>
									<p class="deaths , statisticYellow">6.1 (+0.4)</p>
									<h5 class="assists">Assists:</h5>
									<p class="assists , statisticGreen">9.6 (+1.1)</p>
									<h5 class="cs">CS:</h5>
									<p class="cs , statisticGreen">195 (+25)</p>
									<h5 class="mains">Mains:</h5>
									<p class="mains">Marksman, Top</p>
								</div>
							</div>
							<div id="summonerLiveData6" class="summonerLiveData6 , summonerLiveDataRed">
								<img id="championImg6" src="" alt="">
								<div class="summonerHeader">
									<h4 id="playerName6"></h4>
									<img id="championImgSmall6" src="" alt="">
								</div>
								<div class="summonerUpperHalf">
									<img id="summoner6Spell0" src="images/flash.png" class="spells , spell1" alt="flash spell">
									<img id="summoner6Spell1" src="images/ignite.png" class="spells , spell2" alt="ignite spell">
									<div class="spells , spell3 , deathfire"></div>
									<p id="gamesPlayed6" class="gamesPlayed"></p>
									<p class="ranking">4260</p>
									<div class="summonerLowerHalf"></div>
									<h5 class="performance">Performance:</h5>
									<p class="performance , statisticYellow , performanceP">-3.9%</p>
									<div class="rankingLeague">
										<img src="images/diamond.png" alt="Diamond Ranking League">
									</div>
									<p id="tier6" class="tier"></p>
									<h5 class="winLoss">W/L:</h5>
									<p class="winLoss , statisticGreen">5 / 3 (62.5%)</p>
									<h5 class="kills">Kills:</h5>
									<p class="kills , statisticYellow">5.6 (+0.0)</p>
									<h5 class="deaths">Deaths:</h5>
									<p class="deaths , statisticYellow">6.9 (+0.3)</p>
									<h5 class="assists">Assists:</h5>
									<p class="assists , statisticYellow">9.6 (+0.4)</p>
									<h5 class="cs">CS:</h5>
									<p class="cs , statisticRed">50 (-22)</p>
									<h5 class="mains">Mains:</h5>
									<p class="mains">Mid, Top</p>
								</div>
							</div>
							<div id="summonerLiveData7" class="summonerLiveData7 , summonerLiveDataRed">
								<img id="championImg7" src="" alt="">
								<div class="summonerHeader">
									<h4 id="playerName7"></h4>
									<img id="championImgSmall7" src="" alt="">
								</div>
								<div class="summonerUpperHalf">
									<img id="summoner7Spell0" src="images/flash.png" class="spells , spell1" alt="flash spell">
									<img id="summoner7Spell1" src="images/smite.png" class="spells , spell2" alt="smite spell">
									<div class="spells , spell3 , colossus"></div>
									<p id="gamesPlayed7" class="gamesPlayed"></p>
									<p class="ranking">4311</p>
									<div class="summonerLowerHalf"></div>
									<h5 class="performance">Performance:</h5>
									<p class="performance , statisticYellow , performanceP">2.0%</p>
									<div class="rankingLeague">
										<img src="images/diamond.png" alt="Diamond Ranking League">
									</div>
									<p id="tier7" class="tier"></p>
									<h5 class="winLoss">W/L:</h5>
									<p class="winLoss , statisticRed">2 / 5 (28.6%)</p>
									<h5 class="kills">Kills:</h5>
									<p class="kills , statisticRed">4.9 (-1.2)</p>
									<h5 class="deaths">Deaths:</h5>
									<p class="deaths , statisticGreen">4.7 (-1.2)</p>
									<h5 class="assists">Assists:</h5>
									<p class="assists , statisticYellow">7.4 (+0.1)</p>
									<h5 class="cs">CS:</h5>
									<p class="cs , statisticGreen">49 (+4)</p>
									<h5 class="mains">Mains:</h5>
									<p class="mains">Mid, Top</p>
								</div>
							</div>
							<div id="summonerLiveData8" class="summonerLiveData8 , summonerLiveDataRed">
								<img id="championImg8" src="" alt="">
								<div class="summonerHeader">
									<h4 id="playerName8"></h4>
									<img id="championImgSmall8" src="" alt="">
								</div>
								<div class="summonerUpperHalf">
									<img id="summoner8Spell0" src="images/flash.png" class="spells , spell1" alt="flash spell">
									<img id="summoner8Spell1" src="images/teleport.png" class="spells , spell2" alt="teleport spell">
									<div class="spells , spell3 , colossus"></div>
									<p id="gamesPlayed8" class="gamesPlayed"></p>
									<p class="ranking">4689</p>
									<div class="summonerLowerHalf"></div>
									<h5 class="performance">Performance:</h5>
									<p class="performance , statisticGreen , performanceP">21.4%</p>
									<div class="rankingLeague">
										<img src="images/diamond.png" alt="Diamond Ranking League">
									</div>
									<p id="tier8" class="tier"></p>
									<h5 class="winLoss">W/L:</h5>
									<p class="winLoss , statisticRed">11 / 14 (44.0%)</p>
									<h5 class="kills">Kills:</h5>
									<p class="kills , statisticYellow">4.1 (-0.3)</p>
									<h5 class="deaths">Deaths:</h5>
									<p class="deaths , statisticGreen">3.5 (-1.7)</p>
									<h5 class="assists">Assists:</h5>
									<p class="assists , statisticYellow">10.3 (-0.5)</p>
									<h5 class="cs">CS:</h5>
									<p class="cs , statisticGreen">116 (+57)</p>
									<h5 class="mains">Mains:</h5>
									<p class="mains">Jungle, Support</p>
								</div>
							</div>
							<div id="summonerLiveData9" class="summonerLiveData9 , summonerLiveDataRed">
							<img id="championImg9" src="" alt="">
								<div class="summonerHeader">
									<h4 id="playerName9"></h4>
									<img id="championImgSmall9" src="" alt="">
								</div>
								<div class="summonerUpperHalf">
									<img id="summoner9Spell0" src="images/flash.png" class="spells , spell1" alt="flash spell">
									<img id="summoner9Spell1" src="images/ignite.png" class="spells , spell2" alt="ignite spell">
									<div class="spells , spell3 , thunderlord"></div>
									<p id="gamesPlayed9" class="gamesPlayed"></p>
									<p class="ranking">5188</p>
									<div class="summonerLowerHalf"></div>
									<h5 class="performance">Performance:</h5>
									<p class="performance , statisticYellow , performanceP">1.4%</p>
									<div class="rankingLeague">
										<img src="images/diamond.png" alt="Diamond Ranking League">
									</div>
									<p id="tier9" class="tier"></p>
									<h5 class="winLoss">W/L:</h5>
									<p class="winLoss , statisticYellow">59 / 60 (49.6%)</p>
									<h5 class="kills">Kills:</h5>
									<p class="kills , statisticGreen">6.8 (+0.6)</p>
									<h5 class="deaths">Deaths:</h5>
									<p class="deaths , statisticGreen">5.0 (+0.5)</p>
									<h5 class="assists">Assists:</h5>
									<p class="assists , statisticYellow">6.8 (-0.7)</p>
									<h5 class="cs">CS:</h5>
									<p class="cs , statisticGreen">208 (+34)</p>
									<h5 class="mains">Mains:</h5>
									<p class="mains">Support, Mid</p>
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