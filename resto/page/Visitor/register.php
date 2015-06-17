<?php
require_once('/function/database.php');
if(!isset($_POST['name']) || empty($_POST['name']))
{?>
	<h1>Inscription</h1>
	<form action="#" method="POST">
		<p>
			<label for"name">Nom : </label>
			<input id="name" name="name" required />
		</p>
		<p>
			<label for"firstName">Prénom : </label>
			<input id="firstName" name="firstName" required />
		</p>
		<p>
			<label for"mdp">Mot de passe : </label>
			<input type="password" id="mdp" name="mdp" required />
		</p>
		<input type="submit" value="Valider" />
	</form>
<?php
}else{
	$nom = $_POST['name'];
	$prenom = $_POST['firstName'];
	$mdp = $_POST['mdp'];
	addUser($nom, $prenom, $mdp);
?>
	<h1>Inscription terminée</h1>
	<p>Félicitation vous êtes inscrits !</p>
<?php 
}
?>