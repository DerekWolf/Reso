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
mysql_query("SET NAMES 'utf8'");

$id = $_SESSION["Id"];
$Ent = mysql_real_escape_string($_POST['ENT']);
$Via = mysql_real_escape_string($_POST['VIA']);
$Acc = mysql_real_escape_string($_POST['ACC']);

if(!isset($_POST['FRO']))
	{ $Fro = "oui";}
else{ $Fro = "non";};

$Des = mysql_real_escape_string($_POST['DES']);
$Inv = $_POST['INV'] + 1;

$Date = $_POST['date'];

$update = "UPDATE `reservation` SET `Entre` = '".$Ent."', `Viande` = '".$Via."', Accompagnement = '".$Acc."', Fromage = '".$Fro."', Dessert ='".$Des."', Multiplicateur = '".$Inv."' WHERE IdUtilisateur = '".$id."' AND Jour = '".$Date."'";
mysql_query($update) or die('Erreur lors de l\'ajout en base de donnés');
mysql_close();

echo "Reservation mis à jour.";
?>
<input type="button" class="btn btn-default" onclick="refreshParent()" value="Continuer">