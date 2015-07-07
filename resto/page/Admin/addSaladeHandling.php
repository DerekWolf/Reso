<?php

require_once("../../function/database.php");

connect();


$nom = $_POST['Nom'];
$compo = $_POST['composition'];

$sql = "INSERT INTO salade(Name, Composition) VALUES('$nom', '$compo')";
$res = mysql_query($sql) or die (mysql_error());

deconnect();

header("location:javascript://history.go(-1)");
?>