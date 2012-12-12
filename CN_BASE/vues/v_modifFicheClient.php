<div id="blockInfo">
    <h2 align="center">Modifier une fiche client</h2>

    <FORM action="#" method="post">
    Choisir une fiche client :   
		<?php
// Définition du tableau de couleurs


// Variable qui ajoutera l'attribut selected de la liste déroulante
 
// Parcours du tableau
echo "<select name='client' onchange='submit();'>";
echo "<option value=''>";

foreach($listeClients as $leClient)
{
	
	$nomClient = $leClient[1];
	//echo var_dump($leClient);
	// Affichage de la ligne
	if (isset($_REQUEST['client']) && $_REQUEST['client']== $leClient[0]){
		$selected = "selected";
	}else{
		$selected = "";
	}
	echo '<option value="'.$leClient[0].'" '.$selected.'>'.$nomClient.' ' .$leClient[2].' r&eacute;sidant &agrave; '.$leClient[5].'</option>';
	// Remise à zéro de $selected
}

?></SELECT>

    </FORM>
    
    
    <br>
    
    <form action="#" method="POST">
    <table>
        <tr>
            <td><b>Nom :</b></td>
            <td>Marin <!-- Requete php --> </td>
            <td><b>Nouveau nom :</b></td>
            <td><input type="text" name="Nom"/</td>
        </tr>
        <tr>
            <td><b>Prenom : </td>
            <td>Christophe <!-- Requete php --> </b></td>
            <td><b>Nouveau prenom : </b></td>
            <td><input type="text" name="Prenom"/</td>
        </tr>
        <tr>
            <td><b>Adresse : </td>
            <td>2 Rue Dom Ceillier <!-- Requete php --> </b></td>
            <td><b>Nouvelle adresse : </td>
            <td><input type="text" name="Adresse"/</td>
        </tr>
        <tr>
            <td><b>Ville : </b></td>
            <td>bar-le-Duc <!-- Requete php --> </td>
            <td><b>Nouvelle ville : </b></td>
            <td><input type="text" name="Ville"/</td>
        </tr>
        <tr>
            <td><b>Code postal : </b></td>
            <td>55000 <!-- Requete php --> </td>
            <td><b>Nouveau code postal : </b></td>
            <td><input type="text" name="CP"/</td>
        </tr>
        <tr>
            <td><b>E-mail : </b></td>
            <td>mchristophe54@gmail.com <!-- Requete php --> </td>
            <td><b>Nouvel e-mail : </b></td>
            <td><input type="text" name="mail"/</td>
        </tr>
        <tr>
        	<td></td>
        	<td></td>
        	<td><input type="button" value="Valider"/></td>
        	<td></td>
        </tr>
    </table> 
    
   </form>   
</div>