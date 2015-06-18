<?php
	require_once('/function/database.php');

	$Id = $_SESSION['Id'];

	
$Monday = currentMonday();
$Tuesday = mondayTuesday($Monday);
$Wednesday = mondayWednesday($Monday);
$Thursday = mondayThursday($Monday);
$Friday = mondayFriday($Monday);

$NextMonday = nextMonday();
$NextTuesday = mondayTuesday($NextMonday);
$NextWednesday = mondayWednesday($NextMonday);
$NextThursday = mondayThursday($NextMonday);
$NextFriday = mondayFriday($NextMonday);
?>
<table class="center">
	<tr>
		<td></td>
		<th >Lundi</th>
		<th >Mardi</th>
		<th >Mercredi</th>
		<th >Jeudi</th>
		<th >Vendredi</th>
	</tr>
	<tr>
		<th>Entré</th>
		<td>
		<?php
			$Entree = returnPlat("Entree", $Monday);
			while ($plats = mysql_fetch_assoc($Entree)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreEntree($Monday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Entree = returnPlat("Entree", $Tuesday);
			while ($plats = mysql_fetch_assoc($Entree)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreEntree($Tuesday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Entree = returnPlat("Entree", $Wednesday);
			while ($plats = mysql_fetch_assoc($Entree)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreEntree($Wednesday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Entree = returnPlat("Entree", $Thursday);
			while ($plats = mysql_fetch_assoc($Entree)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreEntree($Thursday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Entree = returnPlat("Entree", $Friday);
			while ($plats = mysql_fetch_assoc($Entree)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreEntree($Friday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
	</tr>
	<tr>
		<th>Viandes</th>
		<td>
		<?php
			$Viande = returnPlat("Viande", $Monday);
			while ($plats = mysql_fetch_assoc($Viande)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreViande($Monday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Viande = returnPlat("Viande", $Tuesday);
			while ($plats = mysql_fetch_assoc($Viande)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreViande($Tuesday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Viande = returnPlat("Viande", $Wednesday);
			while ($plats = mysql_fetch_assoc($Viande)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreViande($Wednesday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Viande = returnPlat("Viande", $Thursday);
			while ($plats = mysql_fetch_assoc($Viande)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreViande($Thursday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Viande = returnPlat("Viande", $Friday);
			
			while ($plats = mysql_fetch_assoc($Viande)) {
					echo("".$plats['Nom']."");
					echo("".$res = returnNombreViande($Friday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
	</tr>
	<tr>
		<th>Accompagnement</th>
		<td>
		<?php
			$Accompagnement = returnPlat("Accompagnement", $Monday);
			while ($plats = mysql_fetch_assoc($Accompagnement)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreAccompagnement($Monday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Accompagnement = returnPlat("Accompagnement", $Tuesday);
			while ($plats = mysql_fetch_assoc($Accompagnement)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreAccompagnement($Tuesday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Accompagnement = returnPlat("Accompagnement", $Wednesday);
			while ($plats = mysql_fetch_assoc($Accompagnement)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreAccompagnement($Wednesday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Accompagnement = returnPlat("Accompagnement", $Thursday);
			while ($plats = mysql_fetch_assoc($Accompagnement)) {
					echo("".$plats['Nom']." :<br>");
					echo("".$res = returnNombreAccompagnement($Thursday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Accompagnement = returnPlat("Accompagnement", $Friday);
			while ($plats = mysql_fetch_assoc($Accompagnement)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreAccompagnement($Friday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
	</tr>
	<tr>
		<th>Dessert</th>
		<td>
		<?php
			$Dessert = returnPlat("Dessert", $Monday);
			while ($plats = mysql_fetch_assoc($Dessert)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreDessert($Monday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Dessert = returnPlat("Dessert", $Tuesday);
			while ($plats = mysql_fetch_assoc($Dessert)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreDessert($Tuesday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Dessert = returnPlat("Dessert", $Wednesday);
			while ($plats = mysql_fetch_assoc($Dessert)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreDessert($Wednesday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Dessert = returnPlat("Dessert", $Thursday);
			while ($plats = mysql_fetch_assoc($Dessert)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreDessert($Thursday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Dessert = returnPlat("Dessert", $Friday);
			while ($plats = mysql_fetch_assoc($Dessert)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreDessert($Friday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
	</tr>
	<tr>
		<th>Nombre de personnes total :</th>
		<td>
			<?php
				$res = returnNmbReservation($Monday);
				echo($res);
			?>
		</td>
		<td>
			<?php
				$res = returnNmbReservation($Tuesday);
				echo($res);
			?>
		</td>
		<td>
			<?php
				$res = returnNmbReservation($Wednesday);
				echo($res);
			?>
		</td>
		<td>
			<?php
				$res = returnNmbReservation($Thursday);
				echo($res);
			?>
		</td>
		<td>
			<?php
				$res = returnNmbReservation($Friday);
				echo($res);
			?>
		</td>
	</tr>
</table>

<table class="center">
	<tr>
		<td></td>
		<th >Lundi</th>
		<th >Mardi</th>
		<th >Mercredi</th>
		<th >Jeudi</th>
		<th >Vendredi</th>
	</tr>
	<tr>
		<th>Entré</th>
		<td>
		<?php
			$Entree = returnPlat("Entree", $NextMonday);
			while ($plats = mysql_fetch_array($Entree)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreEntree($NextMonday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Entree = returnPlat("Entree", $NextTuesday);
			while ($plats = mysql_fetch_assoc($Entree)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreEntree($NextTuesday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Entree = returnPlat("Entree", $NextWednesday);
			while ($plats = mysql_fetch_assoc($Entree)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreEntree($NextWednesday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Entree = returnPlat("Entree", $NextThursday);
			while ($plats = mysql_fetch_assoc($Entree)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreEntree($NextThursday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Entree = returnPlat("Entree", $NextFriday);
			while ($plats = mysql_fetch_assoc($Entree)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreEntree($NextFriday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
	</tr>
	<tr>
		<th>Viandes</th>
		<td>
		<?php
			$Viande = returnPlat("Viande", $NextMonday);
			while ($plats = mysql_fetch_assoc($Viande)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreViande($NextMonday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Viande = returnPlat("Viande", $NextTuesday);
			while ($plats = mysql_fetch_assoc($Viande)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreViande($NextTuesday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Viande = returnPlat("Viande", $NextWednesday);
			while ($plats = mysql_fetch_assoc($Viande)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreViande($NextWednesday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Viande = returnPlat("Viande", $NextThursday);
			while ($plats = mysql_fetch_assoc($Viande)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreViande($NextThursday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Viande = returnPlat("Viande", $NextFriday);
			
			while ($plats = mysql_fetch_assoc($Viande)) {
					echo("".$plats['Nom']."");
					echo("".$res = returnNombreViande($NextFriday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
	</tr>
	<tr>
		<th>Accompagnement</th>
		<td>
		<?php
			$Accompagnement = returnPlat("Accompagnement", $NextMonday);
			while ($plats = mysql_fetch_assoc($Accompagnement)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreAccompagnement($NextMonday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Accompagnement = returnPlat("Accompagnement", $NextTuesday);
			while ($plats = mysql_fetch_assoc($Accompagnement)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreAccompagnement($NextTuesday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Accompagnement = returnPlat("Accompagnement", $NextWednesday);
			while ($plats = mysql_fetch_assoc($Accompagnement)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreAccompagnement($NextWednesday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Accompagnement = returnPlat("Accompagnement", $NextThursday);
			while ($plats = mysql_fetch_assoc($Accompagnement)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreAccompagnement($NextThursday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Accompagnement = returnPlat("Accompagnement", $NextFriday);
			while ($plats = mysql_fetch_assoc($Accompagnement)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreAccompagnement($NextFriday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
	</tr>
	<tr>
		<th>Dessert</th>
		<td>
		<?php
			$Dessert = returnPlat("Dessert", $NextMonday);
			while ($plats = mysql_fetch_assoc($Dessert)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreDessert($NextMonday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Dessert = returnPlat("Dessert", $NextTuesday);
			while ($plats = mysql_fetch_assoc($Dessert)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreDessert($NextTuesday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Dessert = returnPlat("Dessert", $NextWednesday);
			while ($plats = mysql_fetch_assoc($Dessert)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreDessert($NextWednesday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Dessert = returnPlat("Dessert", $NextThursday);
			while ($plats = mysql_fetch_assoc($Dessert)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreDessert($NextThursday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
		<td>
		<?php
			$Dessert = returnPlat("Dessert", $NextFriday);
			while ($plats = mysql_fetch_assoc($Dessert)) {
					echo("".$plats['Nom']." :");
					echo("".$res = returnNombreDessert($NextFriday, mysql_real_escape_string($plats['Nom']))."<br>");
			}
		?>
		</td>
	</tr>
	<tr>
		<th>Nombre de personnes total :</th>
		<td>
			<?php
				$res = returnNmbReservation($NextMonday);
				echo($res);
			?>
		</td>
		<td>
			<?php
				$res = returnNmbReservation($NextTuesday);
				echo($res);
			?>
		</td>
		<td>
			<?php
				$res = returnNmbReservation($NextWednesday);
				echo($res);
			?>
		</td>
		<td>
			<?php
				$res = returnNmbReservation($NextThursday);
				echo($res);
			?>
		</td>
		<td>
			<?php
				$res = returnNmbReservation($NextFriday);
				echo($res);
			?>
		</td>
	</tr>
</table>