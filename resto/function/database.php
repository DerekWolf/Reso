<?php
date_default_timezone_set('Europe/Paris');

function addUser($nom, $prenom, $mdp, $etab)
{
	$connect = mysql_connect('localhost', 'root', '') or die("Erreur de connexion au serveur.");
	mysql_select_db('menu', $connect);
	$sql = "INSERT INTO utilisateur(Nom, Prenom, MdP, Etablissement) VALUES('$nom', '$prenom', '$mdp', '$etab')";
	mysql_query($sql) or die('Erreur lors de l\'ajout en base de donnés d\'un Utilisateur.');
	mysql_close();
}

function existUser($nom, $mdp)
{
	$connect = mysql_connect('localhost', 'root', '') or die("Erreur de connexion au serveur.");
	mysql_select_db('menu', $connect);
	$sql = "SELECT EXISTS(SELECT * from `utilisateur` WHERE Nom='$nom' and MdP='$mdp')";
	return $reponse = mysql_query($sql);
	mysql_close();
}

function searchUser($nom, $mdp)
{
	$connect = mysql_connect('localhost', 'root', '') or die("Erreur de connexion au serveur.");
	mysql_select_db('menu', $connect);
	$sql = "SELECT * from `utilisateur` WHERE Nom='$nom' and MdP='$mdp'";
	$reponse = mysql_query($sql);
	$row = mysql_fetch_row($reponse);
	return $row;
	mysql_close();
}

function dateAct()
{
	return $date = date('Y-m-d');
}

function nextMonday()
{
	date_default_timezone_set('Europe/Paris');
	return $date = date('Y-m-d',strtotime("next Monday"));
}

function currentMonday()
{
	$dateAct = dateAct();
	$lundiPro = nextMonday();
	$jour7 = 24*3600*7;
	$date = strtotime($lundiPro) - $jour7;
	$dateLundi = date('Y-m-d', $date);

	if($dateLundi == $dateAct)
	{
		return $dateAct;
	}else{
		return $date = date('Y-m-d',strtotime("previous Monday"));
	}
}

function mondayTuesday($dateMonday)
{
	$unjour = 3600 * 24;
	$Tuesday = strtotime($dateMonday) + $unjour;
	return $date = date('Y-m-d', $Tuesday);
}

function mondayWednesday($dateMonday)
{
	$deuxjour = 3600 * 24 * 2;
	$Wednesday = strtotime($dateMonday) + $deuxjour;
	return $date = date('Y-m-d', $Wednesday);
}

function mondayThursday($dateMonday)
{
	$troisjour = 3600 * 24 * 3;
	$Thursday = strtotime($dateMonday) + $troisjour;
	return $date = date('Y-m-d', $Thursday);
}

function mondayFriday($dateMonday)
{
	$quatrejour = 3600 * 24 * 4;
	$Friday = strtotime($dateMonday) + $quatrejour;
	return $date = date('Y-m-d', $Friday);
}

function nombreLigne($typeDePlat)
{
	$connect = mysql_connect('localhost', 'root', '') or die("Erreur de connexion au serveur.");
	mysql_select_db('menu', $connect);
	$sql = "SELECT Id from `plat` WHERE Type = '$typeDePlat'";
	$reponse = mysql_query($sql) or die (mysql_error());
	$resultat = mysql_num_rows($reponse);
	return $resultat;
	mysql_close();
}

function returnPlat($type, $date)
{
	$jour = date('Y-m-d', strtotime($date));
	$connect = mysql_connect('localhost', 'root', '') or die("Erreur de connexion au serveur.");
	mysql_select_db('menu', $connect);
	$sql = "SELECT * from `plat` WHERE Type = '$type' and Jour = '$jour'";
	$reponse = mysql_query($sql) or die (mysql_error());
	return $reponse;
	mysql_close();
}

function returnNomPlat($type, $date)
{
	$jour = date('Y-m-d', strtotime($date));
	$connect = mysql_connect('localhost', 'root', '') or die("Erreur de connexion au serveur.");
	mysql_select_db('menu', $connect);
	$sql = "SELECT Nom from `plat` WHERE Type = '$type' and Jour = '$jour'";
	$reponse = mysql_query($sql) or die (mysql_error());
	return $reponse;
	mysql_close();
}

function voirReservation($id, $date)
{
	$jour = date('Y-m-d', strtotime($date));
	$connect = mysql_connect('localhost', 'root', '') or die("Erreur de connexion au serveur.");
	mysql_select_db('menu', $connect);
	$sql = "SELECT distinct Entre , Viande, Accompagnement, Fromage, Dessert from `reservation` WHERE IdUtilisateur = '".$id."' and Jour = '".$date."'";
	$res = mysql_query($sql) or die (mysql_error());
	$ret = mysql_fetch_assoc($res);
	return $ret;
	mysql_close();
}

function createReservation()
{
	$date = date('Y-m-d');
	$connect = mysql_connect('localhost', 'root', '') or die("Erreur de connexion au serveur.");
	mysql_select_db('menu', $connect);
	$sql = "INSERT INTO `reservation` VALUES (2, '".$date."', 'Carotte', 'Cochon', 'Patate', 0, 'Gateau')";
	$res = mysql_query($sql) or die (mysql_error());
	mysql_close();
}

function deleteReservation()
{
	$date = date('Y-m-d');
	$connect = mysql_connect('localhost', 'root', '') or die("Erreur de connexion au serveur.");
	mysql_select_db('menu', $connect);
	$sql = "DELETE FROM `reservation` WHERE IdUtilisateur = 2 and jour = '".$date."'";
	$res = mysql_query($sql) or die (mysql_error());
	mysql_close();
}

function updateReservation()
{
	$date = date('Y-m-d');
	$connect = mysql_connect('localhost', 'root', '') or die("Erreur de connexion au serveur.");
	mysql_select_db('menu', $connect);
	$sql = "UPDATE `reservation` set Viande = 'Pascochon' where IdUtilisateur = 2 and jour = '".$date."'";
	mysql_query($sql) or die (mysql_error());
	mysql_close();
}

function createMenu()
{
	$date = date('Y-m-d');
	$connect = mysql_connect('localhost', 'root', '') or die("Erreur de connexion au serveur.");
	mysql_select_db('menu', $connect);
	$sql = "INSERT INTO `plat` VALUES ()";
	mysql_query($sql) or die (mysql_error());
	mysql_close();
}


function returnNombreEntree($date, $nom)
{
	$connect = mysql_connect('localhost', 'root', '') or die("Erreur de connexion au serveur.");
	mysql_select_db('menu', $connect);
	$sql = "SELECT * FROM reservation WHERE jour='".$date."' and Entre='".$nom."'";
	$res = mysql_query($sql) or die (mysql_error());
	$ret = mysql_num_rows($res);
	return $ret;
	mysql_close();
}

function returnNombreViande($date, $nom)
{
	$connect = mysql_connect('localhost', 'root', '') or die("Erreur de connexion au serveur.");
	mysql_select_db('menu', $connect);
	$sql = "SELECT * FROM reservation WHERE jour='".$date."' and Viande='".$nom."'";
	$res = mysql_query($sql) or die (mysql_error());
	$ret = mysql_num_rows($res);
	return $ret;
	mysql_close();
}

function returnNombreAccompagnement($date, $nom)
{
	$connect = mysql_connect('localhost', 'root', '') or die("Erreur de connexion au serveur.");
	mysql_select_db('menu', $connect);
	$sql = "SELECT * FROM reservation WHERE jour='".$date."' and Accompagnement='".$nom."'";
	$res = mysql_query($sql) or die (mysql_error());
	$ret = mysql_num_rows($res);
	return $ret;
	mysql_close();
}

function returnNombreDessert($date, $nom)
{
	$connect = mysql_connect('localhost', 'root', '') or die("Erreur de connexion au serveur.");
	mysql_select_db('menu', $connect);
	$sql = "SELECT COUNT(*) FROM reservation WHERE jour='".$date."' and Dessert='".$nom."'";
	$res = mysql_query($sql) or die (mysql_error());
	$ret = mysql_num_rows($res);
	return $ret;
	mysql_close();
}

function returnNmbReservation($date)
{
	$connect = mysql_connect('localhost', 'root', '') or die("Erreur de connexion au serveur.");
	mysql_select_db('menu', $connect);
	$sql = "SELECT * FROM reservation WHERE jour='".$date."'";
	$res = mysql_query($sql) or die (mysql_error());
	$ret = mysql_num_rows($res);
	return $ret;
	mysql_close();
}

function returnInfoUser()
{
	$connect = mysql_connect('localhost', 'root', '') or die("Erreur de connexion au serveur.");
	mysql_select_db('menu', $connect);
	$sql = "SELECT distinct Nom, Prenom, Etablissement ,(Select count(jour) from reservation where IdUtilisateur = Id) AS Nmb FROM utilisateur";
	$res = mysql_query($sql) or die (mysql_error());
	return $res;
	mysql_close();
}

function personneParEtablissement($etablissement)
{
	$connect = mysql_connect('localhost', 'root', '') or die("Erreur de connexion au serveur.");
	mysql_select_db('menu', $connect);
	$sql = "select * FROM utilisateur where Etablissement='".$etablissement."'";
	$res = mysql_query($sql) or die (mysql_error());
	$ret = mysql_num_rows($res);
	return ($ret - 1);
	mysql_close();
}

function checkToAutorise($dateToCheck)
{
	$date = dateAct();
	$troisJours = 3600 * 24 * 3;
	$dateLimit = strtotime($dateToCheck) - $troisJours;
	$dateLim = date('Y-m-d', $dateLimit);
	if($date <= $dateLim)
	{
		$res = true;
		return $res;
	}else{
		$res = false;
		return $res;
	}
}
?> 