<?php

require_once("../../function/database.php");

connect();
mysql_query("SET NAMES 'utf8'");

$nom = mysql_real_escape_string($_POST['Nom']);
$compo = mysql_real_escape_string($_POST['composition']);

$sql = "INSERT INTO salade(Name, Composition) VALUES('$nom', '$compo')";
$res = mysql_query($sql) or die (mysql_error());

deconnect();

header("location:index.php");
?>