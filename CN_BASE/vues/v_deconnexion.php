 <?php
    if(isset($_GET['deco'])){
        session_destroy();
        header("Location:index.php");
    }
 
    $id = $_SESSION['client'];
    $nom = $_SESSION['nom'];
    $prenom = $_SESSION['prenom'];
     if(!isset($_SESSION['type'])){
      include 'vues/v_visiteur.php';
  }
  if(isset($_SESSION['type'])){
      if($_SESSION['type'] == 3){
      echo "Client n°".$id."";
      }
  }
  if(isset($_SESSION['type'])){
      if($_SESSION['type'] == 2){
      echo "Commercial n°".$id."";
      }
  }
  if(isset($_SESSION['type'])){
      if($_SESSION['type'] == 1){
      echo "Direction n°".$id."";
      }
  }
    
    echo "</br>";
    echo "$nom $prenom";  
?>
    <form method="GET" action="index.php?deco=ok">
        <input type="submit" name="deco" value="Déconnexion"/>
    </form>
</div>