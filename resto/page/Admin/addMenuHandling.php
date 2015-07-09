<?php

$connect = mysql_connect('localhost', 'root', '') or die("Erreur de connexion au serveur.");
mysql_select_db('menu', $connect);
mysql_query("SET NAMES 'utf8'");

$dateLundi = $_POST['dateLundi'];
$dateMardi = $_POST['dateMardi'];
$dateMercredi = $_POST['dateMercredi'];
$dateJeudi = $_POST['dateJeudi'];
$dateVendredi = $_POST['dateVendredi'];

if(!isset($_POST['Sal1Lun']) || empty($_POST['Sal1Lun']))
{
	$salLun = "-";
}else{
	$salLun = mysql_real_escape_string($_POST['Sal1Lun']);
}

if(!isset($_POST['Sal1Mar']) || empty($_POST['Sal1Mar']))
{
	$salMar = "-";
}else{
	$salMar = mysql_real_escape_string($_POST['Sal1Mar']);
}

if(!isset($_POST['Sal1Mer']) || empty($_POST['Sal1Mer']))
{
	$salMer = "-";
}else{
	$salMer = mysql_real_escape_string($_POST['Sal1Mer']);
}

if(!isset($_POST['Sal1Jeu']) || empty($_POST['Sal1Jeu']))
{
	$salJeu = "-";
}else{
	$salJeu = mysql_real_escape_string($_POST['Sal1Jeu']);
}

if(!isset($_POST['sal1Ven']) || empty($_POST['sal1Ven']))
{
	$salVen = "-";
}else{
	$salVen = mysql_real_escape_string($_POST['sal1Ven']);
}

$ent1Lun = mysql_real_escape_string($_POST['Ent1Lun']);
$ent1Mar = mysql_real_escape_string($_POST['Ent1Mar']);
$ent1Mer = mysql_real_escape_string($_POST['Ent1Mer']);
$ent1Jeu = mysql_real_escape_string($_POST['Ent1Jeu']);
$ent1Ven = mysql_real_escape_string($_POST['Ent1Ven']);

$ent2Lun = mysql_real_escape_string($_POST['Ent2Lun']);
$ent2Mar = mysql_real_escape_string($_POST['Ent2Mar']);
$ent2Mer = mysql_real_escape_string($_POST['Ent2Mer']);
$ent2Jeu = mysql_real_escape_string($_POST['Ent2Jeu']);
$ent2Ven = mysql_real_escape_string($_POST['Ent2Ven']);

$ent3Lun = mysql_real_escape_string($_POST['Ent3Lun']);
$ent3Mar = mysql_real_escape_string($_POST['Ent3Mar']);
$ent3Mer = mysql_real_escape_string($_POST['Ent3Mer']);
$ent3Jeu = mysql_real_escape_string($_POST['Ent3Jeu']);
$ent3Ven = mysql_real_escape_string($_POST['Ent3Ven']);

$via1Lun = mysql_real_escape_string($_POST['Via1Lun']);
$via1Mar = mysql_real_escape_string($_POST['Via1Mar']);
$via1Mer = mysql_real_escape_string($_POST['Via1Mer']);
$via1Jeu = mysql_real_escape_string($_POST['Via1Jeu']);
$via1Ven = mysql_real_escape_string($_POST['Via1Ven']);

$via2Lun = mysql_real_escape_string($_POST['Via2Lun']);
$via2Mar = mysql_real_escape_string($_POST['Via2Mar']);
$via2Mer = mysql_real_escape_string($_POST['Via2Mer']);
$via2Jeu = mysql_real_escape_string($_POST['Via2Jeu']);
$via2Ven = mysql_real_escape_string($_POST['Via2Ven']);

$acc1Lun = mysql_real_escape_string($_POST['Acc1Lun']);
$acc1Mar = mysql_real_escape_string($_POST['Acc1Mar']);
$acc1Mer = mysql_real_escape_string($_POST['Acc1Mer']);
$acc1Jeu = mysql_real_escape_string($_POST['Acc1Jeu']);
$acc1Ven = mysql_real_escape_string($_POST['Acc1Ven']);

$acc2Lun = mysql_real_escape_string($_POST['Acc2Lun']);
$acc2Mar = mysql_real_escape_string($_POST['Acc2Mar']);
$acc2Mer = mysql_real_escape_string($_POST['Acc2Mer']);
$acc2Jeu = mysql_real_escape_string($_POST['Acc2Jeu']);
$acc2Ven = mysql_real_escape_string($_POST['Acc2Ven']);

$des1Lun = mysql_real_escape_string($_POST['Des1Lun']);
$des1Mar = mysql_real_escape_string($_POST['Des1Mar']);
$des1Mer = mysql_real_escape_string($_POST['Des1Mer']);
$des1Jeu = mysql_real_escape_string($_POST['Des1Jeu']);
$des1Ven = mysql_real_escape_string($_POST['Des1Ven']);

$des2Lun = mysql_real_escape_string($_POST['Des2Lun']);
$des2Mar = mysql_real_escape_string($_POST['Des2Mar']);
$des2Mer = mysql_real_escape_string($_POST['Des2Mer']);
$des2Jeu = mysql_real_escape_string($_POST['Des2Jeu']);
$des2Ven = mysql_real_escape_string($_POST['Des2Ven']);

$reqS1 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Salade', '$salLun', 'S1', '$dateLundi')";
$reqS2 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Salade', '$salMar', 'S1', '$dateMardi')";
$reqS3 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Salade', '$salMer', 'S1', '$dateMercredi')";
$reqS4 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Salade', '$salJeu', 'S1', '$dateJeudi')";
$reqS5 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Salade', '$salVen', 'S1', '$dateVendredi')";

$req1 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Entree', '$ent1Lun', 'E1', '$dateLundi')";
$req2 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Entree', '$ent1Mar', 'E1', '$dateMardi')";
$req3 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Entree', '$ent1Mer', 'E1', '$dateMercredi')";
$req4 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Entree', '$ent1Jeu', 'E1', '$dateJeudi')";
$req5 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Entree', '$ent1Ven', 'E1', '$dateVendredi')";

$req6 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Entree', '$ent2Lun', 'E2', '$dateLundi')";
$req7 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Entree', '$ent2Mar', 'E2', '$dateMardi')";
$req8 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Entree', '$ent2Mer', 'E2', '$dateMercredi')";
$req9 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Entree', '$ent2Jeu', 'E2', '$dateJeudi')";
$req10 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Entree', '$ent2Ven', 'E2', '$dateVendredi')";

$req11 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Entree', '$ent3Lun', 'E3', '$dateLundi')";
$req12 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Entree', '$ent3Mar', 'E3', '$dateMardi')";
$req13 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Entree', '$ent3Mer', 'E3', '$dateMercredi')";
$req14 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Entree', '$ent3Jeu', 'E3', '$dateJeudi')";
$req15 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Entree', '$ent3Ven', 'E3', '$dateVendredi')";

$req16 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Viande', '$via1Lun', 'V1', '$dateLundi')";
$req17 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Viande', '$via1Mar', 'V1', '$dateMardi')";
$req18 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Viande', '$via1Mer', 'V1', '$dateMercredi')";
$req19 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Viande', '$via1Jeu', 'V1', '$dateJeudi')";
$req20 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Viande', '$via1Ven', 'V1', '$dateVendredi')";

$req21 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Viande', '$via2Lun', 'V2', '$dateLundi')";
$req22 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Viande', '$via2Mar', 'V2', '$dateMardi')";
$req23 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Viande', '$via2Mer', 'V2', '$dateMercredi')";
$req24 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Viande', '$via2Jeu', 'V2', '$dateJeudi')";
$req25 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Viande', '$via2Ven', 'V2', '$dateVendredi')";

$req26 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Accompagnement', '$acc1Lun', 'A1', '$dateLundi')";
$req27 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Accompagnement', '$acc1Mar', 'A1', '$dateMardi')";
$req28 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Accompagnement', '$acc1Mer', 'A1', '$dateMercredi')";
$req29 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Accompagnement', '$acc1Jeu', 'A1', '$dateJeudi')";
$req30 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Accompagnement', '$acc1Ven', 'A1', '$dateVendredi')";

$req31 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Accompagnement', '$acc2Lun', 'A2', '$dateLundi')";
$req32 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Accompagnement', '$acc2Mar', 'A2', '$dateMardi')";
$req33 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Accompagnement', '$acc2Mer', 'A2', '$dateMercredi')";
$req34 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Accompagnement', '$acc2Jeu', 'A2', '$dateJeudi')";
$req35 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Accompagnement', '$acc2Ven', 'A2', '$dateVendredi')";

$req36 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Dessert', '$des1Lun', 'D1', '$dateLundi')";
$req37 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Dessert', '$des1Mar', 'D1', '$dateMardi')";
$req38 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Dessert', '$des1Mer', 'D1', '$dateMercredi')";
$req39 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Dessert', '$des1Jeu', 'D1', '$dateJeudi')";
$req40 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Dessert', '$des1Ven', 'D1', '$dateVendredi')";

$req41 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Dessert', '$des2Lun', 'D2', '$dateLundi')";
$req42 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Dessert', '$des2Mar', 'D2', '$dateMardi')";
$req43 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Dessert', '$des2Mer', 'D2', '$dateMercredi')";
$req44 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Dessert', '$des2Jeu', 'D2', '$dateJeudi')";
$req45 = "INSERT INTO plat(Type, Nom, Id, Jour) VALUES('Dessert', '$des2Ven', 'D2', '$dateVendredi')";

mysql_query($reqS1) or die('Erreur lors de l\'ajout en base de donnés 1');
mysql_query($reqS2) or die('Erreur lors de l\'ajout en base de donnés 2');
mysql_query($reqS3) or die('Erreur lors de l\'ajout en base de donnés 3');
mysql_query($reqS4) or die('Erreur lors de l\'ajout en base de donnés 4');
mysql_query($reqS5) or die('Erreur lors de l\'ajout en base de donnés 5');

mysql_query($req1) or die('Erreur lors de l\'ajout en base de donnés 1');
mysql_query($req2) or die('Erreur lors de l\'ajout en base de donnés 2');
mysql_query($req3) or die('Erreur lors de l\'ajout en base de donnés 3');
mysql_query($req4) or die('Erreur lors de l\'ajout en base de donnés 4');
mysql_query($req5) or die('Erreur lors de l\'ajout en base de donnés 5');

mysql_query($req6) or die('Erreur lors de l\'ajout en base de donnés 6');
mysql_query($req7) or die('Erreur lors de l\'ajout en base de donnés 7');
mysql_query($req8) or die('Erreur lors de l\'ajout en base de donnés 8');
mysql_query($req9) or die('Erreur lors de l\'ajout en base de donnés 9');
mysql_query($req10) or die('Erreur lors de l\'ajout en base de donnés 10');

mysql_query($req11) or die('Erreur lors de l\'ajout en base de donnés 11');
mysql_query($req12) or die('Erreur lors de l\'ajout en base de donnés 12');
mysql_query($req13) or die('Erreur lors de l\'ajout en base de donnés 13');
mysql_query($req14) or die('Erreur lors de l\'ajout en base de donnés 14');
mysql_query($req15) or die('Erreur lors de l\'ajout en base de donnés 15');

mysql_query($req16) or die('Erreur lors de l\'ajout en base de donnés 16');
mysql_query($req17) or die('Erreur lors de l\'ajout en base de donnés 17');
mysql_query($req18) or die('Erreur lors de l\'ajout en base de donnés 18');
mysql_query($req19) or die('Erreur lors de l\'ajout en base de donnés 19');
mysql_query($req20) or die('Erreur lors de l\'ajout en base de donnés 20');

mysql_query($req21) or die('Erreur lors de l\'ajout en base de donnés 21');
mysql_query($req22) or die('Erreur lors de l\'ajout en base de donnés 22');
mysql_query($req23) or die('Erreur lors de l\'ajout en base de donnés 23');
mysql_query($req24) or die('Erreur lors de l\'ajout en base de donnés 24');
mysql_query($req25) or die('Erreur lors de l\'ajout en base de donnés 25');

mysql_query($req26) or die('Erreur lors de l\'ajout en base de donnés 26');
mysql_query($req27) or die('Erreur lors de l\'ajout en base de donnés 27');
mysql_query($req28) or die('Erreur lors de l\'ajout en base de donnés 28');
mysql_query($req29) or die('Erreur lors de l\'ajout en base de donnés 29');
mysql_query($req30) or die('Erreur lors de l\'ajout en base de donnés 30');

mysql_query($req31) or die('Erreur lors de l\'ajout en base de donnés 31');
mysql_query($req32) or die('Erreur lors de l\'ajout en base de donnés 32');
mysql_query($req33) or die('Erreur lors de l\'ajout en base de donnés 33');
mysql_query($req34) or die('Erreur lors de l\'ajout en base de donnés 34');
mysql_query($req35) or die('Erreur lors de l\'ajout en base de donnés 35');

mysql_query($req36) or die('Erreur lors de l\'ajout en base de donnés 36');
mysql_query($req37) or die('Erreur lors de l\'ajout en base de donnés 37');
mysql_query($req38) or die('Erreur lors de l\'ajout en base de donnés 38');
mysql_query($req39) or die('Erreur lors de l\'ajout en base de donnés 39');
mysql_query($req40) or die('Erreur lors de l\'ajout en base de donnés 40');

mysql_query($req41) or die('Erreur lors de l\'ajout en base de donnés 41');
mysql_query($req42) or die('Erreur lors de l\'ajout en base de donnés 42');
mysql_query($req43) or die('Erreur lors de l\'ajout en base de donnés 43');
mysql_query($req44) or die('Erreur lors de l\'ajout en base de donnés 44');
mysql_query($req45) or die('Erreur lors de l\'ajout en base de donnés 45');

mysql_close();

header('Location : /index.php?page=20');

?>