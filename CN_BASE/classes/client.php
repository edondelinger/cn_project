<?php
class Client{
	private $_id;
	private $_nomClient;
	private $_prenomClient;
	private $_adresseClient;
	private $_cpClient;
	private $_villeClient;
	private $_mailClient;
	private $_login;
	private $_mdp;
	private $_typeUtilisateur;


	function __construct($nom="", $prenom="", $adresse="", $cp="", $ville="", $mail="", $login="", $mdp="", $type=""){
		$this->_nomClient= $nom;
		$this->_prenomClient=$prenom;
		$this->_adresseClient=$adresse;
		$this->_cpClient=$cp;
		$this->_villeClient=$ville;
		$this->_mailClient=$mail;
		$this->_login=$login;
		$this->_mdp=$mdp;
		$this->_typeUtilisateur=$type;
	}
	
	public function getId() 
	{ return $this->_id; }
	
	public function getNomClient() 
	{ return $this->_nomClient; }
	
	public function getPrenomClient() 
	{ return $this->_prenomClient; }
	
	public function getAdresseClient() 
	{ return $this->_adresseClient; }
	
	public function getCpClient() 
	{ return $this->_cpClient; }
	
	public function getVilleClient()
	{ return $this->_villeClient; }
	
	public function getMailClient()
	{ return $this->_mailClient; }
	
	public function getLogin() 
	{ return $this->_login; }
	
	public function getMdp() 
	{ return $this->_mdp; }
	
	public function getTypeUtilisateur() 
	{ return $this->_typeUtilisateur; }
	
	
	
	public function setId($x)
	{ $this->_id = $x; }
	
	public function setNomClient($x) 
	{ $this->_nomClient = $x; }
	
	public function setPrenomClient($x) 
	{ $this->_prenomClient = $x; }
	
	public function setAdresseClient($x) 
	{ $this->_adresseClient = $x; }
	
	public function setCpClient($x) 
	{ $this->_cpClient = $x; }
	
	public function setVilleClient($x) 
	{ $this->_villeClient = $x; }
	
	public function setMailClient($x) 
	{ $this->_mailClient = $x; }
	
	public function setLogin($x) 
	{ $this->_login = $x; }
	
	public function setMdp($x) 
	{ $this->_mdp = $x; }
	
	public function setTypeUtilisateur($x) 
	{ $this->_typeUtilisateur = $x; }
}



?>