<!DOCTYPE html>
<html>
<head>
	<title>Devops</title>
</head>
<body>

	<h1>Nos activités</h1>

	<div id="temperature">
		<h2>Température</h2>
		<div id="temperature_cuve">
			<h3>Température cuve</h3>
			<canvas id="temp_cuve"></canvas>
		</div>
		<div id="temperature_exterieure">
			<h3>Température extérieure</h3>
			<canvas id="temp_exter"></canvas>
		</div>
	</div>
	<div id="poids">
		<h2>Poids</h2>
		<div id="poids_lait_cuve">
			<h3>Poids lait</h3>
			<canvas id="lait"></canvas>
		</div>
		<div id="poids_produit_fini">
			<h3>Poids produit fini</h3>
			<canvas id="produit_fini"></canvas>
		</div>
	</div>
	<div id="mesure">
		<h2>Mesure</h2>
		<div id="mesure_ph">
			<h3>pH</h3>
			<canvas id="ph"></canvas>
		</div>
		<div id="concentration_naci">
			<h3>NaCI</h3>
			<canvas id="naci"></canvas>
		</div>
	</div>
	<div id="bacterie">
		<h2>Niveau de bactéries</h2>
		<div id="salmonelle">
			<h3>Salmonelle</h3>
			<canvas id="solmonelle"></canvas>
		</div>
		<div id="bacterie_coli">
			<h3>E-Coli</h3>
			<canvas id="e_coli"></canvas>
		</div>
		<div id="bacterie_listeria">
			<h3>Listeria</h3>
			<canvas id="listeria"></canvas>
		</div>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</html>
