<script type="text/javascript">
<!--
function refreshParent() {
  window.parent.location.href = window.parent.location.href;
 
}
//-->
</script>

<?php 

$id = $_GET['id'];
$date = $_GET['date'];

$connect = mysql_connect('localhost', 'root', '') or die("Erreur de connexion au serveur.");
mysql_select_db('menu', $connect);
$delete = "DELETE FROM `reservation` WHERE `Jour`='".$date."' AND `IdUtilisateur`='".$id."'";
mysql_query($delete) or die('Erreur lors de la requete');
mysql_close();

?>
<input type="button" onclick="refreshParent()" value="Continuer">