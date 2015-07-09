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

if(!isset($_POST['SAL']))
{ 
	$Sal = "non";

	if(!isset($_POST['VIA'])){
		$Via = "-";
	}elseif ($_POST['VIA'] == "-") {
		$Via = $items['Viande'];
	}else{
		$Via = mysql_real_escape_string($_POST['VIA']);
	}

	if( !isset($_POST['ACC'])){
		$Acc = "-";
	}elseif ($_POST['ACC'] == "-") {
		$Acc = $items['Accompagnement'];
	}else{
		$Acc = mysql_real_escape_string($_POST['ACC']);
	}

}else{
	$Sal = "oui";
	$Via = "-";
	$Acc = "-";
};

if($_POST['ENT'] == "-"){
	$Ent = $items['Entre'];
}else{
	$Ent = mysql_real_escape_string($_POST['ENT']);
}

if(!isset($_POST['FRO']))
	{ $Fro = "non";}
else{ $Fro = "oui";};


if($_POST['DES'] == "-"){
	$Des = $items['Dessert'];
}else{
	$Des = mysql_real_escape_string($_POST['DES']);
}

if($_POST['INV'] > "0"){
	$Inv = $_POST['INV'] + 1;
}else{
	$Inv = $items['Multi'] + 1;
}

$update = "UPDATE `reservation` SET `Entre` = '".$Ent."', `Viande` = '".$Via."', Accompagnement = '".$Acc."', Fromage = '".$Fro."', Dessert ='".$Des."', Multiplicateur = '".$Inv."' WHERE IdUtilisateur = '".$id."' AND Jour = '".$Date."'";
mysql_query($update) or die('Erreur lors de l\'ajout en base de donnés');

deconnect();

echo "Reservation mis à jour.";
?>
<input type="button" class="btn btn-default" onclick="refreshParent()" value="Continuer">