
  <body>
    
    <header>
      <!-- Zone pour l'image en css -->
    </header>

    <article>

      <nav>
          <table>
        <a href="index.php?uc=direction&action=voirProjet">
          <ul id="color1">
            <li class="txt_btn">Visualiser les projets</li>
          </ul>
        </a>
        <a href="index.php?uc=direction&action=rechercher">
          <ul id="color2">
            <li class="txt_btn">Rechercher</li>
          </ul>
        </a>
        <a href="index.php?uc=direction&action=visualiserFicheClient">
          <ul id="color3">
            <li class="txt_btn">Visualiser les fiches clients</li>
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