<?php
require_once('../../function/database.php');

$id = $_GET['id'];
$date = $_GET['date'];

?>
<form action="updateReservation.php" method="POST">
	<div style="display: inline-block" width="20%">
		<p style="text-align: center">
			<SELECT name="ENT" size="1">
				<?php
					$Entree = returnPlat("Entree", $date);
					while ($item = mysql_fetch_assoc($Entree)) {
						echo ("<option>".$item['Nom']."</option>");
					}
				?>
			</select>
			<br>
			<SELECT name="VIA" size="1">
				<?php
					$Viande = returnPlat("Viande", $date);
					while ($item = mysql_fetch_assoc($Viande)) {
						echo ("<option>".$item['Nom']."</option>");
					}
				?>
			</select>
			<br>
			<SELECT name="ACC" size="1">
				<?php
					$Accompagnement = returnPlat("Accompagnement", $date);
					while ($item = mysql_fetch_assoc($Accompagnement)) {
						echo ("<option>".$item['Nom']."</option>");
					}
				?>
			</select>
			<br>
			Fromage :
				<input type="checkbox" name="FRO" id="Fromage2" value "F2">
			<br>
			<SELECT name="DES" size="1">
				<?php
					$Dessert = returnPlat("Dessert", $date);
					while ($item = mysql_fetch_assoc($Dessert)) {
						echo ("<option>".$item['Nom']."</option>");
					}
				?>
			</select>
			<input type="hidden" name="date" value=<?php echo $date; ?>>
			<br>
			<input type="submit" value="Valider">
		</p>
	</div>
</form>