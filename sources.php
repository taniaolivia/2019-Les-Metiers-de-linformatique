<!DOCTYPE html>
<html lang="fr">
  <!-- Infos sur la page -->
  <?php include 'page_elements/head.php';?>
  <body>
    <!-- Zone avec logo, titre et barre de recherche -->
    <?php include 'page_elements/header.php';?>
    <!-- Menu principal -->
    <?php include 'page_elements/top_tabs.php';?>
    <!-- Fil d'ariane. -->
    <section id="path">
      <p><a href="index.php" title="Accueil">Accueil</a> > <a href="sources.php" title="Sources"><u>Sources</u></a></p>
      <div id="search">
        <input type="text" placeholder="Rechercher un élément...">
        <input type="submit" value="">
      </div>
    </section>
    <!-- Contenu spécifique à une page. -->
    <section id="main">
      <h1>SOURCES</h1>
      <p>Voici l'intégralité des <span class="color">sources</span> utilisées sur le site.</br>Elles ont permis de rassembler une grande partie des informations.</p>
      <ul>
        <li>
          Pour les informations :
          <ul>
            <li><a href="https://www.cidj.com/" title="Cidj.com">Cidj.com</a></li>
            <li><a href="https://www.avisto.com/" title="Avisto.com">Avisto.com</a></li>
            <li><a href="http://metiers.siep.be/" title="Metiers.Siep.be">Metiers.Siep.be</a></li>
            <li><a href="http://etudiant.aujourdhui.fr/" title="Etudiant.Aujourdhui.fr">Etudiant.Aujourdhui.fr</a></li>
            <li><a href="http://www.onisep.fr/" title="Onisep.fr">Onisep.fr</a></li>
            <li><a href="https://www.imaginetonfutur.com/" title="ImagineTonFutur.com">ImagineTonFutur.com</a></li>
          </ul>
        </li>
        <li>
          Pour la conception du site :
          <ul>
            <li><a href="https://repl.it/" title="Repl.it">Repl.it</a></li>
            <li><a href="https://jsfiddle.net/" title="JsFiddle.net">Jsfiddle.net</a></li>
            <li><a href="https://openclassrooms.com/" title="OpenClassrooms.com">OpenClassrooms.com</a></li>
            <li><a href="https://www.w3schools.com/" title="W3Schools.com">W3Schools.com</a></li>
            <li><a href="https://www.pierre-giraud.com/" title="Pierre-Giraud.com">Pierre-Giraud.com</a></li>
            <li><a href="https://www.embedgooglemap.net" title="Embedgooglemap.net">Embedgooglemap.net</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <?php include 'page_elements/bottom_tabs.php';//La flèche est dans ce fichier?> 
  </body>
  <?php include 'page_elements/footer.php';//Pied de page, peu de contenu?> 
</html>