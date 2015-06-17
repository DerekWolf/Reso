<?php
if(isset($_SESSION['Nom']))
{
	?>
		<h1>Bienvenue <?php echo ("".$_SESSION['Prénom']." ".$_SESSION['Nom']."") ?></h1>
		<?php
}else{
	?>
	<h1>Bienvenue sur le site de reservation des repas de l'association Res-o.</h1>
	<?php
}
?>