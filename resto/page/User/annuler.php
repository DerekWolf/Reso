<?php
require_once('/function/database.php');

$Id = $_SESSION['Id'];

$Monday = currentMonday();
$Tuesday = mondayTuesday($Monday);
$Wednesday = mondayWednesday($Monday);
$Thursday = mondayThursday($Monday);
$Friday = mondayFriday($Monday);

$itemsLundi = voirReservation($Id, $Monday);
$itemsMardi = voirReservation($Id, $Tuesday);
$itemsMercredi = voirReservation($Id, $Wednesday);
$itemsJeudi = voirReservation($Id, $Thursday);
$itemsVendredi = voirReservation($Id, $Friday);

$NextMonday = nextMonday();
$NextTuesday = mondayTuesday($NextMonday);
$NextWednesday = mondayWednesday($NextMonday);
$NextThursday = mondayThursday($NextMonday);
$NextFriday = mondayFriday($NextMonday);

$itemsLundi2 = voirReservation($Id, $NextMonday);
$itemsMardi2 = voirReservation($Id, $NextTuesday);
$itemsMercredi2 = voirReservation($Id, $NextWednesday);
$itemsJeudi2 = voirReservation($Id, $NextThursday);
$itemsVendredi2 = voirReservation($Id, $NextFriday);
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

<section style="float : left">
	<section>
		<div style="display: inline-block" width="20%">
		<p class="important">
			<?php
			echo("<br>____________________");
			echo("<br>Entrée");
			echo("<br>Viande");
			echo("<br>Accompagnement");
			echo("<br>Fromage");
			echo("<br>Dessert<br>");
			echo("<br>");
			echo("<br>");
			?>
		</p>
	</div>

	<div style="display: inline-block" width="20%">
		<p style="text-align: center">
			<?php

			echo $date1 = date("d-m-Y", strtotime($Monday));
			echo ("<br>____________________");
			if(empty($itemsMardi))
			{
				echo("<br>Pas de réservation.");
			}else{
				foreach($itemsLundi as $item) {
					if($item == "1")
					{
						echo ("<br>Oui");
					}elseif ($item == "0") {
						echo ("<br>Non");
					}else{
						echo ("<br>".$item."");
					}
				}
			}
			?>
		</p>
		<form id="formulaire" action="" method="GET">
			<?php
			if (checkToAutorise($Monday)) {
				?>
				<input type="hidden" name="date" value="<?php echo $Monday;?>">
				<input type="button" class="btn btn-default" onclick="FrameSubmit('page/User/modif.php?id=<?php echo $Id;?>&date=<?php echo $Monday;?>');" value="Modifier"/>
				<input type="button" class="btn btn-default" onclick="FrameSubmit('page/User/delete.php?id=<?php echo $Id;?>&date=<?php echo $Monday;?>');" value="Annuler"/>
			<?php }else{ ?>
				<input type="button" class="btn btn-default" value="Modifier" disabled/>
				<input type="button" class="btn btn-default" value="Annuler" disabled/><?php
			}
			?>
		</form>
	</div>

	<div style="display: inline-block" width="20%">
		<p style="text-align: center">
			<?php
			echo $date1 = date("d-m-Y", strtotime($Tuesday));
			echo ("<br>____________________");
			if(empty($itemsMardi))
			{
				echo("<br>Pas de réservation.");
			}else{
				foreach($itemsMardi as $item) {
					if($item == "1")
					{
						echo ("<br>Oui");
					}elseif ($item == "0") {
						echo ("<br>Non");
					}else{
						echo ("<br>".$item."");
					}
				}
			}
			?>
		</p>
		<form id="formulaire" action="" method="GET">
			<?php
			if (checkToAutorise($Tuesday)) {
				?>
				<input type="button" class="btn btn-default" onclick="FrameSubmit('page/User/modif.php?id=<?php echo $Id;?>&date=<?php echo $Tuesday;?>');" value="Modifier"/>
				<input type="button" class="btn btn-default" onclick="FrameSubmit('page/User/delete.php?id=<?php echo $Id;?>&date=<?php echo $Tuesday;?>');" value="Annuler"/>
			<?php }else{ ?>
				<input type="button" class="btn btn-default" value="Modifier" disabled/>
				<input type="button" class="btn btn-default" value="Annuler" disabled/><?php
			}
			?>
		</form>
	</div>

	<div style="display: inline-block" width="20%">
		<p style="text-align: center">
			<?php
			echo $date1 = date("d-m-Y", strtotime($Wednesday));
			echo ("<br>____________________");
			if(empty($itemsMercredi))
			{
				echo("<br>Pas de réservation.");
			}else{
				foreach($itemsMercredi as $item) {
					if($item == "1")
					{
						echo ("<br>Oui");
					}elseif ($item == "0") {
						echo ("<br>Non");
					}else{
						echo ("<br>".$item."");
					}
				}
			}
			?>
		</p>
		<form id="formulaire" action="" method="GET">
			<?php
			if (checkToAutorise($Wednesday)) {
				?>
				<input type="button" class="btn btn-default" onclick="FrameSubmit('page/User/modif.php?id=<?php echo $Id;?>&date=<?php echo $Wednesday;?>');" value="Modifier"/>
				<input type="button" class="btn btn-default" onclick="FrameSubmit('page/User/delete.php?id=<?php echo $Id;?>&date=<?php echo $Wednesday;?>');" value="Annuler"/>
			<?php }else{ ?>
				<input type="button" class="btn btn-default" value="Modifier" disabled/>
				<input type="button" class="btn btn-default" value="Annuler" disabled/><?php
			}
			?>
		</form>
	</div>

	<div style="display: inline-block" width="20%">
		<p style="text-align: center">
			<?php
			echo $date1 = date("d-m-Y", strtotime($Thursday));
			echo ("<br>____________________");
			if(empty($itemsJeudi))
			{
				echo("<br>Pas de réservation.");
			}else{
				foreach($itemsJeudi as $item) {
					if($item == "1")
					{
						echo ("<br>Oui");
					}elseif ($item == "0") {
						echo ("<br>Non");
					}else{
						echo ("<br>".$item."");
					}
				}
			}
			?>
		</p>
		<form id="formulaire" action="" method="GET">
			<?php
			if (checkToAutorise($Thursday)) {
				?>
				<input type="button" class="btn btn-default" onclick="FrameSubmit('page/User/modif.php?id=<?php echo $Id;?>&date=<?php echo $Thursday;?>');" value="Modifier"/>
				<input type="button" class="btn btn-default" onclick="FrameSubmit('page/User/delete.php?id=<?php echo $Id;?>&date=<?php echo $Thursday;?>');" value="Annuler"/>
			<?php }else{ ?>
				<input type="button" class="btn btn-default" value="Modifier" disabled/>
				<input type="button" class="btn btn-default" value="Annuler" disabled/><?php
			}
			?>
		</form>
	</div>

	<div style="display: inline-block" width="20%">
		<p style="text-align: center">
			<?php
			echo $date1 = date("d-m-Y", strtotime($Friday));
			echo ("<br>____________________");
			if(empty($itemsVendredi))
			{
				echo("<br>Pas de réservation.");
			}else{
				foreach($itemsVendredi as $item) {
					if($item == "1")
					{
						echo ("<br>Oui");
					}elseif ($item == "0") {
						echo ("<br>Non");
					}else{
						echo ("<br>".$item."");
					}
				}
			}
			?>
		</p>
		<form id="formulaire" action="" method="GET">
			<?php
			if (checkToAutorise($Friday)) {
				?>
				<input type="button" class="btn btn-default" onclick="FrameSubmit('page/User/modif.php?id=<?php echo $Id;?>&date=<?php echo $Friday;?>');" value="Modifier"/>
				<input type="button" class="btn btn-default" onclick="FrameSubmit('page/User/delete.php?id=<?php echo $Id;?>&date=<?php echo $Friday;?>');" value="Annuler"/>
			<?php }else{ ?>
				<input type="button" class="btn btn-default" value="Modifier" disabled/>
				<input type="button" class="btn btn-default" value="Annuler" disabled/><?php
			}
			?>
		</form>
	</div>
	</section>
	<?php
	echo ("<br><br><br>");
	?>
	<section>
		<div style="display: inline-block">
		<p class="important">
			<?php
			echo("Date du jour :");
			echo("<br>____________________");
			echo("<br>Entrée");
			echo("<br>Viande");
			echo("<br>Accompagnement");
			echo("<br>Fromage");
			echo("<br>Dessert");
			echo("<br>");
			echo("<br>");
			echo("<br>");
			?>
		</p>
	</div>

	<div style="display: inline-block">
		<p style="text-align: center">
			<?php
			echo $date1 = date("d-m-Y", strtotime($NextMonday));
			echo ("<br>____________________");
			if(empty($itemsLundi2))
			{
				echo("<br>Pas de réservation.");
			}else{
				foreach($itemsLundi2 as $item) {
					if($item == "1")
					{
						echo ("<br>Oui");
					}elseif ($item == "0") {
						echo ("<br>Non");
					}else{
						echo ("<br>".$item."");
					}
				}
			}
			?>
		</p>
		<form id="formulaire" action="" method="GET">
			<?php
			if (checkToAutorise($NextMonday)) {
				?>
				<input type="button" class="btn btn-default" onclick="FrameSubmit('page/User/modif.php?id=<?php echo $Id;?>&date=<?php echo $NextMonday;?>');" value="Modifier"/>
				<input type="button" class="btn btn-default" onclick="FrameSubmit('page/User/delete.php?id=<?php echo $Id;?>&date=<?php echo $NextMonday;?>');" value="Annuler"/>
			<?php }else{ ?>
				<input type="button" class="btn btn-default" value="Modifier" disabled/>
				<input type="button" class="btn btn-default" value="Annuler" disabled/><?php
			}
			?>
		</form>
	</div>

	<div style="display: inline-block">
		<p style="text-align: center">
			<?php
			echo $date1 = date("d-m-Y", strtotime($NextTuesday));
			echo ("<br>____________________");
			if(empty($itemsMardi2))
			{
				echo("<br>Pas de réservation.");
			}else{
				foreach($itemsMardi2 as $item) {
					if($item == "1")
					{
						echo ("<br>Oui");
					}elseif ($item == "0") {
						echo ("<br>Non");
					}else{
						echo ("<br>".$item."");
					}
				}
			}
			?>
		</p>
		<form id="formulaire" action="" method="GET">
			<?php
			if (checkToAutorise($NextTuesday)) {
				?>
				<input type="button" class="btn btn-default" onclick="FrameSubmit('page/User/modif.php?id=<?php echo $Id;?>&date=<?php echo $NextTuesday;?>');" value="Modifier"/>
				<input type="button" class="btn btn-default" onclick="FrameSubmit('page/User/delete.php?id=<?php echo $Id;?>&date=<?php echo $NextTuesday;?>');" value="Annuler"/>
			<?php }else{ ?>
				<input type="button" class="btn btn-default" value="Modifier" disabled/>
				<input type="button" class="btn btn-default" value="Annuler" disabled/><?php
			}
			?>
		</form>
	</div>

	<div style="display: inline-block">
		<p style="text-align: center">
			<?php
			echo $date1 = date("d-m-Y", strtotime($NextWednesday));
			echo ("<br>____________________");
			if(empty($itemsMercredi2))
			{
				echo("<br>Pas de réservation.");
			}else{
				foreach($itemsMercredi2 as $item) {
					if($item == "1")
					{
						echo ("<br>Oui");
					}elseif ($item == "0") {
						echo ("<br>Non");
					}else{
						echo ("<br>".$item."");
					}
				}
			}
			?>
		</p>
		<form id="formulaire" action="" method="GET">
			<?php
			if (checkToAutorise($NextWednesday)) {
				?>
				<input type="button" class="btn btn-default" onclick="FrameSubmit('page/User/modif.php?id=<?php echo $Id;?>&date=<?php echo $NextWednesday;?>');" value="Modifier"/>
				<input type="button" class="btn btn-default" onclick="FrameSubmit('page/User/delete.php?id=<?php echo $Id;?>&date=<?php echo $NextWednesday;?>');" value="Annuler"/>
			<?php }else{ ?>
				<input type="button" class="btn btn-default" value="Modifier" disabled/>
				<input type="button" class="btn btn-default" value="Annuler" disabled/><?php
			}
			?>
		</form>
	</div>

	<div style="display: inline-block" width="20%">
		<p style="text-align: center">
			<?php
			echo $date1 = date("d-m-Y", strtotime($NextThursday));
			echo ("<br>____________________");
			if(empty($itemsJeudi2))
			{
				echo("<br>Pas de réservation.");
			}else{
				foreach($itemsJeudi2 as $item) {
					if($item == "1")
					{
						echo ("<br>Oui");
					}elseif ($item == "0") {
						echo ("<br>Non");
					}else{
						echo ("<br>".$item."");
					}
				}
			}
			?>
		</p>
		<form id="formulaire" action="" method="GET">
			<?php
			if (checkToAutorise($NextThursday)) {
				?>
				<input type="button" class="btn btn-default" onclick="FrameSubmit('page/User/modif.php?id=<?php echo $Id;?>&date=<?php echo $NextThursday;?>');" value="Modifier"/>
				<input type="button" class="btn btn-default" onclick="FrameSubmit('page/User/delete.php?id=<?php echo $Id;?>&date=<?php echo $NextThursday;?>');" value="Annuler"/>
			<?php }else{ ?>
				<input type="button" class="btn btn-default" value="Modifier" disabled/>
				<input type="button" class="btn btn-default" value="Annuler" disabled/><?php
			}
			?>
		</form>
	</div>

	<div style="display: inline-block" width="20%">
		<p style="text-align: center">
			<?php
			echo $date1 = date("d-m-Y", strtotime($NextFriday));
			echo ("<br>____________________");
			if(empty($itemsVendredi2))
			{
				echo("<br>Pas de réservation.");
			}else{
				foreach($itemsVendredi2 as $item) {
					if($item == "1")
					{
						echo ("<br>Oui");
					}elseif ($item == "0") {
						echo ("<br>Non");
					}else{
						echo ("<br>".$item."");
					}
				}
			}
			?>
		</p>
		<form id="formulaire" action="" method="GET">
			<?php
			if (checkToAutorise($NextFriday)) {
				?>
				<input type="button" class="btn btn-default" onclick="FrameSubmit('page/User/modif.php?id=<?php echo $Id;?>&date=<?php echo $NextFriday;?>');" value="Modifier"/>
				<input type="button" class="btn btn-default" onclick="FrameSubmit('page/User/delete.php?id=<?php echo $Id;?>&date=<?php echo $NextFriday;?>');" value="Annuler"/>
			<?php }else{ ?>
				<input type="button" class="btn btn-default" value="Modifier" disabled/>
				<input type="button" class="btn btn-default" value="Annuler" disabled/><?php
			}
			?>
		</form>
	</div>
	</section>
</section>

<br>

	<iframe id="frame" src="" style="float: right">
		<p>Your browser does not support iframes.</p>
	</iframe>