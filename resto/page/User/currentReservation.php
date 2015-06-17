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
?>

<div style="display: inline-block" width="20%">
	<p class="important">
		<?php
		echo("<br>____________________");
		echo("<br>Entrée");
		echo("<br>Viande");
		echo("<br>Accompagnement");
		echo("<br>Fromage");
		echo("<br>Dessert");
		?>
	</p>
</div>

<div style="display: inline-block" width="20%">
	<p style="text-align: center">
		<?php

		echo $date1 = date("d-m-Y", strtotime($Monday));
		echo ("<br>____________________");
		if(empty($itemsLundi))
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
</div>