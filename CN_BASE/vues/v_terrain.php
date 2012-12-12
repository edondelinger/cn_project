<html>
<head>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<SCRIPT language="Javascript">
function ConfirmationSup(id) {
	if (confirm("Etes-vous sur de vouloir supprimer le terrain numero "+id+" ?")) {
		document.location.href="index.php?uc=information&action=terrain&sup="+id;
    }
}
function ConfirmationMod(id) {
	if (confirm("Etes-vous sur de vouloir modifier le terrain numero "+id+" ?")) {
		document.forms[1].submit();
    }
}
function Creation() {
	alert('La creation du terrain est un succes.');
	document.forms[1].submit();
}
function Mod(id) {
		document.location.href="index.php?uc=information&action=terrain&mod="+id;
}
function Annulation() {
	document.location.href="index.php?uc=information&action=terrain";
}
function NouveauTerrain() {
	document.location.href="index.php?uc=information&action=terrain&creer=1";
}
function GMap(id,lat, lng) {
	//document.location.href="index.php?uc=information&action=terrain&carte="+id;
	var myLatlng = new google.maps.LatLng(lat, lng);
            var myOptions = {
                zoom: 13,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var myMap = new google.maps.Map(
                document.getElementById('map'),
                myOptions
            );
            var myMarker = new google.maps.Marker({

                position: myLatlng,
                map: myMap,
                title: "Carte du terrain "+id
            });
}
</SCRIPT>
</head>
<body>
<?php


//if (isset($_REQUEST['carte'])) {
	?>
	<div align="center" id="map" >    <!-- ici aparet la map -->
    </div>
	<?php
//}

// MOT DE PASSE SERVEUR SVN: ppe44567
if ($_SESSION['type']<>3){
	echo "<h2><center>Gestion des terrains</center></h2>";
}
else{
	echo "<h2><center>Consultation des terrains</center></h2>";
}
echo $formuModif;
if ($_SESSION['type']<>3){
   echo "<input type=\"button\" value=\"Nouveau terrain\" onClick=\"NouveauTerrain();\"/>";
}?>
<table id="tableau" summary="Gestion des terrains">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Latitude</th>
      <th scope="col">Longitude</th>
      <th scope="col">Superficie</th>
      <th scope="col">Plan</th>
      <th scope="col">Prix</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
    	<?php
    	if ($_SESSION['type']<>3){
			echo "<td colspan=\"7\">Gestion des terrains</td>";
		}
		else{
			echo "<td colspan=\"7\">Consultation des terrains</td>";
		}?>
    </tr>
  </tfoot>
  <tbody>
  
  		<?php
  		foreach($lesTerrains as $unTerrain){
		?>
			<?php $terrainIntoTable = $unTerrain->toString(); ?>
			    <tr>
      				<td>Terrain <?php echo $terrainIntoTable[1]; ?></td>
      				<td><?php echo $terrainIntoTable[2]; ?></td>
      				<td><?php echo $terrainIntoTable[3]; ?></td>
      				<td><?php echo $terrainIntoTable[4]; ?> m&sup2;</td>
      				<td><?php echo $terrainIntoTable[5]; ?></td>
      				<td><?php echo $terrainIntoTable[6]; ?> &euro;</td>
      				<td>
      					<input type="button" value="Carte" onClick="GMap(<?php echo ($terrainIntoTable[1].",".$terrainIntoTable[2].",".$terrainIntoTable[3]); ?>)"/>
      					<?php if ($_SESSION['type']<>3){
      						echo "<input type=\"button\" value=\"Modifier\" onClick=\"Mod('$terrainIntoTable[1]');\"/>
      						<input type=\"button\" value=\"Supprimer\" onClick=\"ConfirmationSup('$terrainIntoTable[1]');\"/>";
      					}?>
					</td>
    			</tr>
	<?php
}
?>
  </tbody>
</table> 
</body>
</html>