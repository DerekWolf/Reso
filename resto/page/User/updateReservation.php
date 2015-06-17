<script type="text/javascript">
<!--
function refreshParent() {
  window.parent.location.href = window.parent.location.href;
 
}
//-->
</script>

<?php
session_start();

$connect = mysql_connect('localhost', 'root', '') or die("Erreur de connexion au serveur.");
mysql_select_db('menu', $connect);

$id = $_SESSION["Id"];

$Ent = $_POST['ENT'];
$Via = $_POST['VIA'];
$Acc = $_POST['ACC'];

if(!isset($_POST['FRO']))
	{ $Fro = 0;}
else{$Fro = 1;};

$Des = $_POST['DES'];

$Date = $_POST['date'];

$update = "UPDATE `reservation` SET IdUtilisateur = '".$id."', Jour = '".$Date."', Entre = '".$Ent."', Viande = '".$Via."', Accompagnement = '".$Acc."', Fromage = '".$Fro."', Dessert ='".$Des."' WHERE IdUtilisateur = '".$id."' AND Jour = '".$Date."'";

mysql_query($update) or die('Erreur lors de l\'ajout en base de donnés');

mysql_close();

function checkFromage($var)
{
	if(!isset($var))
	{
		return 0;
	}else{
		return 1;
	}
}

echo "Reservation mis à jour.";
?>
<input type="button" onclick="refreshParent()" value="Continuer">