<script type="text/javascript">
	function checkLun()
	{
		if(document.getElementById('MenuSaladeL').checked)
		{
			document.getElementById('LUN_VIA').disabled = 'disabled';
			document.getElementById('LUN_ACC').disabled = 'disabled';
		}else{
			document.getElementById('LUN_VIA').disabled = '';
			document.getElementById('LUN_ACC').disabled = '';
		}
	}

	function checkMar()
	{
		if(document.getElementById('MenuSaladeMa').checked)
		{
			document.getElementById('MAR_VIA').disabled = 'disabled';
			document.getElementById('MAR_ACC').disabled = 'disabled';
		}else{
			document.getElementById('MAR_VIA').disabled = '';
			document.getElementById('MAR_ACC').disabled = '';
		}
	}

	function checkMer()
	{
		if(document.getElementById('MenuSaladeMe').checked)
		{
			document.getElementById('MER_VIA').disabled = 'disabled';
			document.getElementById('MER_ACC').disabled = 'disabled';
		}else{
			document.getElementById('MER_ENT').disabled = '';
			document.getElementById('MER_VIA').disabled = '';
			document.getElementById('MER_ACC').disabled = '';
		}
	}

	function checkJeu()
	{
		if(document.getElementById('MenuSaladeJ').checked)
		{
			document.getElementById('JEU_VIA').disabled = 'disabled';
			document.getElementById('JEU_ACC').disabled = 'disabled';
		}else{
			document.getElementById('JEU_VIA').disabled = '';
			document.getElementById('JEU_ACC').disabled = '';
		}
	}

	function checkVen()
	{
		if(document.getElementById('MenuSaladeV').checked)
		{
			document.getElementById('VEN_VIA').disabled = 'disabled';
			document.getElementById('VEN_ACC').disabled = 'disabled';
		}else{
			document.getElementById('VEN_VIA').disabled = '';
			document.getElementById('VEN_ACC').disabled = '';
		}
	}

	function FrameSubmit(page) {
		  // On recup le formulaire
		  frame = document.getElementById('frame');
		  // On change l'action
		  frame.src = page;
		  // Et on envoit le formulaire
		  frame.submit();
		}
</script>
<?php
require_once('/function/database.php');

$NextMonday = nextMonday();
$NextTuesday = mondayTuesday($NextMonday);
$NextWednesday = mondayWednesday($NextMonday);
$NextThursday = mondayThursday($NextMonday);
$NextFriday = mondayFriday($NextMonday);
?>
<form action="page/User/traitementReservation.php" method="POST">
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
			<th>Salade :</th>
			<td >
				<?php $Salade = returnSalade("Salade", $NextMonday);
				if(empty($Salade) || $Salade == "" || $Salade == "-")
				{
					echo ("Pas de Salade");
				}else{ ?>
					<input type="checkbox" name="LUN_MSAL" id="MenuSaladeL" onclick="checkLun()">
					<p title="<?php echo $Salade['Compo']; ?>"><?php echo ($Salade['Nom']) ?></p>
				<?php } ?>
			</td>
			<td >
				<?php $Salade = returnSalade("Salade", $NextTuesday);
				if(empty($Salade) || $Salade == "" || $Salade == "-")
				{
					echo ("Pas de Salade");
				}else{ ?>
					<input type="checkbox" name="MAR_MSAL" id="MenuSaladeMa" onclick="checkMar()">
					<p title="<?php echo ($Salade['Compo']); ?>"><?php echo ($Salade['Nom']); ?></p>
				<?php } ?>
			</td>
			<td >
				<?php $Salade = returnSalade("Salade", $NextWednesday);
				if(empty($Salade) || $Salade == "" || $Salade == "-")
				{
					echo ("Pas de Salade");
				}else{ ?>
					<input type="checkbox" name="MER_MSAL" id="MenuSaladeMe" onclick="checkMer()">
					<p title="<?php echo $Salade['Compo']; ?>"><?php echo ($Salade['Nom']); ?></p>
				<?php } ?>
			</td>
			<td >
				<?php $Salade = returnSalade("Salade", $NextThursday); 
				if(empty($Salade) || $Salade == "" || $Salade == "-")
				{
					echo ("Pas de Salade");
				}else{ ?>
					<input type="checkbox" name="JEU_MSAL" id="MenuSaladeJ" onclick="checkJeu()">
					<p title="<?php echo $Salade['Compo']; ?>"><?php echo ($Salade['Nom']); ?></p>				
				<?php } ?>
			</td>
			<td >
				<?php $Salade = returnSalade("Salade", $NextFriday); 
				if(empty($Salade) || $Salade == "" || $Salade == "-")
				{
					echo ("Pas de Salade");
				}else{ ?>
					<input type="checkbox" name="VEN_MSAL" id="MenuSaladeV" onclick="checkVen()">
					<p title="<?php echo $Salade['Compo']; ?>"><?php echo ($Salade['Nom']); ?></p>	
				<?php } ?>
			</td>
		</tr>
		<tr>
			<th>Entrée</th>
			<td>
				<SELECT  class="form-control" name="LUN_ENT" id="LUN_ENT" size="1">
				<option>-</option>
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
				<SELECT  class="form-control" name="MAR_ENT" id="MAR_ENT" size="1">
					<option>-</option>
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
				<SELECT  class="form-control" name="MER_ENT" id="MER_ENT" size="1">
					<option>-</option>
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
				<SELECT  class="form-control" name="JEU_ENT" id="JEU_ENT" size="1">
					<option>-</option>
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
				<SELECT  class="form-control" name="VEN_ENT" id="VEN_ENT" size="1">
					<option>-</option>
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
				<SELECT  class="form-control" name="LUN_VIA" id="LUN_VIA" size="1">
					<option>-</option>
					<?php
						$Viande = returnPlat("Viande", $NextMonday);
						while ($item = mysql_fetch_assoc($Viande)) {
							echo ("<option>".$item['Nom']."</option>");
						}
					?>
				</select>
			</td>
			<td>
				<SELECT  class="form-control" name="MAR_VIA" id="MAR_VIA" size="1">
					<option>-</option>
					<?php
						$Viande = returnPlat("Viande", $NextTuesday);
						while ($item = mysql_fetch_assoc($Viande)) {
							echo ("<option>".$item['Nom']."</option>");
						}
					?>
				</select>
			</td>
			<td>
				<SELECT  class="form-control" name="MER_VIA" id="MER_VIA" size="1">
					<option>-</option>
					<?php
						$Viande = returnPlat("Viande", $NextWednesday);
						while ($item = mysql_fetch_assoc($Viande)) {
							echo ("<option>".$item['Nom']."</option>");
						}
					?>
				</select>
			</td>
			<td>
				<SELECT  class="form-control" name="JEU_VIA" id="JEU_VIA" size="1">
					<option>-</option>
					<?php
						$Viande = returnPlat("Viande", $NextThursday);
						while ($item = mysql_fetch_assoc($Viande)) {
							echo ("<option>".$item['Nom']."</option>");
						}
					?>
				</select>
			</td>
			<td>
				<SELECT  class="form-control" name="VEN_VIA" id="VEN_VIA" size="1">
					<option>-</option>
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
				<SELECT  class="form-control" name="LUN_ACC" id="LUN_ACC" size="1">
					<option>-</option>
					<?php
						$Accompagnement = returnPlat("Accompagnement", $NextMonday);
						while ($item = mysql_fetch_assoc($Accompagnement)) {
							echo ("<option>".$item['Nom']."</option>");
						}
					?>
				</select>
			</td>
			<td>
				<SELECT  class="form-control" name="MAR_ACC" id="MAR_ACC" size="1">
					<option>-</option>
					<?php
						$Accompagnement = returnPlat("Accompagnement", $NextTuesday);
						while ($item = mysql_fetch_assoc($Accompagnement)) {
							echo ("<option>".$item['Nom']."</option>");
						}
					?>
				</select>
			</td>
			<td>
				<SELECT  class="form-control" name="MER_ACC" id="MER_ACC" size="1">
					<option>-</option>
					<?php
						$Accompagnement = returnPlat("Accompagnement", $NextWednesday);
						while ($item = mysql_fetch_assoc($Accompagnement)) {
							echo ("<option>".$item['Nom']."</option>");
						}
					?>
				</select>
			</td>
			<td>
				<SELECT  class="form-control" name="JEU_ACC" id="JEU_ACC" size="1">
					<option>-</option>
					<?php
						$Accompagnement = returnPlat("Accompagnement", $NextThursday);
						while ($item = mysql_fetch_assoc($Accompagnement)) {
							echo ("<option>".$item['Nom']."</option>");
						}
					?>
				</select>
			</td>
			<td>
				<SELECT  class="form-control" name="VEN_ACC" id="VEN_ACC" size="1">
					<option>-</option>
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
					<option>-</option>
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
					<option>-</option>
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
					<option>-</option>
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
					<option>-</option>
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
					<option>-</option>
					<?php
						$Dessert = returnPlat("Dessert", $NextFriday);
						while ($item = mysql_fetch_assoc($Dessert)) {
							echo ("<option>".$item['Nom']."</option>");
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<th>Nombre d'invité :</th>
			<td>
				<input type="number" name="invLundi" step="1" value="0">
			</td>
			<td>
				<input type="number" name="invMardi" step="1" value="0">
			</td>
			<td>
				<input type="number" name="invMercredi" step="1" value="0">
			</td>
			<td>
				<input type="number" name="invJeudi" step="1" value="0">
			</td>
			<td>
				<input type="number" name="invVendredi" step="1" value="0">
			</td>
		</tr>
	</table>
	<input class="btn btn-default" type="submit" value="Valider">
</form>