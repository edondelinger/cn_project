<div id="blockCreationProjet">
    <div id="blockInsertDonnées">
        <div id="formDonnées">
            <form action="#" method="POST">
                <center>
                <h1> Création de du projet </h1></center>
                <table cellspacing="10px">
                    <tr>
                        <td>
                            Budget :
                        </td>
                        <td>
                            <input type="text" name="budget" value ="<?php echo $actualBudget;?>"/></br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Description : 
                        </td>
                        <td>
                            <input type="text" name="descriptif" value ="<?php echo $actualDescription;?>"/></br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Precisions : 
                        </td>
                        <td>
                            <input type="text" name="precisions" value ="<?php echo $actualPrecisions;?>"/></br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Numero du terrain :
                        </td>
                        <td>
                            <input type="text" name="numTerrain" value ="<?php echo $actualNumTerrain;?>"/></br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Responsable :
                        </td>
                        <td>
                            <input type="text" name="responsable" value ="<?php echo $actualResponsable;?>"/></br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Num�ro du client :
                        </td>
                        <td>
                            <input type="text" name="client" value ="<?php echo $actualClient;?>"/></br>
                        </td>
                    </tr>
                     <tr>
                     	<td></td>
                        <td>
                            <input type="submit" name="confirmNewProjet"/></br>
                        </td>
                    </tr>
                 </table>   

          </form>
     	</div>          
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
