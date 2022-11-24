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
      <p><a href="index.php" title="Accueil">Accueil</a> > <a href="metiers.php" title="Métiers"><u>Métiers</u></a></p>
      <div id="search">
        <input type="text" placeholder="Rechercher un élément...">
        <input type="submit" value="">
      </div>
    </section>
    <!-- Contenu spécifique à une page. -->
    <section id="main">
     <!-- Les métiers. -->
      <section id="images">
        <div id="image">
          <p class="label">Architecte logiciel</p>
          <a href="architecte_logiciel.php" title="Architecte logiciel"><img src="images/metiers/architecte_logiciel.png" alt="Architecte logiciel"></a>
        </div>
        <div id="image">
          <p class="label">Développeur web</p>
          <a href="developpeur_web.php" title="developpeur_web.php" title="Développeur web"><img src="images/metiers/developpeur_web.png" alt="Développeur web"></a>
        </div>
        <div id="image">
          <p class="label">Game designer</p>
          <a href="game_designer.php" title="Game Designer"><img src="images/metiers/game_designer.png" alt="Game designer"></a>
        </div>
        <div id="image">
          <p class="label">Pentester</p>
          <a href="pentester.php" title="pentester.php" title="Pentester"><img src="images/metiers/pentester.png" alt="Pentester"></a>
        </div>
      </section> 
    </section>
    <?php include 'page_elements/bottom_tabs.php';//La flèche est dans ce fichier?> 
  </body>
  <?php include 'page_elements/footer.php';//Pied de page, peu de contenu?> 
</html>