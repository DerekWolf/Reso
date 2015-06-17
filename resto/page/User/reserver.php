<?php
require_once('/function/database.php');

$NextMonday = nextMonday();
$NextTuesday = mondayTuesday($NextMonday);
$NextWednesday = mondayWednesday($NextMonday);
$NextThursday = mondayThursday($NextMonday);
$NextFriday = mondayFriday($NextMonday);
?>
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
				<SELECT  class="form-control" name="LUN_ENT" size="1">
				<?php
					$Entree = returnPlat("Entree", $NextMonday);
					while ($item = mysql_fetch_assoc($Entree)) {
						echo ("<option>".$item['Nom']."</option>");
					}
				?>
				</select>
				<input type="hidden" name="dateLun" value=<?php echo $NextMonday; ?>>
			</td>
			<td>
				<SELECT  class="form-control" name="MAR_ENT" size="1">
				<?php
					$Entree = returnPlat("Entree", $NextTuesday);
					while ($item = mysql_fetch_assoc($Entree)) {
						echo ("<option>".$item['Nom']."</option>");
					}
				?>
				</select>
				<input type="hidden" name="dateMar" value=<?php echo $NextTuesday; ?>>
			</td>
			<td>
				<SELECT  class="form-control" name="MER_ENT" size="1">
				<?php
					$Entree = returnPlat("Entree", $NextWednesday);
					while ($item = mysql_fetch_assoc($Entree)) {
						echo ("<option>".$item['Nom']."</option>");
					}
				?>
				</select>	
				<input type="hidden" name="dateMer" value=<?php echo $NextWednesday; ?>>
			</td>
			<td>
				<SELECT  class="form-control" name="JEU_ENT" size="1">
				<?php
					$Entree = returnPlat("Entree", $NextThursday);
					while ($item = mysql_fetch_assoc($Entree)) {
						echo ("<option>".$item['Nom']."</option>");
					}
				?>
			</select>
			<input type="hidden" name="dateJeu" value=<?php echo $NextThursday; ?>>
			</td>
			<td>
				<SELECT  class="form-control" name="VEN_ENT" size="1">
				<?php
					$Entree = returnPlat("Entree", $NextFriday);
					while ($item = mysql_fetch_assoc($Entree)) {
						echo ("<option>".$item['Nom']."</option>");
					}
				?>
			</select>
			<input type="hidden" name="dateVen" value=<?php echo $NextFriday; ?>>
			</td>
		</tr>
		<tr>
			<th>Viandes</th>
			<td>
				<SELECT  class="form-control" name="LUN_VIA" size="1">
				<?php
					$Viande = returnPlat("Viande", $NextMonday);
					while ($item = mysql_fetch_assoc($Viande)) {
						echo ("<option>".$item['Nom']."</option>");
					}
				?>
			</select>
			</td>
			<td>
				<SELECT  class="form-control" name="MAR_VIA" size="1">
				<?php
					$Viande = returnPlat("Viande", $NextTuesday);
					while ($item = mysql_fetch_assoc($Viande)) {
						echo ("<option>".$item['Nom']."</option>");
					}
				?>
			</select>
			</td>
			<td>
				<SELECT  class="form-control" name="MER_VIA" size="1">
				<?php
					$Viande = returnPlat("Viande", $NextWednesday);
					while ($item = mysql_fetch_assoc($Viande)) {
						echo ("<option>".$item['Nom']."</option>");
					}
				?>
			</select>
			</td>
			<td>
				<SELECT  class="form-control" name="JEU_VIA" size="1">
				<?php
					$Viande = returnPlat("Viande", $NextThursday);
					while ($item = mysql_fetch_assoc($Viande)) {
						echo ("<option>".$item['Nom']."</option>");
					}
				?>
			</select>
			</td>
			<td>
				<SELECT  class="form-control" name="VEN_VIA" size="1">
				<?php
					$Viande = returnPlat("Viande", $NextFriday);
					while ($item = mysql_fetch_assoc($Viande)) {
						echo ("<option>".$item['Nom']."</option>");
					}
				?>
			</select>
			</td>
		</tr>
		<tr>
			<th>Accompagnement</th>
			<td>
				<SELECT  class="form-control" name="LUN_ACC" size="1">
				<?php
					$Accompagnement = returnPlat("Accompagnement", $NextMonday);
					while ($item = mysql_fetch_assoc($Accompagnement)) {
						echo ("<option>".$item['Nom']."</option>");
					}
				?>
			</select>
			</td>
			<td>
				<SELECT  class="form-control" name="MAR_ACC" size="1">
				<?php
					$Accompagnement = returnPlat("Accompagnement", $NextTuesday);
					while ($item = mysql_fetch_assoc($Accompagnement)) {
						echo ("<option>".$item['Nom']."</option>");
					}
				?>
			</select>
			</td>
			<td>
				<SELECT  class="form-control" name="MER_ACC" size="1">
				<?php
					$Accompagnement = returnPlat("Accompagnement", $NextWednesday);
					while ($item = mysql_fetch_assoc($Accompagnement)) {
						echo ("<option>".$item['Nom']."</option>");
					}
				?>
			</select>
			</td>
			<td>
				<SELECT  class="form-control" name="JEU_ACC" size="1">
				<?php
					$Accompagnement = returnPlat("Accompagnement", $NextThursday);
					while ($item = mysql_fetch_assoc($Accompagnement)) {
						echo ("<option>".$item['Nom']."</option>");
					}
				?>
			</select>
			</td>
			<td>
				<SELECT  class="form-control" name="VEN_ACC" size="1">
				<?php
					$Accompagnement = returnPlat("Accompagnement", $NextFriday);
					while ($item = mysql_fetch_assoc($Accompagnement)) {
						echo ("<option>".$item['Nom']."</option>");
					}
				?>
			</select>
			</td>
		</tr>
		<tr>
			<th>Fromage</th>
			<td>
				Fromage
				<input type="checkbox" name="LUN_FRO" id="Fromage2" value "F2">
			</td>
			<td>
				Fromage
				<input type="checkbox" name="MAR_FRO" id="Fromage2" value "F2">
			</td>
			<td>
				Fromage
				<input type="checkbox" name="MER_FRO" id="Fromage2" value "F2">
			</td>
			<td>
				Fromage
				<input type="checkbox" name="JEU_FRO" id="Fromage2" value "F2">
			</td>
			<td>
				Fromage
				<input type="checkbox" name="VEN_FRO" id="Fromage2" value "F2">
			</td>
		</tr>
		<tr>
			<th>Dessert</th>
			<td>
				<SELECT  class="form-control" name="LUN_DES" size="1">
				<?php
					$Dessert = returnPlat("Dessert", $NextMonday);
					while ($item = mysql_fetch_assoc($Dessert)) {
						echo ("<option>".$item['Nom']."</option>");
					}
				?>
			</select>
			</td>
			<td>
				<SELECT  class="form-control" name="MAR_DES" size="1">
				<?php
					$Dessert = returnPlat("Dessert", $NextTuesday);
					while ($item = mysql_fetch_assoc($Dessert)) {
						echo ("<option>".$item['Nom']."</option>");
					}
				?>
			</select>
			</td>
			<td>
				<SELECT  class="form-control" name="MER_DES" size="1">
				<?php
					$Dessert = returnPlat("Dessert", $NextWednesday);
					while ($item = mysql_fetch_assoc($Dessert)) {
						echo ("<option>".$item['Nom']."</option>");
					}
				?>
			</select>
			</td>
			<td>
				<SELECT  class="form-control" name="JEU_DES" size="1">
				<?php
					$Dessert = returnPlat("Dessert", $NextThursday);
					while ($item = mysql_fetch_assoc($Dessert)) {
						echo ("<option>".$item['Nom']."</option>");
					}
				?>
			</select>
			</td>
			<td>
				<SELECT  class="form-control" name="VEN_DES" size="1">
				<?php
					$Dessert = returnPlat("Dessert", $NextFriday);
					while ($item = mysql_fetch_assoc($Dessert)) {
						echo ("<option>".$item['Nom']."</option>");
					}
				?>
			</select>
			</td>
		</tr>
	</table>
	<input type="submit" value="Valider">
</form>
	