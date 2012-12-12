<?php

class Terrain {
	// Variables
	public $_id;
	public $_latitude;
	public $_longitude;
	public $_superficie;
	public $_plan;
	public $_prix;

	// Constructeurs
	function __construct($id,$lat,$lon,$sup,$plan,$prix) {
		$this->_id = $id;
		$this->_latitude = $lat;
		$this->_longitude = $lon;
		$this->_superficie = $sup;
		$this->_plan = $plan;
		$this->_prix = $prix;
	}

	// Accesseur
	public function getId() {
		return $this->_id;
	}
	public function getLatitude() {
		return $this->_latitude;
	}
	public function getLongitude() {
		return $this->_longitude;
	}
	public function getSuperficie() {
		return $this->_superficie;
	}

	public function getPlan() {
		return $this->_plan;
	}
	
	public function getPrix() {
		return $this->_prix;
	}

	// Modificateur
	public function setId($_unId) {
		$this->_id = $_unId;
	}
	public function setLatitude($_uneLat) {
		$this->_latitude = $_uneLat;
	}
	public function setLongitude($_uneLong) {
		$this->_longitude = $_uneLong;
	}
	public function setSuperficie($_uneSup) {
		if ($_uneSup > 0) {
			$this->_superficie = $_uneSup;
		}
		else {
			echo "Erreur : Superficie négative !";
		}
	}
	
	public function setPlan($_unPlan) {
		$this->_plan = $_unPlan;
	}

	public function setPrix($_unPrix) {
		if ($_unPrix >= 0.0) {
			$this->_prix = $_unPrix;
		}
		else {
			echo "Erreur : prix négatif !";
		}
	}
	
	public function toString() {
		return array(
				1  => $this->getId(),
				2 => $this->getLatitude(),
				3 => $this->getLongitude(),
				4 => $this->getSuperficie(),
				5 => $this->getPlan(),
				6 => $this->getPrix(),	
		);
	}

}

?>
