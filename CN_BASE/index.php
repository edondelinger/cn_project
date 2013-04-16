<?php
/**
 * Page principale de l'application intranet constructions nouvelles
 * @author SIO Team
 * @version 0.1 
 * @todo : bcp de choses encore ... mais le temps manque
 */
session_start();
require_once("include/fonctions.php");
require_once ("classes/pdoIntranet.php");
require_once ("classes/pdoClient.php");
require_once ("classes/pdoProjet.php");
include("classes/client.php");
include("classes/projet.php");

include("vues/v_entete.php");

$pdo = new PdoClient();
$estConnecte = estConnecte();

if(isset($_REQUEST['uc'])){
    $uc = $_REQUEST['uc'];
        switch($uc){
                case 'connexion':{
                    include("controleurs/c_connexion.php");
                        break;
                }
                case 'information':{
                    include("controleurs/c_information.php");
                        break;
                }
                case 'commercial':{
                    include("controleurs/c_commercial.php");
                        break;
                }
                case 'client':{
                    include("controleurs/c_client.php");
                        break;
                }
                case 'direction':{
                    include("controleurs/c_direction.php");
                        break;
                }
        }
}else{
    include("vues/v_accueil.php");
}
include("vues/v_pied.php");
?>
