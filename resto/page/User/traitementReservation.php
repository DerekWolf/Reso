<?php
session_start();

$connect = mysql_connect('localhost', 'root', '') or die("Erreur de connexion au serveur.");
mysql_select_db('menu', $connect);

$id = $_SESSION["Id"];

$EntLun = $_POST['LUN_ENT'];
$EntMar = $_POST['MAR_ENT'];
$EntMer = $_POST['MER_ENT'];
$EntJeu = $_POST['JEU_ENT'];
$EntVen = $_POST['VEN_ENT'];
$ViaLun = $_POST['LUN_VIA'];
$ViaMar = $_POST['MAR_VIA'];
$ViaMer = $_POST['MER_VIA'];
$ViaJeu = $_POST['JEU_VIA'];
$ViaVen = $_POST['VEN_VIA'];
$AccLun = $_POST['LUN_ACC'];
$AccMar = $_POST['MAR_ACC'];
$AccMer = $_POST['MER_ACC'];
$AccJeu = $_POST['JEU_ACC'];
$AccVen = $_POST['VEN_ACC'];
$DesLun = $_POST['LUN_DES'];
$DesMar = $_POST['MAR_DES'];
$DesMer = $_POST['MER_DES'];
$DesJeu = $_POST['JEU_DES'];
$DesVen = $_POST['VEN_DES'];
 
if(!isset($_POST['LUN_FRO']))
{ $FroLun = 0;}
else{$FroLun = 1;};

if(!isset($_POST['Mar_FRO']))
{ $FroMar = 0;}
else{$FroMar = 1;};

if(!isset($_POST['MER_FRO']))
{ $FroMer = 0;}
else{$FroMer = 1;};

if(!isset($_POST['JEU_FRO']))
{ $FroJeu = 0;}
else{$FroJeu = 1;};

if(!isset($_POST['VEN_FRO']))
{ $FroVen = 0;}
else{$FroVen = 1;};

$DateLun = $_POST['dateLun'];
$DateMar = $_POST['dateMar'];
$DateMer = $_POST['dateMer'];
$DateJeu = $_POST['dateJeu'];
$DateVen = $_POST['dateVen'];

$lundi = "INSERT INTO reservation VALUES('$id', '$DateLun', '$EntLun', '$ViaLun', '$AccLun', '$FroLun', '$DesLun')";
$mardi = "INSERT INTO reservation VALUES('$id', '$DateMar', '$EntMar', '$ViaMar', '$AccMar', '$FroMar', '$DesMar')";
$mercredi = "INSERT INTO reservation VALUES('$id', '$DateMer', '$EntMer', '$ViaMer', '$AccMer', '$FroMer', '$DesMer')";
$jeudi = "INSERT INTO reservation VALUES('$id', '$DateJeu', '$EntJeu', '$ViaJeu', '$AccJeu', '$FroJeu', '$DesJeu')";
$vendredi = "INSERT INTO reservation VALUES('$id', '$DateVen', '$EntVen', '$ViaVen', '$AccVen', '$FroVen', '$DesVen')";

mysql_query($lundi) or die('Erreur lors de l\'ajout en base de donnés d\'un Utilisateur.');
mysql_query($mardi) or die('Erreur lors de l\'ajout en base de donnés d\'un Utilisateur.');
mysql_query($mercredi) or die('Erreur lors de l\'ajout en base de donnés d\'un Utilisateur.');
mysql_query($jeudi) or die('Erreur lors de l\'ajout en base de donnés d\'un Utilisateur.');
mysql_query($vendredi) or die('Erreur lors de l\'ajout en base de donnés d\'un Utilisateur.');

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

header('Location: ../index.php?page=11');

?>