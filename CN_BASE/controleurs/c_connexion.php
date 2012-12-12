<?php



if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'valideConnexion':{
		$login = $_REQUEST['login'];
		$mdp = $_REQUEST['mdp'];
                $client = $pdo->getInfosClient($login,$mdp);
                $personnel = $pdo->getInfosPersonnel($login,$mdp);
		if($client || $personnel){
                    if(!is_array($client)){
                        if(!is_array($personnel)){
                            ajouterErreur("Login ou mot de passe incorrect");
                            include("vues/v_connexion.php");
                            include("vues/v_erreurs.php");
                        }else{
                            $id = $personnel['id'];
                            $nom =  $personnel['nom'];
                            $prenom = $personnel['prenom'];
                            $type = $personnel['typeUtilisateur'];
                        }
                    }
                    else{
                        echo "<h1><center>Bienvenue dans votre partie application</center> </h1>";
                        if(is_array($client)){
                            $id = $client['id'];
                            $nom =  $client['nomClient'];
                            $prenom = $client['prenomClient'];
                            $type = $client['typeUtilisateur'];
                        }
                    }
                    connecter($id,$nom,$prenom,$type);
                    echo "<SCRIPT LANGUAGE=\"JavaScript\">document.location.href=\"index.php\" </SCRIPT> ";
                    include("vues/v_sommaire.php");
                }else{
                    echo "Une Erreur est survenue dans l'authentification, Réessayez.";
                }
		break;
	}
	default :{
		include("vues/v_connexion.php");
		break;
	}
}
?>
