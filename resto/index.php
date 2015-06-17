<?php 

if(!isset($_REQUEST['page']) && empty($_REQUEST['page'])){
	$page = 0;
}else{
	$page = $_REQUEST['page'];
}

include_once("function/header.php");
include_once("text.php");
include_once("function/footer.php");

?>