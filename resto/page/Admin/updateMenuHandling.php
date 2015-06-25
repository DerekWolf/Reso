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

$Ent1 = mysql_real_escape_string($_POST['Entree1']);
$Ent2 = mysql_real_escape_string($_POST['Entree2']);
$Ent3 = mysql_real_escape_string($_POST['Entree3']);

$Via1 = mysql_real_escape_string($_POST['Viande1']);
$Via2 = mysql_real_escape_string($_POST['Viande2']);

$Acc1 = mysql_real_escape_string($_POST['Accompagnement1']);
$Acc2 = mysql_real_escape_string($_POST['Accompagnement2']);

$Des1 = mysql_real_escape_string($_POST['Dessert1']);
$Des2 = mysql_real_escape_string($_POST['Dessert2']);

$Date = $_POST['date'];

$Entree1 = "UPDATE `plat` SET `Nom`='".$Ent1."' WHERE `Jour`='".$Date."' and `Id` ='E1'";
$Entree2 = "UPDATE `plat` SET `Nom`='".$Ent2."' WHERE `Jour`='".$Date."' and `Id` ='E2'";
$Entree3 = "UPDATE `plat` SET `Nom`='".$Ent3."' WHERE `Jour`='".$Date."' and `Id` ='E3'";

$Viande1 = "UPDATE `plat` SET `Nom`='".$Via1."' WHERE `Jour`='".$Date."' and `Id` ='V1'";
$Viande2 = "UPDATE `plat` SET `Nom`='".$Via2."' WHERE `Jour`='".$Date."' and `Id` ='V2'";

$Accompagnement1 = "UPDATE `plat` SET `Nom`='".$Acc1."' WHERE `Jour`='".$Date."' and `Id` ='A1'";
$Accompagnement2 = "UPDATE `plat` SET `Nom`='".$Acc2."' WHERE `Jour`='".$Date."' and `Id` ='A2'";

$Dessert1 = "UPDATE `plat` SET `Nom`='".$Des1."' WHERE `Jour`='".$Date."' and `Id` ='D1'";
$Dessert2 = "UPDATE `plat` SET `Nom`='".$Des2."' WHERE `Jour`='".$Date."' and `Id` ='D2'";

mysql_query($Entree1) or die('Erreur lors de l\'ajout en base de donnés1');
mysql_query($Entree2) or die('Erreur lors de l\'ajout en base de donnés2');
mysql_query($Entree3) or die('Erreur lors de l\'ajout en base de donnés3');

mysql_query($Viande1) or die('Erreur lors de l\'ajout en base de donnés4');
mysql_query($Viande2) or die('Erreur lors de l\'ajout en base de donnés5');

mysql_query($Accompagnement1) or die('Erreur lors de l\'ajout en base de donnés6');
mysql_query($Accompagnement2) or die('Erreur lors de l\'ajout en base de donnés7');

mysql_query($Dessert1) or die('Erreur lors de l\'ajout en base de donnés8');
mysql_query($Dessert2) or die('Erreur lors de l\'ajout en base de donnés9');

mysql_close();

echo "Menu mis à jour.";
?>
<input type="button" onclick="refreshParent()" value="Continuer">