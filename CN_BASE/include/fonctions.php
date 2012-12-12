<?php

function connecter($id,$nom,$prenom,$type){
	$_SESSION['client']= $id; 
	$_SESSION['nom']= $nom;
	$_SESSION['prenom']= $prenom;
        $_SESSION['type']= $type;
}

function ajouterErreur($msg){
   if (! isset($_REQUEST['erreurs'])){
      $_REQUEST['erreurs']=array();
	} 
   $_REQUEST['erreurs'][]=$msg;
   echo $msg;
   echo $_REQUEST['erreurs'];
}

function estConnecte(){
  return isset($_SESSION['idVisiteur']);
}

function deconnexion(){
    session_destroy();
}
?>
