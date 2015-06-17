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

$Ent1 = $_POST['Entree1'];
$Ent2 = $_POST['Entree2'];
$Ent3 = $_POST['Entree3'];

$Via1 = $_POST['Viande1'];
$Via2 = $_POST['Viande2'];

$Acc1 = $_POST['Accompagnement1'];
$Acc2 = $_POST['Accompagnement2'];

$Des1 = $_POST['Dessert1'];
$Des2 = $_POST['Dessert2'];

$Date = $_POST['date'];

$Entree1 = "UPDATE `plat` SET `Type`='Entree', `Nom`='".$Ent1."' , `Id`='E1',`Jour`= '".$Date."' WHERE ";
$Entree2 = "UPDATE `plat` SET `Type`='Entree',`Nom`='".$Ent2."',`Id`='E2',`Jour`='".$Date."'";
$Entree3 = "UPDATE `plat` SET `Type`='Entree',`Nom`='".$Ent3."',`Id`='E3',`Jour`='".$Date."'";

$Viande1 = "UPDATE `plat` SET `Type`='Viande',`Nom`='".$Via1."',`Id`='V1',`Jour`='".$Date."'";
$Viande2 = "UPDATE `plat` SET `Type`='Viande',`Nom`='".$Via2."',`Id`='V2',`Jour`='".$Date."'";

$Accompagnement1 = "UPDATE `plat` SET `Type`='Accompagnement',`Nom`='".$Acc1."',`Id`='A1',`Jour`='".$Date."'";
$Accompagnement2 = "UPDATE `plat` SET `Type`='Accompagnement',`Nom`='".$Acc2."',`Id`='A2',`Jour`='".$Date."'";

$Dessert1 = "UPDATE `plat` SET `Type`='Dessert',`Nom`='".$Des1."',`Id`='D1',`Jour`='".$Date."'";
$Dessert2 = "UPDATE `plat` SET `Type`='Dessert',`Nom`='".$Des2."',`Id`='D2',`Jour`='".$Date."'";

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