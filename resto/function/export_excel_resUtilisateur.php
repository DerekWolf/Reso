<?php
    // à elle seule, la ligne suivante suffit à envoyer le résultat du script dans une feuille Excel
    header("Content-type: application/vnd.ms-excel");
    // la ligne suivante est facultative, elle sert à donner un nom au fichier Excel
   header("Content-Disposition: attachment; filename=synthese_reservation.xls");
   // La suite est une simple requête php-mysql. On interroge la table utilisée dans l'exemple précédent. 
   $bdd = mysql_connect("localhost","root","");
   mysql_select_db(("menu"),$bdd);
   $d2 = date('Y-m-d',strtotime('first day of this month'));
   $d3 = date('Y-m-d',strtotime('last day of this month'));
   // notez la présence du caractère arobase (@) , en cas d'erreur, 
  // il empêche PHP d'écrire un message d'erreur sur le navigateur
    $requete=@mysql_query("SELECT distinct Nom, Prenom, Etablissement , (Select count(jour) from reservation where IdUtilisateur = Id and Jour BETWEEN '".$d2."' AND '".$d3."') AS Nmb, (select sum(Multiplicateur - 1) from reservation where IdUtilisateur = Id and Multiplicateur > 1 and Jour BETWEEN '".$d2."' AND '".$d3."' ) AS Inv FROM utilisateur where Etablissement <> 'Administration'");
    // on vérifie le contenu de  la requête ;
    if (@mysql_numrows($requete) == 0) 
        {   // si elle est vide, on en informe l'utilisateur à l'aide d'un Javascript 
            print "<script> alert('La requête n\'a pas abouti !')</script>";
        } 

   // construction du tableau HTML
  print '<table border=1>
            <!-- impression des titres de colonnes -->
             <TR><TD>Etablissement</TD><TD>Nom</TD><TD>Prenom</TD><TD>Nombre de reservation</TD><TD>Nombre d\'invité</TD></TR>';

    // lecture du contenu de la requête avec 2 boucles imbriquées; par ligne et par colonne
    for ($ligne=0 ; $ligne<@mysql_numrows($requete);$ligne++)
     {
         for ($colonne = 0;$colonne < 5 ; $colonne++)  
              {
                 print '<TD>' .mysql_result($requete , $ligne, $colonne).  '</TD>';   
              }
       print '</TR>';
      }
    print '</TABLE>';
    mysql_close();

// on informe l'utilisateur de la réussite 
   if (@mysql_numrows($requete) >0 ) 
        {   
            print "<script> alert('La table est bien mise à jour !')</script>";
        } 
?>