<div id="blockCreationFiche">
    <div id="blockInsertDonnées">
        <div id="formDonnées">
            <form action="index.php?uc=commercial&action=creerFicheClient" method="POST">
                <center>
                <h1> Création de la fiche client </h1></center>
                
                <table cellspacing="10px">
                    <tr>
                        <td>
                            Nom :
                        </td>
                        <td>
                            <input type="text" name="nomClient" value ="<?php echo $actualName;?>"/></br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Prénom : 
                        </td>
                        <td>
                            <input type="text" name="prenomClient" value ="<?php echo $actualSurname;?>"/></br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Adresse : 
                        </td>
                        <td>
                            <input type="text" name="adresseClient" value ="<?php echo $actualAdress;?>"/></br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Ville : 
                        </td>
                        <td>
                            <input type="text" name="villeClient" value ="<?php echo $actualVille;?>"/></br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Code postal :
                        </td>
                        <td>
                            <input type="text" name="cpClient" value ="<?php echo $actualCP;?>"/></br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            E-mail :
                        </td>
                        <td>
                            <input type="text" name="mail" value ="<?php echo $actualMail;?>"/></br>
                        </td>
                    </tr>
                 </table>   
                </br></br>
                

                
            
        </div>
    </div>
    <div id="blockInsertPassword">
        Cette partie concerne les identifiants du client. Attention, parce que ce sera seulement grâce à ça qu'il pourrait se connecter.
        <table cellspacing="10px">
                    <tr>
                        <td>
                            Identifiant : 
                        </td>
                        <td>
                            <input type="text" name="login" value ="<?php echo $actualLogin;?>"/></br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Mot de passe (en decimal):
                        </td>
                        <td>
                            <input type="text" name="mdp" value ="<?php echo $actualMdp;?>"/></br>
                        </td>
                    </tr>  
                    <tr>
                        <td>
                            <input type="submit" value="Enregistrer" name="confirmNewClient"/></br>
                        </td>
                    </tr>  
          </form>          
    </div>
</div>
<?php 
		if($erreur!=""){
?>
<div id="blockErreur">
<?php 
	echo "Veuillez mettre : </br>";
	echo $erreur; 
?>
			
		
</div>
<?php
}?>
