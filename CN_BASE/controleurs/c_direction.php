<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'voirProjet':{
		include("vues/v_projetCom.php");
		break;
	}
	case 'rechercher':{
		include("vues/v_recherche.php");
		break;
        }
    case 'visualiserFicheClient':{
		include("vues/v_ficheClient.php");
		break;
        }
        
}
?>