<?php
require_once './classes/Terrain.php';
require_once './classes/IDAO.php';
require_once './classes/PgsqlDAO.php';
require_once './classes/TerrainDAO.php';




if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'details':{
		include("vues/v_details.php");
		break;
	}
	case 'contact':{
		include("vues/v_contact.php");
		break;
        }
    case 'terrain':{
    	$daoTerrain = new TerrainDAO();
    	$lesTerrains = $daoTerrain->findAll();
    	$formuModif = "";
    	if (isset($_REQUEST['mod'])) {
    		$ter= $daoTerrain->findById($_REQUEST['mod']);
    		$terr = $ter->toString();
			$formuModif.=	
    		"<table id=\"tableau\" summary=\"Modification du terrain $terr[1]\">
    		<form action=\"index.php?uc=information&action=terrain\" method=\"post\" name=\"FRM_modif\">
    		<thead>
    		<tr>
    		<th scope=\"col\">Latitude</th>
    		<th scope=\"col\">Longitude</th>
    		<th scope=\"col\">Superficie</th>
    		<th scope=\"col\">Plan</th>
    		<th scope=\"col\">Prix</th>
    		<th scope=\"col\"></th>
    		</tr>
    		</thead>
    		<tfoot>
    		<tr>
    		<td colspan=\"6\">Modification du terrain numero $terr[1]</td>
    		</tr>
    		</tfoot>
    		<tbody>
    					    <tr>
    					    	<INPUT type='hidden' value='$terr[1]' name='id'>
    					   		<td><INPUT type='text' value='$terr[2]' name='Latitude'></td>
    							<td><INPUT type='text' value='$terr[3]' name='Longitude'></td>
    							<td><INPUT type='text' value='$terr[4]' name='Superficie'></td>
    							<td><INPUT type='text' value='$terr[5]' name='Plan'></td>
    							<td><INPUT type='text' value='$terr[6]' name='Prix'></td>
    							<td><input type='button' value='Annuler' onClick=\"Annulation();\"/><input type='button' value='Valider' onClick=\"ConfirmationMod('$terr[1]');\"/></td>
    		    			</tr>
    		  </tbody>
    		</table> 
    		<center><h2>____________________________________________________</h2></center>";
    	}
    	
    	if (isset($_REQUEST['creer'])) {
    		$formuModif.=
    		"<table id=\"tableau\" summary=\"Creation de terrain\">
    		<form action=\"index.php?uc=information&action=terrain\" method=\"post\" name=\"FRM_creer\">
    		<thead>
    		<tr>
    		<th scope=\"col\">Latitude</th>
    		<th scope=\"col\">Longitude</th>
    		<th scope=\"col\">Superficie</th>
    		<th scope=\"col\">Plan</th>
    		<th scope=\"col\">Prix</th>
    		<th scope=\"col\"></th>
    		</tr>
    		</thead>
    		<tfoot>
    		<tr>
    		<td colspan=\"6\">Creation d'un terrain</td>
    		</tr>
    		</tfoot>
    		<tbody>
    			<tr>
    				<td><INPUT type='text' value='' name='LatitudeC'></td>
    				<td><INPUT type='text' value='' name='LongitudeC'></td>
    				<td><INPUT type='text' value='' name='SuperficieC'></td>
    				<td><INPUT type='text' value='' name='PlanC'></td>
    				<td><INPUT type='text' value='' name='PrixC'></td>
    				<td><input type='button' value='Annuler' onClick=\"Annulation();\"/><input type='button' value='Valider' onClick=\"Creation();\"/></td>
    		    </tr>
    		  </tbody>
    		</table>
    		<center><h2>____________________________________________________</h2></center>";
    	}
    	
    	if (isset($_REQUEST['sup'])) {
    		$daoTerrain->delete($_REQUEST['sup']);
    	}
    	
    	if (isset($_POST['id'])) {
    		$daoTerrain->update($_POST["Latitude"],$_POST["Longitude"],$_POST["Superficie"],$_POST["Plan"],$_POST["Prix"],$_POST["id"]);
    	}
    	
    	if (isset($_POST['PrixC'])) {
    		$_i=1;
    		foreach ($lesTerrains as $unTerrain) {
    			$terrainIntoTable = $unTerrain->toString();
    			$_i=$terrainIntoTable[1]+1;
    		}
    		$newTerrain= new terrain($_i,$_POST["LatitudeC"],$_POST["LongitudeC"],$_POST["SuperficieC"],$_POST["PlanC"],$_POST["PrixC"]);
    		$daoTerrain->create($newTerrain);
    	}
    	
    	$lesTerrains = $daoTerrain->findAll();
        include("vues/v_terrain.php");
        break;
        }
        
}
?>
