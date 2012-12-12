
  <body>
    
    <header>
      <!-- Zone pour l'image en css -->
    </header>

    <article>

      <nav>
          <table>
        <a href="index.php?uc=client&action=voirProjet">
          <ul id="color1">
            <li class="txt_btn">Visualiser un projet</li>
          </ul>
        </a>
        <a href="index.php?uc=client&action=voirFicheClient">
          <ul id="color2">
            <li class="txt_btn">Visualiser votre fiche client</li>
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