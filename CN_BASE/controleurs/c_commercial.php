<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'creerFicheClient':{
		
		$actualName = "";
		$actualSurname = "";
		$actualAdress = "";
		$actualVille = "";
		$actualCP = "";
		$actualMail = "";
		$actualLogin = "";
		$actualMdp = "";
		$erreur = "";
		$erreurOK = true;
		
		if(isset($_REQUEST['nomClient'])){
			$actualName = $_REQUEST['nomClient'];
			if($_REQUEST['nomClient']==""){
					$erreur .= "</br>- le nom du client";
					$erreurOK = false;
			}
		}
		if(isset($_REQUEST['prenomClient'])){
			$actualSurname = $_REQUEST['prenomClient'];
			if($_REQUEST['prenomClient']==""){
					$erreur .= "</br>- le prénom du client";
					$erreurOK = false;
				}
		}
		if(isset($_REQUEST['adresseClient'])){
			$actualAdress = $_REQUEST['adresseClient'];
			if($_REQUEST['adresseClient']==""){
					$erreur .= "</br>- l'adresse postale du client";
					$erreurOK = false;
					}
		}
		if(isset($_REQUEST['villeClient'])){
			$actualVille = $_REQUEST['villeClient'];
				if($_REQUEST['villeClient']==""){
					$erreur .= "</br>- le ville du client";
					$erreurOK = false;
						}
		}
		if(isset($_REQUEST['cpClient'])){
			$actualCP = $_REQUEST['cpClient'];
				if($_REQUEST['cpClient']==""){
					$erreur .= "</br>- le code postal du client";
					$erreurOK = false;
							}
		}
		if(isset($_REQUEST['mail'])){
			$actualMail = $_REQUEST['mail'];
				if($_REQUEST['mail']==""){
					$erreur .= "</br>- le mail du client";
					$erreurOK = false;
							}
		}
		if(isset($_REQUEST['login'])){
			$actualLogin = $_REQUEST['login'];
				if($_REQUEST['login']==""){
					$erreur .= "</br>- l'identifiant du client";
					$erreurOK = false;
							}
		}
		if(isset($_REQUEST['mdp'])){
			$actualMdp = $_REQUEST['mdp'];
				if($_REQUEST['mdp']==""){
					$erreur .= "</br>- le mdp du client";
					$erreurOK = false;
							}
		}
		


		
		if($erreurOK==true && isset($_REQUEST['confirmNewClient'])){
			include("vues/v_confirmCreaClient.php");
			$nomClient = $_REQUEST['nomClient'];
			$prenomClient =  $_REQUEST['prenomClient'];
			$adresseClient = $_REQUEST['adresseClient'];
			$villeClient = $_REQUEST['villeClient'];
			$cpClient = $_REQUEST['cpClient'];
			$mailClient = $_REQUEST['mail'];
			$login = $_REQUEST['login'];
			$mdp = $_REQUEST['mdp'];
			
			$newClient = new Client($nomClient,$prenomClient,$adresseClient, $cpClient, $villeClient, $mailClient, $login, $mdp, 3);
			
			$ClientPdo = new PdoClient();
						
			$ClientPdo->create($newClient);
			
		}else{
			include("vues/v_creerFiche.php");
		}
		break;
	}
	
	
	case 'modifierFicheClient':{
		$arrayClient = array();
		$pdoClient = new PdoClient();
		$listeClients = $pdoClient->findAll();

		include("vues/v_modifFicheClient.php");
		break;
        }
        
        
    case 'creerProjet':{
				
		$actualBudget = "";
		$actualDescription = "";
		$actualPrecisions = "";
		$actualNumTerrain = "";
		$actualResponsable = "";
		$actualClient = "";
		$erreur = "";
		$erreurOK = true;
		
		if(isset($_REQUEST['budget'])){
			$actualBudget = $_REQUEST['budget'];
			echo var_dump($_REQUEST['budget']);
			if($_REQUEST['budget']==""){
					$erreur .= "</br>- Le montant du budget";
					$erreurOK = false;
			}
		}
		if(isset($_REQUEST['descriptif'])){
			$actualDescription = $_REQUEST['descriptif'];
			if($_REQUEST['descriptif']==""){
					$erreur .= "</br>- Le descriptif du projet";
					$erreurOK = false;
				}
		}
		if(isset($_REQUEST['precisions'])){
			$actualPrecisions = $_REQUEST['precisions'];
			if($_REQUEST['precisions']==""){
					$erreur .= "</br>- Des precisions sur le projet";
					$erreurOK = false;
					}
		}
		if(isset($_REQUEST['numTerrain'])){
			$actualNumTerrain = $_REQUEST['numTerrain'];
				if($_REQUEST['numTerrain']==""){
					$erreur .= "</br>- Le numero du terrain";
					$erreurOK = false;
						}
		}
		
		if(isset($_REQUEST['responsable'])){
			$actualResponsable = $_REQUEST['responsable'];
				if($_REQUEST['responsable']==""){
					$erreur .= "</br>- Le responsable du projet";
					$erreurOK = false;
							}
		}
		if(isset($_REQUEST['client'])){
			$actualClient = $_REQUEST['client'];
				if($_REQUEST['client']==""){
					$erreur .= "</br>- Le nom du client";
					$erreurOK = false;
							}
		}
		echo var_dump($erreurOK);
		
		if($erreurOK==true && isset($_REQUEST['confirmNewProjet'])){
			include("vues/v_confirmCreaProjet.php");
			$budget = $_REQUEST['budget'];
			echo var_dump($budget);
			$description =  $_REQUEST['descriptif'];
			$precisions = $_REQUEST['precisions'];
			$numTerrain = $_REQUEST['numTerrain'];
			$responsable = $_REQUEST['responsable'];
			$client = $_REQUEST['client'];
			echo var_dump($_REQUEST['client']);
			echo var_dump($client);
			
			$newProjet = new projet($budget,$description,$precisions, $numTerrain, $responsable,$client);
			
			$ProjetPdo = new PdoProjet();
			echo var_dump($newProjet);
			$ProjetPdo->create($newProjet);
			
		}else{
			include("vues/v_creerProjet.php");
		}
		break;
		break;
        }
   case 'visualiserProjet':{
		include("vues/v_projetCom.php");
		break;
        }
   case 'rechercher':{
	   	$resultClient = false;
	   	$resultProjet = false;
	   	//echo var_dump($_REQUEST['numero']);
	   	
	   	
	   	
	   	//$numero = $_REQUEST['numero'];
	   	
	   	if(isset($_REQUEST['projet'])){
	   		echo var_dump($_REQUEST['projet']);
	   		$searchPdo = new PdoProjet();
	   		$searchPdo->search($numero);
	   	}
	   	if(isset($_REQUEST['client'])){
	   		echo var_dump($_REQUEST['client']);
	   		$searchPdo = new PdoClient();
	   		$searchPdo->search($numero);
	   	}
		include("vues/v_recherche.php");
	 	include("vues/v_resultSearch.php");
		break;
        }
   case 'voirFicheClient':{
		include("vues/v_ficheClient.php");
		break;
        } 
}
?>