
  <body>
    
    <header>
       
    </header>

    <article>

      <nav>
          <table>
        <a href="index.php?uc=commercial&action=creerFicheClient">
          <ul id="color1">
            <li class="txt_btn">Création des fiches clients</li>
          </ul>
        </a>
        <a href="index.php?uc=commercial&action=modifierFicheClient">
          <ul id="color2">
            <li class="txt_btn">Visualisation des fiches clients</li>
          </ul>
        </a>
        <a href="index.php?uc=commercial&action=creerProjet">
          <ul id="color3">
            <li class="txt_btn">Créer un projet</li>
          </ul>
        </a>
        <a href="index.php?uc=commercial&action=visualiserProjet">
          <ul id="color4">
            <li class="txt_btn">Visualiser les projets</li>
          </ul>
        </a>
        <a href="index.php?uc=commercial&action=rechercher">
          <ul id="color5">
            <li class="txt_btn">Rechercher</li>
          </ul>
        </a>
        <a href="index.php?uc=information&action=terrain">
          <ul id="color1">
            <li class="txt_btn">Terrain</li>
          </ul>
        </a>
        <a href="#">
          <ul id="connexion">
            <li class="txt_btn">
              Connexion <br>
         <?php
           
           include("vues/v_connexion.php");
           ?>    
              </table>
            </li>
          </ul>
        </a>
      </nav>

      <section>