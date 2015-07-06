<?php
session_start();

$connect = mysql_connect('localhost', 'root', '') or die("Erreur de connexion au serveur.");
mysql_select_db('menu', $connect);
mysql_query("SET NAMES 'utf8'");

$id = $_SESSION["Id"];

if(!isset($_POST['LUN_MSAL']))
{ 
	$SalLun = "non";
	$EntLun = mysql_real_escape_string($_POST['LUN_ENT']);
	$ViaLun = mysql_real_escape_string($_POST['LUN_VIA']);
	$AccLun = mysql_real_escape_string($_POST['LUN_ACC']);
}else{
	$SalLun = "oui";
	$EntLun = "-";
	$ViaLun = "-";
	$AccLun = "-";
};

if(!isset($_POST['MAR_MSAL']))
{ 
	$SalMar = "non";
	$EntMar = mysql_real_escape_string($_POST['MAR_ENT']);
	$ViaMar = mysql_real_escape_string($_POST['MAR_VIA']);
	$AccMar = mysql_real_escape_string($_POST['MAR_ACC']);
}else{
	$SalMar = "oui";
	$EntMar = "-";
	$ViaMar = "-";
	$AccMar = "-";
};

if(!isset($_POST['MER_MSAL']))
{ 
	$SalMer = "non";
	$EntMer = mysql_real_escape_string($_POST['MER_ENT']);
	$ViaMer = mysql_real_escape_string($_POST['MER_VIA']);
	$AccMer = mysql_real_escape_string($_POST['MER_ACC']);
}else{
	$SalMer = "oui";
	$EntMer = "-";
	$ViaMer = "-";
	$AccMer = "-";
};

if(!isset($_POST['JEU_MSAL']))
{ 
	$SalJeu = "non";
	$EntJeu = mysql_real_escape_string($_POST['JEU_ENT']);
	$ViaJeu = mysql_real_escape_string($_POST['JEU_VIA']);
	$AccJeu = mysql_real_escape_string($_POST['JEU_ACC']);
}else{
	$SalMar = "oui";
	$EntMar = "-";
	$ViaMar = "-";
	$AccMar = "-";
};

if(!isset($_POST['VEN_MSAL']))
{ 
	$SalVen = "non";
	$EntVen = mysql_real_escape_string($_POST['VEN_ENT']);
	$ViaVen = mysql_real_escape_string($_POST['VEN_VIA']);
	$AccVen = mysql_real_escape_string($_POST['VEN_ACC']);
}else{
	$SalVen = "oui";
	$EntVen = "-";
	$ViaVen = "-";
	$AccVen = "-";
};

$DesLun = mysql_real_escape_string($_POST['LUN_DES']);
$DesMar = mysql_real_escape_string($_POST['MAR_DES']);
$DesMer = mysql_real_escape_string($_POST['MER_DES']);
$DesJeu = mysql_real_escape_string($_POST['JEU_DES']);
$DesVen = mysql_real_escape_string($_POST['VEN_DES']);

$InvLun = $_POST['invLundi'] + 1;
$InvMar = $_POST['invMardi'] + 1;
$InvMer = $_POST['invMercredi'] + 1;
$InvJeu = $_POST['invJeudi'] + 1;
$InvVen = $_POST['invVendredi'] + 1;
 
if(!isset($_POST['LUN_FRO']))
{ $FroLun = "non";}
else{$FroLun = "oui";};

if(!isset($_POST['Mar_FRO']))
{ $FroMar = "non";}
else{$FroMar = "oui";};

if(!isset($_POST['MER_FRO']))
{ $FroMer = "non";}
else{$FroMer = "oui";};

if(!isset($_POST['JEU_FRO']))
{ $FroJeu = "non";}
else{$FroJeu = "oui";};

if(!isset($_POST['VEN_FRO']))
{ $FroVen = "non";}
else{$FroVen = "oui";};

$DateLun = $_POST['dateLun'];
$DateMar = $_POST['dateMar'];
$DateMer = $_POST['dateMer'];
$DateJeu = $_POST['dateJeu'];
$DateVen = $_POST['dateVen'];

$lundi = "INSERT INTO reservation VALUES('$id', '$DateLun', '$SalLun', '$EntLun', '$ViaLun', '$AccLun', '$FroLun', '$DesLun', '$InvLun')";
$mardi = "INSERT INTO reservation VALUES('$id', '$DateMar', '$SalMar', '$EntMar', '$ViaMar', '$AccMar', '$FroMar', '$DesMar', '$InvMar')";
$mercredi = "INSERT INTO reservation VALUES('$id', '$DateMer', '$SalMer', '$EntMer', '$ViaMer', '$AccMer', '$FroMer', '$DesMer', '$InvMer')";
$jeudi = "INSERT INTO reservation VALUES('$id', '$DateJeu', '$SalJeu', '$EntJeu', '$ViaJeu', '$AccJeu', '$FroJeu', '$DesJeu', '$InvJeu')";
$vendredi = "INSERT INTO reservation VALUES('$id', '$DateVen', '$SalVen', '$EntVen', '$ViaVen', '$AccVen', '$FroVen', '$DesVen', '$InvVen')";

mysql_query($lundi) or die('Erreur lors de l\'ajout en base de donnés d\'un Utilisateur.');
mysql_query($mardi) or die('Erreur lors de l\'ajout en base de donnés d\'un Utilisateur.');
mysql_query($mercredi) or die('Erreur lors de l\'ajout en base de donnés d\'un Utilisateur.');
mysql_query($jeudi) or die('Erreur lors de l\'ajout en base de donnés d\'un Utilisateur.');
mysql_query($vendredi) or die('Erreur lors de l\'ajout en base de donnés d\'un Utilisateur.');

mysql_close();

header('Location: index.php?page=12');

?>