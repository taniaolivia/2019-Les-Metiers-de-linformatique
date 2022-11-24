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
      <p><a href="index.php" title="Accueil"><u>Accueil</u></a></p>
      <div id="search">
        <input type="text" placeholder="Rechercher un élément...">
        <input type="submit" value="">
      </div>
    </section>
    <!-- Contenu spécifique à une page. -->
    <section id="main">
      <!-- Galerie d'images. -->
      <section id="images">
        <div id="image">
          <p class="label">Ouverture du site</p>
          <img src="images/index/ouverture_du_site.png" alt="Site" title="Site"/>
        </div>
        <div id="image">
          <p class="label">Dernière interview</p>
          <a href="interview_1.php" title="Interview de Romain JARRY"><img src="images/interviews/interview_1.png" alt="Interview de Romain JARRY" title="Interview de Romain JARRY"></a>
        </div>
        <div id="image">
          <p class="label">Dernière fiche métier</p>
          <a href="game_designer.php" title="Game Designer"><img src="images/metiers/game_designer.png" alt="Game designer" title="Game Designer"></a>
        </div>
        <div id="image">
          <p class="label">Article du jour</p>
          <a href="http://www.onisep.fr/Publications/Parcours/Les-metiers-de-l-informatique" title="Article sur les métiers de l'informatique"><img src="images/index/article.png" alt="Article sur les métiers de l'informatique" title="Article sur les métiers de l'informatique"></a>
        </div>
      </section>
    </section> 
    <?php include 'page_elements/bottom_tabs.php';//La flèche est dans ce fichier?> 
  </body>
  <?php include 'page_elements/footer.php';//Pied de page, peu de contenu?> 
</html>