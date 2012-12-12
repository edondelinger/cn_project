<?php
class Projet{
	private $_budget;
	private $_description;
	private $_precisions;
	private $_numTerrain;
	private $_responsable;
	private $_client;


	function __construct($budget="", $description="", $precisions="", $numTerrain="", $responsable="", $client=""){
		$this->_budget= $budget;
		$this->_description=$description;
		$this->_precisions=$precisions;
		$this->_numTerrain=$numTerrain;
		$this->_responsable=$responsable;
		$this->_client=$client;
	}
	
	public function getBudget() 
	{ return $this->_budget; }
	
	public function getDescription() 
	{ return $this->_description; }
	
	public function getPrecisions() 
	{ return $this->_precisions; }
	
	public function getNumTerrain() 
	{ return $this->_numTerrain; }
	
	public function getResponsable()
	{ return $this->_responsable; }
	
	public function getClient() 
	{ return $this->_client; }	
	
	
	
	public function setBudget($x) 
	{ $this->_budget = $x; }
	
	public function setDescription($x) 
	{ $this->_description = $x; }
	
	public function setPrecisions($x) 
	{ $this->_precisions = $x; }
	
	public function setNumTerrain($x) 
	{ $this->_numTerrain = $x; }
	
	public function setResponsable($x) 
	{ $this->_responsable = $x; }
	
	public function setClient($x) 
	{ $this->_client = $x; }
}
?>