<?php
require_once('/function/database.php');

$NextMonday = nextMonday();
$NextTuesday = mondayTuesday($NextMonday);
$NextWednesday = mondayWednesday($NextMonday);
$NextThursday = mondayThursday($NextMonday);
$NextFriday = mondayFriday($NextMonday);


$Id = $_SESSION['Id'];

$itemsLundi = voirReservation($Id, $NextMonday);
$itemsMardi = voirReservation($Id, $NextTuesday);
$itemsMercredi = voirReservation($Id, $NextWednesday);
$itemsJeudi = voirReservation($Id, $NextThursday);
$itemsVendredi = voirReservation($Id, $NextFriday);

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

		echo $date1 = date("d-m-Y", strtotime($NextMonday));
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
		echo $date1 = date("d-m-Y", strtotime($NextTuesday));
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
		echo $date1 = date("d-m-Y", strtotime($NextWednesday));
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
		echo $date1 = date("d-m-Y", strtotime($NextThursday));
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
		echo $date1 = date("d-m-Y", strtotime($NextFriday));
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