<?php
require_once('../../function/database.php');

$date = $_GET['date'];

$e = 0;
$v = 0;
$a = 0;
$d = 0;

?>
<form action="updateMenuHandling.php" method="POST">
	<div style="display: inline-block" width="20%">
			<p style="text-align: center">
				<?php
					$Entree = returnPlat("Entree", $date);
					while ($item = mysql_fetch_assoc($Entree)) {
						$e += 1;
						?>
						<input type='text' name='Entree<?php echo($e);?>' value='<?php echo($item['Nom']); ?>'<br>
						<?php
					}
				?>
			</p>
			<hr>
			<p style="text-align: center">
				<?php
					$Viande = returnPlat("Viande", $date);
					while ($item = mysql_fetch_assoc($Viande)) {
						$v += 1;
						?>
						<input type='text' name='Viande<?php echo($v);?>' value='<?php echo($item['Nom']); ?>'<br>
						<?php
					}
				?>
			</p>
			<hr>
			<p style="text-align: center">
				<?php
					$Accompagnement = returnPlat("Accompagnement", $date);
					while ($item = mysql_fetch_assoc($Accompagnement)) {
						$a += 1;
						?>
						<input type='text' name='Accompagnement<?php echo($a);?>' value='<?php echo($item['Nom']); ?>'<br>
						<?php
					}
				?>
			</p>
			<hr>
			<p style="text-align: center">
				<?php
					$Dessert = returnPlat("Dessert", $date);
					while ($item = mysql_fetch_assoc($Dessert)) {
						$d += 1;
						?>
						<input type='text' name='Dessert<?php echo($d);?>' value='<?php echo($item['Nom']); ?>'<br>
						<?php
					}
				?>
			<input type="hidden" name="date" value=<?php echo $date; ?>>
			<hr>
			<input type="submit" value="Valider">
			</p>
	</div>
</form>