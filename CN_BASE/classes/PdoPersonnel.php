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

        public function getInfosPersonnel($login,$mdp){
		$req = "select id, nom, prenom,\"typeUtilisateur\" from personnel where login = '$login' and mdp = '$mdp'";
		if($rs = pdoIntranet::$monPdo->query($req)){
                    $ligne = $rs->fetch();
                    return $ligne;
                }else{
                    return false;
                }
		}
}

?>
