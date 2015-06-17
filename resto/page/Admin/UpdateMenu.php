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

<script type="text/javascript">
	function FrameSubmit(page) {
		  // On recup le formulaire
		  frame = document.getElementById('frame');
		  // On change l'action
		  frame.src = page;
		  // Et on envoit le formulaire
		  frame.submit();
		}
</script>
<div class="left">
	<form action="traitementReservation.php" method="POST">
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
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Entree = returnPlat("Entree", $Tuesday);
					while ($plats = mysql_fetch_assoc($Entree)) {
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Entree = returnPlat("Entree", $Wednesday);
					while ($plats = mysql_fetch_assoc($Entree)) {
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Entree = returnPlat("Entree", $Thursday);
					while ($plats = mysql_fetch_assoc($Entree)) {
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Entree = returnPlat("Entree", $Friday);
					while ($plats = mysql_fetch_assoc($Entree)) {
							echo("".$plats['Nom']."<br>");
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
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Viande = returnPlat("Viande", $Tuesday);
					while ($plats = mysql_fetch_assoc($Viande)) {
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Viande = returnPlat("Viande", $Wednesday);
					while ($plats = mysql_fetch_assoc($Viande)) {
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Viande = returnPlat("Viande", $Thursday);
					while ($plats = mysql_fetch_assoc($Viande)) {
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Viande = returnPlat("Viande", $Friday);
					
					while ($plats = mysql_fetch_assoc($Viande)) {
							echo("".$plats['Nom']."<br>");
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
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Accompagnement = returnPlat("Accompagnement", $Tuesday);
					while ($plats = mysql_fetch_assoc($Accompagnement)) {
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Accompagnement = returnPlat("Accompagnement", $Wednesday);
					while ($plats = mysql_fetch_assoc($Accompagnement)) {
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Accompagnement = returnPlat("Accompagnement", $Thursday);
					while ($plats = mysql_fetch_assoc($Accompagnement)) {
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Accompagnement = returnPlat("Accompagnement", $Friday);
					while ($plats = mysql_fetch_assoc($Accompagnement)) {
							echo("".$plats['Nom']."<br>");
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
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Dessert = returnPlat("Dessert", $Tuesday);
					while ($plats = mysql_fetch_assoc($Dessert)) {
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Dessert = returnPlat("Dessert", $Wednesday);
					while ($plats = mysql_fetch_assoc($Dessert)) {
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Dessert = returnPlat("Dessert", $Thursday);
					while ($plats = mysql_fetch_assoc($Dessert)) {
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Dessert = returnPlat("Dessert", $Friday);
					while ($plats = mysql_fetch_assoc($Dessert)) {
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
			</tr>
			<tr>
				<td></td>
				<th ><input class="btn btn-default" type="button" onclick="FrameSubmit('page/Admin/modif.php?date=<?php echo $Monday;?>');" value="Modifier"></th>
				<th ><input class="btn btn-default" type="button" onclick="FrameSubmit('page/Admin/modif.php?date=<?php echo $Tuesday;?>');" value="Modifier"></th>
				<th ><input class="btn btn-default" type="button" onclick="FrameSubmit('page/Admin/modif.php?date=<?php echo $Wednesday;?>');" value="Modifier"></th>
				<th ><input class="btn btn-default" type="button" onclick="FrameSubmit('page/Admin/modif.php?date=<?php echo $Thursday;?>');" value="Modifier"></th>
				<th ><input class="btn btn-default" type="button" onclick="FrameSubmit('page/Admin/modif.php?date=<?php echo $Friday;?>');" value="Modifier"></th>
			</tr>
		</table>
	</form>

	<br>
	<hr>
	<br>
	
	<form action="traitementReservation.php" method="POST">
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
					while ($plats = mysql_fetch_assoc($Entree)) {
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Entree = returnPlat("Entree", $NextTuesday);
					while ($plats = mysql_fetch_assoc($Entree)) {
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Entree = returnPlat("Entree", $NextWednesday);
					while ($plats = mysql_fetch_assoc($Entree)) {
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Entree = returnPlat("Entree", $NextThursday);
					while ($plats = mysql_fetch_assoc($Entree)) {
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Entree = returnPlat("Entree", $NextFriday);
					while ($plats = mysql_fetch_assoc($Entree)) {
							echo("".$plats['Nom']."<br>");
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
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Viande = returnPlat("Viande", $NextTuesday);
					while ($plats = mysql_fetch_assoc($Viande)) {
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Viande = returnPlat("Viande", $NextWednesday);
					while ($plats = mysql_fetch_assoc($Viande)) {
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Viande = returnPlat("Viande", $NextThursday);
					while ($plats = mysql_fetch_assoc($Viande)) {
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Viande = returnPlat("Viande", $NextFriday);
					
					while ($plats = mysql_fetch_assoc($Viande)) {
							echo("".$plats['Nom']."<br>");
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
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Accompagnement = returnPlat("Accompagnement", $NextTuesday);
					while ($plats = mysql_fetch_assoc($Accompagnement)) {
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Accompagnement = returnPlat("Accompagnement", $NextWednesday);
					while ($plats = mysql_fetch_assoc($Accompagnement)) {
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Accompagnement = returnPlat("Accompagnement", $NextThursday);
					while ($plats = mysql_fetch_assoc($Accompagnement)) {
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Accompagnement = returnPlat("Accompagnement", $NextFriday);
					while ($plats = mysql_fetch_assoc($Accompagnement)) {
							echo("".$plats['Nom']."<br>");
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
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Dessert = returnPlat("Dessert", $NextTuesday);
					while ($plats = mysql_fetch_assoc($Dessert)) {
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Dessert = returnPlat("Dessert", $NextWednesday);
					while ($plats = mysql_fetch_assoc($Dessert)) {
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Dessert = returnPlat("Dessert", $NextThursday);
					while ($plats = mysql_fetch_assoc($Dessert)) {
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
				<td>
				<?php
					$Dessert = returnPlat("Dessert", $NextFriday);
					while ($plats = mysql_fetch_assoc($Dessert)) {
							echo("".$plats['Nom']."<br>");
					}
				?>
				</td>
			</tr>
			<tr>
				<td></td>
				<th ><input type="button" class="btn btn-default" onclick="FrameSubmit('page/Admin/modif.php?date=<?php echo $NextMonday;?>');" value="Modifier"></th>
				<th ><input type="button" class="btn btn-default" onclick="FrameSubmit('page/Admin/modif.php?date=<?php echo $NextTuesday;?>');" value="Modifier"></th>
				<th ><input type="button" class="btn btn-default" onclick="FrameSubmit('page/Admin/modif.php?date=<?php echo $NextWednesday;?>');" value="Modifier"></th>
				<th ><input type="button" class="btn btn-default" onclick="FrameSubmit('page/Admin/modif.php?date=<?php echo $NextThursday;?>');" value="Modifier"></th>
				<th ><input type="button" class="btn btn-default" onclick="FrameSubmit('page/Admin/modif.php?date=<?php echo $NextFriday;?>');" value="Modifier"></th>
			</tr>
		</table>
	</form>
</div>

<br>

<iframe id="frame" src="">
	<p>Your browser does not support iframes.</p>
</iframe>