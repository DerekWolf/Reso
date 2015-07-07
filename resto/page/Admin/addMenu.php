<datalist id="salade">
	<?php
		$salades = allSalade();
		while ($item = mysql_fetch_assoc($salades)) {
			?>
				<option value="<?php echo($item['Name']); ?>">
			<?php
		}
	?>
</datalist>

<form action="page/Admin/addMenuHandling.php" method="POST">
	<table class="center">
		<tr>
			<th></th>
			<th>Lundi <br> <input type="text" name="dateLundi" placeholder="AAAA-MM-JJ" required></th>
			<th>Mardi <br> <input type="text" name="dateMardi" placeholder="AAAA-MM-JJ" required></th>
			<th>Mercredi <br> <input type="text" name="dateMercredi" placeholder="AAAA-MM-JJ" required></th>
			<th>Jeudi <br> <input type="text" name="dateJeudi" placeholder="AAAA-MM-JJ" required></th>
			<th>Vendredi <br> <input type="text" name="dateVendredi" placeholder="AAAA-MM-JJ" required></th>
		</tr>
		<tr>
			<th>Salade :</th>
			<td><input list="salade" name="Sal1Lun"></td>
			<td><input list="salade" name="Sal1Mar"></td>
			<td><input list="salade" name="Sal1Mer"></td>
			<td><input list="salade" name="Sal1Jeu"></td>
			<td><input list="salade" name="Sal1Ven"></td>
		</tr>
		<tr>
			<th rowspan="3">Entrée</th>
			<td><input type="text" name="Ent1Lun" required></td>
			<td><input type="text" name="Ent1Mar" required></td>
			<td><input type="text" name="Ent1Mer" required></td>
			<td><input type="text" name="Ent1Jeu" required></td>
			<td><input type="text" name="Ent1Ven" required></td>
		</tr>
		<tr>
			<td><input type="text" name="Ent2Lun" required></td>
			<td><input type="text" name="Ent2Mar" required></td>
			<td><input type="text" name="Ent2Mer" required></td>
			<td><input type="text" name="Ent2Jeu" required></td>
			<td><input type="text" name="Ent2Ven" required></td>
		</tr>
		<tr>
			<td><input type="text" name="Ent3Lun" required></td>
			<td><input type="text" name="Ent3Mar" required></td>
			<td><input type="text" name="Ent3Mer" required></td>
			<td><input type="text" name="Ent3Jeu" required></td>
			<td><input type="text" name="Ent3Ven" required></td>
		</tr>
		<tr>
			<th rowspan="2">Viande</th>
			<td><input type="text" name="Via1Lun" required></td>
			<td><input type="text" name="Via1Mar" required></td>
			<td><input type="text" name="Via1Mer" required></td>
			<td><input type="text" name="Via1Jeu" required></td>
			<td><input type="text" name="Via1Ven" required></td>
		</tr>
		<tr>
			<td><input type="text" name="Via2Lun" required></td>
			<td><input type="text" name="Via2Mar" required></td>
			<td><input type="text" name="Via2Mer" required></td>
			<td><input type="text" name="Via2Jeu" required></td>
			<td><input type="text" name="Via2Ven" required></td>
		</tr>
		<tr>
			<th rowspan="2">Accompagnement</th>
			<td><input type="text" name="Acc1Lun" required></td>
			<td><input type="text" name="Acc1Mar" required></td>
			<td><input type="text" name="Acc1Mer" required></td>
			<td><input type="text" name="Acc1Jeu" required></td>
			<td><input type="text" name="Acc1Ven" required></td>
		</tr>
		<tr>
			<td><input type="text" name="Acc2Lun" required></td>
			<td><input type="text" name="Acc2Mar" required></td>
			<td><input type="text" name="Acc2Mer" required></td>
			<td><input type="text" name="Acc2Jeu" required></td>
			<td><input type="text" name="Acc2Ven" required></td>
		</tr>
		<tr>
			<th rowspan="2">Dessert</th>
			<td><input type="text" name="Des1Lun" required></td>
			<td><input type="text" name="Des1Mar" required></td>
			<td><input type="text" name="Des1Mer" required></td>
			<td><input type="text" name="Des1Jeu" required></td>
			<td><input type="text" name="Des1Ven" required></td>
		</tr>
		<tr>
			<td><input type="text" name="Des2Lun" required></td>
			<td><input type="text" name="Des2Mar" required></td>
			<td><input type="text" name="Des2Mer" required></td>
			<td><input type="text" name="Des2Jeu" required></td>
			<td><input type="text" name="Des2Ven" required></td>
		</tr>
	</table>
	<input type="submit" class="btn btn-default" value="Ajouter nouveau menu">
</form>