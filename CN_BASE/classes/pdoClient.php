<?php

require_once("PdoIntranet.php");


/**
 * Description of pdoIntranet
 *
 * @author jjannel
 */
class PdoClient extends PdoIntranet{
                
        public function __construct(){
	    	parent::__construct();
		}
		
		public function _destruct(){
			$monPdo = null;
		}
        
        
        public function getInfosClient($login,$mdp){
		$req = "select id, \"nomClient\", \"prenomClient\",\"typeUtilisateur\" from client where login = '$login' and mdp = '$mdp'";
		if($rs = pdoIntranet::$monPdo->query($req)){
                    $ligne = $rs->fetch();
                    return $ligne;
                }else{
                    return false;
                }
		}
        
        public function getInfosPersonnel($login,$mdp){
		$req = "select id, nom, prenom,\"typeUtilisateur\" from personnel where login = '$login' and mdp = '$mdp'";
		if($rs = pdoIntranet::$monPdo->query($req)){
                    $ligne = $rs->fetch();
                    return $ligne;
                }else{
                    return false;
                }
		}
        
        public function create($o){
        	$req = "insert into client (\"nomClient\", \"prenomClient\", \"adresseClient\", \"cpClient\", \"villeClient\", \"mailClient\", \"login\", \"mdp\", \"typeUtilisateur\") values ('".$o->getNomClient()."', '".$o->getPrenomClient()."', '".$o->getAdresseClient()."', '".$o->getCpClient()."', '".$o->getVilleClient()."', '".$o->getMailClient()."', '".$o->getLogin()."', '".$o->getMdp()."', '3')";
            pdoIntranet::$monPdo->query($req);
        	
        }

        public function update($o){}
        
        public function delete($o){}
        
        public function findById($id){
        	$sth = pdoIntranet::$monPdo->prepare("SELECT * FROM client where id = ".$id."");
			if($rs = pdoIntranet::$monPdo->query($sth)){
                    $ligne = $rs->fetch();
                    return $ligne;
        	return $result;
        	}else{
        		return false;
        	}
        }
        
        public function findAll(){/*       	$req = "Select * From Client";
        	$resultats=$connexion->query("SELECT membre FROM membres WHERE pass='mot_de_passe'");
        	$resultats->setFetchMode(PDO::FETCH_OBJ);
        	while( $ligne = $resultats->fetch() )
        	{
        		echo 'Utilisateur : '.$ligne->membre.'<br>';
        	}
        	$resultats->closeCursor();
        	
        	$req = "select * from client";
        	if($rs = pdoIntranet::$monPdo->query($req)){
        		$ligne = $rs->fetchAll();
        		return $ligne;
        	}else{
        		return false;
        	}*/
        	//$reponse->closeCursor();
        	
        	$sth = pdoIntranet::$monPdo->prepare("SELECT * FROM client");
        	$sth->execute();
        	
        	/* Récupération de toutes les lignes d'un jeu de résultats */
        	//print("Récupération de toutes les lignes d'un jeu de résultats :\n");
        	$result = $sth->fetchAll();
        	return $result;
        	
        }
       
        public function search($id){
        	$req = "select nomClient, prenomClient, adresseClient, cpClient, villeClient, mailClient, login, mdp, typeUtilisateur
        			from projet
        			where id='".$id."'";
        	echo var_dump($req);
        	        		if($rs = pdoIntranet::$monPdo->query($req)){
        	        		$ligne = $rs->fetch();
        	        		return $ligne;
        	}else{
        	return false;
        	}
        	echo var_dump($req);
      }
}


?>
