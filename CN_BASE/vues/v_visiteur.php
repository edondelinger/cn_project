
  <body>
    
    <header>
    </header>

    <article>

      <nav>
          <table>
        <a href="index.php?">
          <ul id="color1">
            <li class="txt_btn">Accueil</li>
          </ul>
        </a>
        <a href="index.php?uc=information&action=details">
          <ul id="color2">
              <li class="txt_btn">L'entreprise</li>
          </ul>
        </a>
        <a href="index.php?uc=information&action=contact">
          <ul id="color3">
            <li class="txt_btn">Contact</li>
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
