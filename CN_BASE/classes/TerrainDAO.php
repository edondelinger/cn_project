<?php

class TerrainDAO extends PGsqlDAO {
	
public function __construct(){
	parent::__construct();
}

public function create($_o) {
	$connexion = new PDO('pgsql:host='.$this->PARAM_hote.';dbname='.$this->PARAM_nom_bd, $this->PARAM_utilisateur, $this->PARAM_mot_passe);
	try{
		$requete_create=$connexion->prepare("insert into terrain (id,latitude,longitude,superficie,plan,prix) values (:id,:lat,:lon,:s,:pl,:pr)"); // on prépare notre requ�te
		$requete_create->execute(array('id'=>$_o->_id, 'lat'=>$_o->_latitude,'lon'=>$_o->_longitude,'s'=>$_o->_superficie,'pl'=>$_o->_plan,'pr'=>$_o->_prix));
	}
	catch(Exception $e)
	{
		echo 'Erreur : '.$e->getMessage().'<br />';
		echo 'N� : '.$e->getCode();
	}
}

public function update($t) {
	$connexion = new PDO('pgsql:host='.$this->PARAM_hote.';dbname='.$this->PARAM_nom_bd, $this->PARAM_utilisateur, $this->PARAM_mot_passe);
	
	try{
		$requete_update=$connexion->prepare("Update terrain set latitude=".$t->getLatitude().", longitude=".$t->getLongitude().", superficie=".$t->getSuperficie().", plan='".$t->getPlan()."', prix=".$t->getPrix()." where id=".$t->getId()); // on pr�pare notre requ�te
		$requete_update->execute();
	}
	catch(Exception $e){
		echo 'Erreur : '.$e->getMessage().'<br />';
		echo 'N� : '.$e->getCode();
	}

}

public function delete($_id) {
	$connexion = new PDO('pgsql:host='.$this->PARAM_hote.';dbname='.$this->PARAM_nom_bd, $this->PARAM_utilisateur, $this->PARAM_mot_passe);

	try{
		$connexion->exec('delete from terrain where id='.$_id);
	}
	catch(Exception $e){
		echo 'Erreur : '.$e->getMessage().'<br />';
		echo 'N� : '.$e->getCode();
	}
}

public function findAll() {
	$connexion = new PDO('pgsql:host='.$this->PARAM_hote.';dbname='.$this->PARAM_nom_bd, $this->PARAM_utilisateur, $this->PARAM_mot_passe);
	$sql = "select * from terrain order by id asc";
	$requete_findAll=$connexion->query($sql);
	$liste=array();
	while ($ligne=$requete_findAll->fetch(PDO::FETCH_OBJ)){
		$t = new terrain($ligne->id, $ligne->latitude, $ligne->longitude, $ligne->superficie, $ligne->plan, $ligne->prix, $ligne->id_secteur);
		$liste[]=$t;
	}
	return $liste;
}

public function findById($_id) {
	$connexion = new PDO('pgsql:host='.$this->PARAM_hote.';dbname='.$this->PARAM_nom_bd, $this->PARAM_utilisateur, $this->PARAM_mot_passe);
	$sql = "select * from terrain Where id=".$_id;
	$requete_findById=$connexion->query($sql);
	$ligne=$requete_findById->fetch(PDO::FETCH_OBJ);
	$t = new terrain($ligne->id, $ligne->latitude, $ligne->longitude, $ligne->superficie, $ligne->plan, $ligne->prix,$ligne->id_secteur);
	
	return $t;
}

}
?>