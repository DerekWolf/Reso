<?php

if(!isset($_REQUEST['page']) && empty($_REQUEST['page'])){
	$page = 0;
}else{
	$page = $_REQUEST['page'];
}



switch($page){
	case 0 : include("page/commun/acceuil.php");
	break;

	case 1 : include("page/Visitor/log.php");
	break;

	case 2 : include("page/Visitor/register.php");
	break;

	case 10 : include("page/User/reserver.php");
	break;

	case 11 : include("page/User/currentReservation.php");
	break;

	case 12 : include("page/User/futurReservation.php");
	break;

	case 13 : include("page/User/annuler.php");
	break;

	case 20 : include("page/Admin/addMenu.php");
	break;

	case 21 : include("page/Admin/updateMenu.php");
	break;

	case 22 : include("page/Admin/mealStats.php");
	break;

	case 23 : include("page/Admin/userStats.php");
	break;

	case 24 : include("page/Admin/addSalade.php");
	break;

	case 42 : include("page/commun/logout.php");
	break;
}
?>