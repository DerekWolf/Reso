<script type="text/javascript">
<!--
function refreshParent() {
  window.parent.location.href = window.parent.location.href;
}
//-->
</script>

<?php
session_start();
require_once("../../function/database.php");
connect();

$id = $_SESSION["Id"];
$Date = $_POST['date'];

$items = mysql_fetch_array(voirReservation($id, $Date));


if($_POST['ENT'] != "-"){
	$Ent = mysql_real_escape_string($_POST['ENT']);
}else{
	$Ent = $items['Entre'];
}

if($_POST['VIA'] != "-"){
	$Via = mysql_real_escape_string($_POST['VIA']);
}else{
	$Via = $items['Viande'];
}

if($_POST['ACC'] != "-"){
	$Acc = mysql_real_escape_string($_POST['ACC']);
}else{
	$Acc = $items['Accompagnement'];
}

if(!isset($_POST['FRO']))
	{ $Fro = "non";}
else{ $Fro = "oui";};


if($_POST['DES'] != "-"){
	$Des = mysql_real_escape_string($_POST['DES']);
}else{
	$Des = $items['Dessert'];
}

if($_POST['DES'] != "0"){
	$Inv = $_POST['INV'] + 1;
}else{
	$Inv = $items['Multiplicateur'];
}

$update = "UPDATE `reservation` SET `Entre` = '".$Ent."', `Viande` = '".$Via."', Accompagnement = '".$Acc."', Fromage = '".$Fro."', Dessert ='".$Des."', Multiplicateur = '".$Inv."' WHERE IdUtilisateur = '".$id."' AND Jour = '".$Date."'";
mysql_query($update) or die('Erreur lors de l\'ajout en base de donnés');

deconnect();

echo "Reservation mis à jour.";
?>
<input type="button" class="btn btn-default" onclick="refreshParent()" value="Continuer">