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
      <p><a href="index.php" title="Accueil">Accueil</a></p>
      <div id="search">
        <input type="text" placeholder="Rechercher un élément...">
        <input type="submit" value="">
      </div>
    </section>
    <!-- Contenu spécifique à une page. -->
    <section id="main">
      <h1>ERREUR 404</h1>
      <p>La page n'a pas été trouvée ou n'existe pas.</br>Rejoignez l'accueil afin de poursuivre votre navigation.</p>
    </section> 
    <?php include 'page_elements/bottom_tabs.php';//La flèche est dans ce fichier?> 
  </body>
  <?php include 'page_elements/footer.php';//Pied de page, peu de contenu?> 
</html>