<?php

if(!isset($_SESSION['client'])){
?>
<div id="blockConnexion">
    <form method="POST" action="index.php?uc=connexion&action=valideConnexion">
        </br>
        <input type="text" placeholder="Identifiant" name="login"/></br></br>
        <input type="password" placeholder="Mot de passe"name="mdp"/>
        <input type="submit" name="confirm" value="Connexion"/>
    </form>

<?php
}else{
include("v_deconnexion.php");
}
?>