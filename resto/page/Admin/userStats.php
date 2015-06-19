<?php 
require_once('/function/database.php');

$Id = $_SESSION['Id'];

$infos = returnInfoUser();
$nmbSiege = personneParEtablissement("Siege");
?>

<table class="center">
	<tr>
		<th>Etablissement :</th>
		<th>Nom :</th>
		<th>Prénom :</th>
		<th>Nombre de reservation :</th>
	</tr>
		<?php
			while ($info = mysql_fetch_array($infos)) {
				if($info['Etablissement'] == "Administration")
				{

				}else{
					echo ("<tr><td>".$info['Etablissement']."</td>");
					echo ("<td>".$info['Nom']."</td>");
					echo ("<td>".$info['Prenom']."</td>");
					echo ("<td>".$info['Nmb']."</td></tr>");
				}
			}
		?>
</table>
<form action="function/export_excel_resUtilisateur.php">
	<input type="submit" value="Exporter au format Excel">
</form>
