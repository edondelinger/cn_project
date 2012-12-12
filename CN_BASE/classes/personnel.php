<?php
class Personnel{
private $_id;
private $_nomPersonnel;
private $_prenomPersonnel;
private $_mailPersonnel;
private $_telephonePersonnel;
private $_mdp;
private $_id_agence;
private $_loginPersonnel;
private $_typeUtilisateur;

function __contruct($nom="", $prenom="", $mail="", $telephone="", $mdp="", $id_agence="", $login="", $type=""){
	$this->$_nomPersonnel= $nom;
	$this->$_prenomPersonnel=$prenom;
	$this->$_mailPersonnel=$mail;
	$this->$_loginPersonnel=$login;
	$this->$_mdp=$mdp;
	$this->$_typeUtilisateur=$type;
	$this->$_id_agence=$id_agence;
	$this->$_telephonePersonnel=$telephone;
}

public function get_id() 
{ return $this->_id; }

public function get_nomPersonnel()
{ return $this->_nomPersonnel; }

public function get_prenomPersonnel() 
{ return $this->_prenomPersonnel; }

public function get_mailPersonnel() 
{ return $this->_mailPersonnel; }

public function get_telephonePersonnel() 
{ return $this->_telephonePersonnel; }

public function get_mdp()
{ return $this->_mdp; }

public function get_id_agence() 
{ return $this->_id_agence; }

public function get_loginPersonnel() 
{ return $this->_loginPersonnel; }

public function get_typeUtilisateur() 
{ return $this->_typeUtilisateur; }

public function set_id($x)
{ $this->_id = $x; }

public function set_nomPersonnel($x) 
{ $this->_nomPersonnel = $x; }

public function set_prenomPersonnel($x) 
{ $this->_prenomPersonnel = $x; }

public function set_mailPersonnel($x) 
{ $this->_mailPersonnel = $x; }

public function set_telephonePersonnel($x) 
{ $this->_telephonePersonnel = $x; }

public function set_mdp($x) 
{ $this->_mdp = $x; }

public function set_id_agence($x) 
{ $this->_id_agence = $x; }

public function set_loginPersonnel($x) 
{ $this->_loginPersonnel = $x; }

public function set_typeUtilisateur($x) 
{ $this->_typeUtilisateur = $x; }

}

?>