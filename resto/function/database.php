<?php
// connexion à la base de donnés
function connect(){
	$connect = mysql_connect('localhost', 'root', '') or die("Erreur de connexion au serveur.");
	mysql_select_db('menu', $connect);
	mysql_query("SET NAMES 'utf8'");
}

// deconnexion
function deconnect(){
	mysql_close();
}


// ============= Fonction de Date et de jour ==========
date_default_timezone_set('Europe/Paris');

//Date d'ajourd'hui
function dateAct()
{
	return $date = date('Y-m-d');
}

// Date du prochain Lundi
function nextMonday()
{
	date_default_timezone_set('Europe/Paris');
	return $date = date('Y-m-d',strtotime("next Monday"));
}

// Date du Lundi de la semaine courante
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

// Ajout d'un jour à la date
function mondayTuesday($dateMonday)
{
	$unjour = 3600 * 24;
	$Tuesday = strtotime($dateMonday) + $unjour;
	return $date = date('Y-m-d', $Tuesday);
}

// Ajout de deux jours à la date
function mondayWednesday($dateMonday)
{
	$deuxjour = 3600 * 24 * 2;
	$Wednesday = strtotime($dateMonday) + $deuxjour;
	return $date = date('Y-m-d', $Wednesday);
}


// Ajout de trois jours à la date
function mondayThursday($dateMonday)
{
	$troisjour = 3600 * 24 * 3;
	$Thursday = strtotime($dateMonday) + $troisjour;
	return $date = date('Y-m-d', $Thursday);
}

// Ajout de quattres jours à la date
function mondayFriday($dateMonday)
{
	$quatrejour = 3600 * 24 * 4;
	$Friday = strtotime($dateMonday) + $quatrejour;
	return $date = date('Y-m-d', $Friday);
}


// ============= Ajout en base de donnés ==============

// Ajout d'un utilisateur :
function addUser($nom, $prenom, $mdp, $etab)
{
	$sql = "INSERT INTO utilisateur(Nom, Prenom, MdP, Etablissement) VALUES('$nom', '$prenom', '$mdp', '$etab')";
	mysql_query($sql) or die('Erreur lors de l\'ajout en base de donnés d\'un Utilisateur.');
}

// ================ Autres fonction ==============

// Recherche si un utilisateur existe déjà
function existUser($nom, $mdp)
{
	$sql = "SELECT EXISTS(SELECT * from `utilisateur` WHERE Nom='$nom' and MdP='$mdp')";
	return $reponse = mysql_query($sql);
}

// Renvoie les informations liées à un utilisateur
function searchUser($nom, $mdp)
{
	$sql = "SELECT * from `utilisateur` WHERE Nom='$nom' and MdP='$mdp'";
	$reponse = mysql_query($sql);
	$row = mysql_fetch_row($reponse);
	return $row;
}

// Renvoie toutes les informations pour un type de plat et une date donnée
function returnPlat($type, $date)
{
	$jour = date('Y-m-d', strtotime($date));
	$sql = "SELECT * from `plat` WHERE Type = '".$type."' and Jour = '".$jour."'";
	$reponse = mysql_query($sql) or die (mysql_error());
	return $reponse;
}

// Renvoie le nom d'un plat pour un type de plat et une date donnée
function returnNomPlat($type, $date)
{
	$jour = date('Y-m-d', strtotime($date));
	$sql = "SELECT Nom from `plat` WHERE Type = '$type' and Jour = '$jour'";
	$reponse = mysql_query($sql) or die (mysql_error());
	return $reponse;
}

// Renvoie toutes les informations relatives à une reservation en fonction d'une date et d'un Utilisateur
function voirReservation($id, $date)
{
	$jour = date('Y-m-d', strtotime($date));
	$sql = "SELECT distinct Entre , Viande, Accompagnement, Fromage, Dessert, MenuSalade, Multiplicateur from `reservation` WHERE IdUtilisateur = '".$id."' and Jour = '".$date."'";
	$res = mysql_query($sql) or die (mysql_error());
	$ret = mysql_fetch_assoc($res);
	return $ret;
}

// Renvoie le nombre de fois ou une entrée à été commandés
function returnNombreEntree($date, $nom)
{
	$sql = "SELECT sum(Multiplicateur) as multi FROM reservation WHERE Jour='".$date."' and Entre='".$nom."'";
	$res = mysql_query($sql) or die (mysql_error());
	$ret = mysql_fetch_assoc($res);
	return $ret;
}

// Renvoie le nombre de fois ou une viande à été commandés
function returnNombreViande($date, $nom)
{
	$sql = "SELECT sum(Multiplicateur) as multi FROM reservation WHERE Jour='".$date."' and Viande='".$nom."'";
	$res = mysql_query($sql) or die (mysql_error());
	$ret = mysql_fetch_assoc($res);
	return $ret;
}

// Renvoie le nombre de fois ou un accompagnement à été commandés
function returnNombreAccompagnement($date, $nom)
{
	$sql = "SELECT sum(Multiplicateur) as multi FROM reservation WHERE Jour='".$date."' and Accompagnement='".$nom."'";
	$res = mysql_query($sql) or die (mysql_error());
	$ret = mysql_fetch_assoc($res);
	return $ret;
}

//Renvoie le nombre de fois ou le fromage a été commandé
function returnNombreFromage($date)
{
	$sql = "SELECT sum(Multiplicateur) as multi FROM reservation WHERE Jour='".$date."' and Fromage	='oui'";
	$res = mysql_query($sql) or die (mysql_error());
	$ret = mysql_fetch_assoc($res);
	return $ret;
}

// Renvoie le nombre de fois ou un dessert à été commandés
function returnNombreDessert($date, $nom)
{
	$sql = "SELECT sum(Multiplicateur) as multi FROM reservation WHERE Jour='".$date."' and Dessert='".$nom."'";
	$res = mysql_query($sql) or die (mysql_error());
	$ret = mysql_fetch_assoc($res);
	return $ret;
}

//Renvoie le nombre de fois ou le menu salade a été commander
function returnNombreMS($date)
{
	$sql = "SELECT sum(Multiplicateur) as multi FROM reservation WHERE Jour='".$date."' and MenuSalade='oui'";
	$res = mysql_query($sql) or die (mysql_error());
	$ret = mysql_fetch_assoc($res);
	return $ret;
}

// REnvoie le nombre de reservation total dans une journée
function returnNmbReservation($date)
{
	$sql = "SELECT * FROM reservation WHERE jour='".$date."'";
	$res = mysql_query($sql) or die (mysql_error());
	$ret = mysql_num_rows($res);
	return $ret;
}

// Renvoie les éléments pour permettre la synthèse RH
function returnInfoUser()
{
	$sql = "SELECT distinct Nom, Prenom, Etablissement ,(Select count(jour) from reservation where IdUtilisateur = Id) AS Nmb, (select sum(Multiplicateur - 1) from reservation where IdUtilisateur = Id and Multiplicateur > 1) AS Inv FROM utilisateur";
	$res = mysql_query($sql) or die (mysql_error());
	return $res;
}

// Renvoie le nombre de personne liée à un établissement
function personneParEtablissement($etablissement)
{
	$sql = "SELECT * FROM utilisateur where Etablissement='".$etablissement."'";
	$res = mysql_query($sql) or die (mysql_error());
	$ret = mysql_num_rows($res);
	return $ret;
}

// Compre la date actuel avec la date limitte de modification d'une reservation
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