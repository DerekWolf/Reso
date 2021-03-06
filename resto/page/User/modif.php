<script type="text/javascript">
	function check()
	{
		if(document.getElementById('Salade').checked)
		{
			document.getElementById('VIA').disabled = 'disabled';
			document.getElementById('ACC').disabled = 'disabled';
		}else{
			document.getElementById('VIA').disabled = '';
			document.getElementById('ACC').disabled = '';
		}
	}
</script>

<?php
require_once("../../function/database.php");
connect();
$id = $_GET['id'];
$date = $_GET['date'];
?>
<form action="updateReservation.php" method="POST">
	<div style="display: inline-block" width="20%">
		<p style="text-align: center">
		<table>
			<tr>
				<td>Salade :</td>
				<td >
					<?php $Salade = returnSalade("Salade", $date); ?>
					<p title="<?php echo $Salade['Compo']; ?>">
						<input type="checkbox" name="SAL" id="Salade" onclick="check()">
						<?php echo ($Salade['Nom']) ?>
					</p>
				</td>
			</tr>
			<tr>
				<td>Entree :</td>
				<td>
					<SELECT name="ENT" id="ENT" size="1">
					<option>-</option>
					<?php
						$Entree = returnPlat("Entree", $date);
						while ($item = mysql_fetch_assoc($Entree)) {
							if(empty($item['Nom']))
							{
								echo ("Pas de reservation possible.");
							}else{
								echo ("<option>".$item['Nom']."</option>");
							}
						}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Viande :</td>
				<td>
					<SELECT name="VIA" id="VIA" size="1">
						<option>-</option>
						<?php
							$Viande = returnPlat("Viande", $date);
							while ($item = mysql_fetch_assoc($Viande)) {
								echo ("<option>".$item['Nom']."</option>");
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Accompagnement </td>
				<td>
					<SELECT name="ACC" id="ACC" size="1">
						<option>-</option>
						<?php
							$Accompagnement = returnPlat("Accompagnement", $date);
							while ($item = mysql_fetch_assoc($Accompagnement)) {
								echo ("<option>".$item['Nom']."</option>");
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Fromage :</td>
				<td><input type="checkbox" name="FRO" id="Fromage2" value "F2"></td>
			</tr>
			<tr>
				<td>Dessert :</td>
				<td>
					<SELECT name="DES" id="DES" size="1">
						<option>-</option>
						<?php
							$Dessert = returnPlat("Dessert", $date);
							while ($item = mysql_fetch_assoc($Dessert)) {
								echo ("<option>".$item['Nom']."</option>");
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Invité :</td>
				<td><input type="number" name="INV" step="1" value="0" min="0"></td>
			</tr>
		</table>
			<input type="hidden" name="date" value=<?php echo $date; ?>>
			<input type="submit" class="btn btn-default" value="Valider">
		</p>
	</div>
</form>
<?php
deconnect();
?>