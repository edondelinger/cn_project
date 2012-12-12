<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'voirProjet':{
		include("vues/v_projet.php");
		break;
	}
	case 'voirFicheClient':{
		include("vues/v_ficheClient.php");
		break;
        }
        
}
?>