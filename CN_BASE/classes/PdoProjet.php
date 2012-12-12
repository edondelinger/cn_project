<?php

require_once("PdoIntranet.php");


/**
 * Description of pdoIntranet
 *
 * @author jjannel
 */
class PdoProjet extends PdoIntranet{
                
        public function __construct(){
	    	parent::__construct();
		}
		
		public function _destruct(){
			$monPdo = null;
		}
        
        
        public function create($o){
        	$req = "insert into projet 
        				(\"budget\", \"descriptif\", \"precisions\", \"id_terrain\", \"id_personnel\", \"id_client\") 
        					values 
        				('".$o->getbudget()."', '".$o->getDescription()."', '".$o->getPrecisions()."', 
        				'".$o->getNumTerrain()."', '".$o->getResponsable()."', '".$o->getClient()."')";
        	echo var_dump($req);
        	pdoIntranet::$monPdo->query($req);
        }

        /*
        public function findNom($o){
        	$req = "Select id from client where nom='".$o->getClient()."'";
			if($rs = pdoIntranet::$monPdo->query($req)){
                    $ligne = $rs->fetch();
                    return $ligne;
			}
				}
			*/	
        public function search($id){
        $req = "select id, budget, descriptif, precisions, id_terrain, id_personnel, id_client 
        		from projet
        		where id='".$id."'";
        echo var_dump($req);
        			if($rs = pdoIntranet::$monPdo->query($req)){
                    $ligne = $rs->fetch();
                    return $ligne;
                }else{
                    return false;
                }
                echo vardump($req);
        }
        
        }
        


        
?>
