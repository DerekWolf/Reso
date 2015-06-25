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
		<th >Menu Salade :</th>
		<td><?php
			$res = returnNombreMS($Monday);
			echo $res['multi'];
		?></td>
		<td><?php
			$res = returnNombreMS($Tuesday);
			echo $res['multi'];
		?></td>
		<td><?php
			$res = returnNombreMS($Wednesday);
			echo $res['multi'];
		?></td>
		<td><?php
			$res = returnNombreMS($Thursday);
			echo $res['multi'];
		?></td>
		<td><?php
			$res = returnNombreMS($Friday);
			echo $res['multi'];
		?></td>
	</tr>
	<tr>
		<th>Entré</th>
		<td>
		<?php
			$Entree = returnPlat("Entree", $Monday);
			while ($plats = mysql_fetch_assoc($Entree)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreEntree($Monday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
					
			}
		?>
		</td>
		<td>
		<?php
			$Entree = returnPlat("Entree", $Tuesday);
			while ($plats = mysql_fetch_assoc($Entree)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreEntree($Tuesday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Entree = returnPlat("Entree", $Wednesday);
			while ($plats = mysql_fetch_assoc($Entree)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreEntree($Wednesday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Entree = returnPlat("Entree", $Thursday);
			while ($plats = mysql_fetch_assoc($Entree)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreEntree($Thursday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Entree = returnPlat("Entree", $Friday);
			while ($plats = mysql_fetch_assoc($Entree)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreEntree($Friday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
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
					$res = returnNombreViande($Monday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Viande = returnPlat("Viande", $Tuesday);
			while ($plats = mysql_fetch_assoc($Viande)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreViande($Tuesday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Viande = returnPlat("Viande", $Wednesday);
			while ($plats = mysql_fetch_assoc($Viande)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreViande($Wednesday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Viande = returnPlat("Viande", $Thursday);
			while ($plats = mysql_fetch_assoc($Viande)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreViande($Thursday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Viande = returnPlat("Viande", $Friday);
			
			while ($plats = mysql_fetch_assoc($Viande)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreViande($Friday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
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
					$res = returnNombreAccompagnement($Monday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Accompagnement = returnPlat("Accompagnement", $Tuesday);
			while ($plats = mysql_fetch_assoc($Accompagnement)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreAccompagnement($Tuesday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Accompagnement = returnPlat("Accompagnement", $Wednesday);
			while ($plats = mysql_fetch_assoc($Accompagnement)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreAccompagnement($Wednesday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Accompagnement = returnPlat("Accompagnement", $Thursday);
			while ($plats = mysql_fetch_assoc($Accompagnement)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreAccompagnement($Thursday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Accompagnement = returnPlat("Accompagnement", $Friday);
			while ($plats = mysql_fetch_assoc($Accompagnement)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreAccompagnement($Friday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
	</tr>
	<tr>
		<th >Fromage :</th>
		<td><?php
			$res = returnNombreFromage($Monday);
			echo $res['multi'];
		?></td>
		<td><?php
			$res = returnNombreFromage($Tuesday);
			echo $res['multi'];
		?></td>
		<td><?php
			$res = returnNombreFromage($Wednesday);
			echo $res['multi'];
		?></td>
		<td><?php
			$res = returnNombreFromage($Thursday);
			echo $res['multi'];
		?></td>
		<td><?php
			$res = returnNombreFromage($Friday);
			echo $res['multi'];
		?></td>
	</tr>
	<tr>
		<th>Dessert</th>
		<td>
		<?php
			$Dessert = returnPlat("Dessert", $Monday);
			while ($plats = mysql_fetch_assoc($Dessert)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreDessert($Monday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Dessert = returnPlat("Dessert", $Tuesday);
			while ($plats = mysql_fetch_assoc($Dessert)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreDessert($Tuesday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Dessert = returnPlat("Dessert", $Wednesday);
			while ($plats = mysql_fetch_assoc($Dessert)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreDessert($Wednesday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Dessert = returnPlat("Dessert", $Thursday);
			while ($plats = mysql_fetch_assoc($Dessert)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreDessert($Thursday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Dessert = returnPlat("Dessert", $Friday);
			while ($plats = mysql_fetch_assoc($Dessert)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreDessert($Friday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
	</tr>
	<tr>
		<th>Nombre de personnes total :</th>
		<td>
			<?php
				$res = returnNmbReservation($Monday);
				echo($res['multi']);
			?>
		</td>
		<td>
			<?php
				$res = returnNmbReservation($Tuesday);
				echo($res['multi']);
			?>
		</td>
		<td>
			<?php
				$res = returnNmbReservation($Wednesday);
				echo($res['multi']);
			?>
		</td>
		<td>
			<?php
				$res = returnNmbReservation($Thursday);
				echo($res['multi']);
			?>
		</td>
		<td>
			<?php
				$res = returnNmbReservation($Friday);
				echo($res['multi']);
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
		<th >Menu Salade :</th>
		<td><?php
			$res = returnNombreMS($NextMonday);
			echo $res['multi'];
		?></td>
		<td><?php
			$res = returnNombreMS($NextTuesday);
			echo $res['multi'];
		?></td>
		<td><?php
			$res = returnNombreMS($NextWednesday);
			echo $res['multi'];
		?></td>
		<td><?php
			$res = returnNombreMS($NextThursday);
			echo $res['multi'];
		?></td>
		<td><?php
			$res = returnNombreMS($NextFriday);
			echo $res['multi'];
		?></td>
	</tr>
	<tr>
		<th>Entré</th>
		<td>
		<?php
			$Entree = returnPlat("Entree", $NextMonday);
			while ($plats = mysql_fetch_assoc($Entree)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreEntree($NextMonday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Entree = returnPlat("Entree", $NextTuesday);
			while ($plats = mysql_fetch_assoc($Entree)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreEntree($NextTuesday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Entree = returnPlat("Entree", $NextWednesday);
			while ($plats = mysql_fetch_assoc($Entree)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreEntree($NextWednesday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Entree = returnPlat("Entree", $NextThursday);
			while ($plats = mysql_fetch_assoc($Entree)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreEntree($NextThursday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Entree = returnPlat("Entree", $NextFriday);
			while ($plats = mysql_fetch_assoc($Entree)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreEntree($NextFriday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
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
					$res = returnNombreViande($NextMonday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Viande = returnPlat("Viande", $NextTuesday);
			while ($plats = mysql_fetch_assoc($Viande)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreViande($NextTuesday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Viande = returnPlat("Viande", $NextWednesday);
			while ($plats = mysql_fetch_assoc($Viande)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreViande($NextWednesday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Viande = returnPlat("Viande", $NextThursday);
			while ($plats = mysql_fetch_assoc($Viande)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreViande($NextThursday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Viande = returnPlat("Viande", $NextFriday);
			while ($plats = mysql_fetch_assoc($Viande)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreViande($NextFriday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
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
					$res = returnNombreAccompagnement($NextMonday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Accompagnement = returnPlat("Accompagnement", $NextTuesday);
			while ($plats = mysql_fetch_assoc($Accompagnement)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreAccompagnement($NextTuesday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Accompagnement = returnPlat("Accompagnement", $NextWednesday);
			while ($plats = mysql_fetch_assoc($Accompagnement)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreAccompagnement($NextWednesday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Accompagnement = returnPlat("Accompagnement", $NextThursday);
			while ($plats = mysql_fetch_assoc($Accompagnement)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreAccompagnement($NextThursday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Accompagnement = returnPlat("Accompagnement", $NextFriday);
			while ($plats = mysql_fetch_assoc($Accompagnement)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreAccompagnement($NextFriday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
	</tr>
	<tr>
		<th >Fromage :</th>
		<td><?php
			$res = returnNombreFromage($NextMonday);
			echo $res['multi'];
		?></td>
		<td><?php
			$res = returnNombreFromage($NextTuesday);
			echo $res['multi'];
		?></td>
		<td><?php
			$res = returnNombreFromage($NextWednesday);
			echo $res['multi'];
		?></td>
		<td><?php
			$res = returnNombreFromage($NextThursday);
			echo $res['multi'];
		?></td>
		<td><?php
			$res = returnNombreFromage($NextFriday);
			echo $res['multi'];
		?></td>
	</tr>
	<tr>
		<th>Dessert</th>
		<td>
		<?php
			$Dessert = returnPlat("Dessert", $NextMonday);
			while ($plats = mysql_fetch_assoc($Dessert)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreDessert($NextMonday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Dessert = returnPlat("Dessert", $NextTuesday);
			while ($plats = mysql_fetch_assoc($Dessert)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreDessert($NextTuesday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Dessert = returnPlat("Dessert", $NextWednesday);
			while ($plats = mysql_fetch_assoc($Dessert)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreDessert($NextWednesday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Dessert = returnPlat("Dessert", $NextThursday);
			while ($plats = mysql_fetch_assoc($Dessert)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreDessert($NextThursday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
		<td>
		<?php
			$Dessert = returnPlat("Dessert", $NextFriday);
			while ($plats = mysql_fetch_assoc($Dessert)) {
					echo("".$plats['Nom']." :");
					$res = returnNombreDessert($NextFriday, mysql_real_escape_string($plats['Nom']));
					if(!isset($res['multi']))
					{
						echo ('0<br>');
					}else{
						echo("".$res['multi']."<br>");
					}
			}
		?>
		</td>
	</tr>
	<tr>
		<th>Nombre de personnes total :</th>
		<td>
			<?php
				$res = returnNmbReservation($NextMonday);
				echo($res['multi']);
			?>
		</td>
		<td>
			<?php
				$res = returnNmbReservation($NextTuesday);
				echo($res['multi']);
			?>
		</td>
		<td>
			<?php
				$res = returnNmbReservation($NextWednesday);
				echo($res['multi']);
			?>
		</td>
		<td>
			<?php
				$res = returnNmbReservation($NextThursday);
				echo($res['multi']);
			?>
		</td>
		<td>
			<?php
				$res = returnNmbReservation($NextFriday);
				echo($res['multi']);
			?>
		</td>
	</tr>
</table>