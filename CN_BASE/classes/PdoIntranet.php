<?php
require_once("IDAO.php");

abstract class PdoIntranet implements IDAO{
	
	private static $serveur='pgsql:host=193.252.48.172';
	private static $bdd='dbname=CN_DEVBDD';
	private static $user='postgres' ;
	private static $mdp='0550002D' ;
	protected static $monPdo;
	
	public function __construct(){
		PdoIntranet::$monPdo = new PDO(PdoIntranet::$serveur.';'.PdoIntranet::$bdd, PdoIntranet::$user, PdoIntranet::$mdp);
		PdoIntranet::$monPdo->query("SET CHARACTER SET utf8");
	}
	
	public function create($o){}
	
	public function update($o){}
	
	public function delete($o){}
	
	public function findById($id){}
	
	public  function findAll(){}
}


?>