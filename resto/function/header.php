<?php
	session_start();
	require_once('/function/database.php');
	connect();
?>
<!DOCTYPE html> 
	<html>
	<head>
		<script type="text/javascript"></script>
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="./asset/css/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="./asset/css/bootflat/css/bootflat.min.css">
		<link rel="stylesheet" type="text/css" href="./asset/css/style.css">
		<meta namme="author" content"Thomas SOTER &amp; DerekWolf" />
		<?php
		if(!isset($_SESSION["statut"]))
		{
			echo ("<title> Réservation Repas </title>");
		}elseif($_SESSION["statut"] == "Utilisateur")
		{
			echo ("<title> Réservation Repas  - ".$_SESSION['Nom']."</title>");
		}elseif($_SESSION["statut"] == "Administrateur")
		{
			echo ("<title> Réservation Repas - Administrateur</title>");
		}else{
			echo ("<title> Réservation Repas </title>");
		}
			?>
	</head>
	<header>
		<nav>
			<ul class="horizontal">
				<?php
				if(!isset($_SESSION["statut"])) {
					echo ('<li><a href="index.php?page=1">Se connecter</a></li>
							<li><a href="index.php?page=2">S\'enregistrer</a></li>');
				}elseif($_SESSION["statut"] == "Utilisateur") {
					echo ('<li><a href="index.php?page=10">Réserver</a></li>
							<li><a href="index.php?page=11">Semaine courrante</a></li>
							<li><a href="index.php?page=12">Semaine prochaine</a></li>
							<li><a href="index.php?page=13">Modifier ses réservations</a></li>
							<li><a href="index.php?page=42">Se déconnecter</a></li>
						');
				}elseif($_SESSION["statut"] == "Administrateur"){
					echo ('<li><a href="index.php?page=20">Ajouter une semaine</a></li>
							<li><a href="index.php?page=21">Modifier les menus</a></li>
							<li><a href="index.php?page=22">Statistique des repas</a></li>
							<li><a href="index.php?page=23">Statistique des utilisateurs</a></li>
							<li><a href="index.php?page=42">Se déconnecter</a></li>
							');
				}else{
					echo ('<a href="index.php?page=2">Se connecter</a>
					<a href="index.php?page=3">S\'enregistrer</a>');
				}
				?>	
			</ul>	
		</nav>
	</header>
	<body>	