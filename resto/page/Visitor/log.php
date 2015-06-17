
<?php
require_once('/function/database.php');
if(!isset($_POST['name']) || empty($_POST['name']))
{?>
	<h1>Connexion</h1>
	<form action="#" method="POST">
		<p>
			<label> Identifiant :</label>
			<input type="name" id="name" name="name" required placeholder="Votre nom : " maxlength="30">
		</p>
		<p>
			<label> Mot de passe :</label>
			<input type="password" id="pwd" name="pwd" required>
		</p>
		<input type="submit" value="Se connecter">
	</form>
<?php
}else{
	$nom = $_POST['name'];
	$mdp = $_POST['pwd'];
	if(existUser($nom, $mdp))
	{
		$User = searchUser($nom, $mdp);
		$_SESSION["statut"] = $User[4];
		$_SESSION["Id"] = $User[2];
		$_SESSION["Prénom"] = $User[1];
		$_SESSION["Nom"] = $User[0];

		header('Location: index.php?page=0');	

	}else{
		?>
		<h1>Inscription</h1>
		Désolé, il y a une erreur ou vous n'êtes peut être pas encore <a href="index.php?page=3">inscrit</a>. Veuillez rééssayer.
		<form action="#" method="POST">
			<p>
				<label> Identifiant :</label>
				<input type="name" id="name" name="name" required placeholder="Votre nom : " maxlength="30">
			</p>
			<p>
				<label> Mot de passe :</label>
				<input type="password" id="pwd" name="pwd" required>
			</p>
			<input type="submit" value="Se connecter">
		</form>
		<?php
	}
}
?>