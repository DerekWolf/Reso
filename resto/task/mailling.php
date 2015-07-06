<?php 
require_once('../function/database.php');

connect();

// Lister personne n'ayant pas réserver pour la semaine prochaine
$pers = notReserve();

while($per = mysql_fetch_assoc($pers))
{
	var_dump($per);
}

// Récupérer les mails des personnes sur l'AD
<? 
$user  = 'administrateur';   // user
$pass = 'comite001apajh31';  // password
// connect to ldap server
$conn = ldap_connect("192.168.31.170") or die("Could not connect to LDAP server.");

if ($ldapconn) {
   // binding to ldap server
   @$ldapbind = ldap_bind($conn, $user, $pass);
   // verify binding
   if ($ldapbind) {
       echo "Connexion LDAP ... OK<br>";
	   // preparation des données
	   $dn="cn=test, o=eabjm,c=com";
	   $valeur="test";
	   $attribut="mail";
	   // Comparaison du mot de passe à celui dans l'annuaire
	   $resultat=ldap_compare($conn, $dn, $attribut, $valeur);
	   if ($resultat == -1) {
	   	  echo "Erreur : ".ldap_error($conn);
	   }else if ($resultat == TRUE){
	   	  echo "Le mot de passe est correct";
	   }else{
	   	  echo "Le mot de passe est erronné...";
	   }
       ldap_close($conn);
   } else {
       echo "Connexion LDAP ... ECHEC";
   }
} 
?>

// Pour chaque adresse récupérer envoyé un mail


deconnect();
?>