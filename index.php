<!doctype html>
<html>
	<!--
	Jaja, Anderz L...
	dplay kanske finns på github, inte säkert att den är uppdaterad dock.
	
	* LOG
	------
	170709: först, tänkte jag köra lokal .. äh, det finns en Visio-skiss (typ askladdigt)
	på github, kolla där om det är så jävla intressant..
	
		+ men iaf: kör nog url till ACAST ist för att waste:a egen trafik,
			och KRÄVA mp3-stöd/html5, resten får stå ut med blajet på andra sidor.
			och skriva en simpel SPA som bara länkar in urlen på något av följande
			vis, obs detta är bara oigenomtäknta förslag:
				1. iframe med spelaren i, eller
				2. php send till sig själv och parse:a input, obs: kolla säkerhet!
				3. utgå inte ifrån att detta är vad jag kan, för jag har inte bestämt
					mål och mening riktigt, jag LÄR MIG att använda saker som jag kan
					men inte använt på evigheter
	-->

	<head>
		<meta charset="utf-8" />
		<title>DellaPlayJustFockingPlaying</title>
<!--
		<script src="jquery.js"></script>
-->		
		<link rel="stylesheet" href="CSS/main.css" />
	</head>
	
	<body>
	<!-- Loopia Counter Beginning --> <img src="http://counter.loopia.se/stats_img.php?domain=dplay.riksdagen.info_dplay" alt="" width="1" height="1" border="0"> <!-- Loopia Counter End -->
		<header class="CENTERTXT">
			<h1>DellaPlay</h1>
			<p class="LEFTTXT">
				Men inte klart p&aring; hundratusen &aring;r, minst! Så ta det för vad det är!
			</p>
			<nav>
				NAV
			</nav>
		</header>
		
		
		<section>
			<article>
				<h3>#1 Bosman</h3>
				<p>
					I det allra första avsnittet pratar vi om hur absurt det är att man inte får 
					äga spelare längre. OCH om ett slagsmål i hockeymatchen från igår.
				</p>
				<audio controls>
					<!--<source src="AUDIO/00001.mp3" type="audio/mpeg">-->
					<source src="https://acastprod.blob.core.windows.net/media/channels/dellasport/acasts/aede196a-51cd-4ebc-9f0c-862bd6a4d25e/timeline/34654b16-63a1-44ac-a4a4-47009a2f01f9/audio/1bosman.mp3" type="audio/mpeg">
					Din webbläsare klarar inte ens mp3, fan vad lökigt!
					</audio>
			</article>
		</section>
		
		<footer class="CENTERTXT">
				FOOTER
		</footer>
<!--
		<script>
			$( document ).ready(function() 
			{
				/*$("").(function() 
				{
					
				});*/
			});
		</script>
-->

	</body>
</html>