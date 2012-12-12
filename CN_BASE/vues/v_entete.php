<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="style/style.css" />
    <title>Constructions nouvelles</title>
  </head>
  <?php
  if(!isset($_SESSION['type'])){
      include 'vues/v_visiteur.php';
  }
  if(isset($_SESSION['type'])){
      if($_SESSION['type'] == 3){
      include 'vues/v_client.php';
      }
  }
  if(isset($_SESSION['type'])){
      if($_SESSION['type'] == 2){
      include 'vues/v_commercial.php';
      }
  }
  if(isset($_SESSION['type'])){
      if($_SESSION['type'] == 1){
      include 'vues/v_direction.php';
      }
  }
  ?>