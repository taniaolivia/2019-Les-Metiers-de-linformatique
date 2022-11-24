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
      <p><a href="index.php" title="Accueil">Accueil
      > </a><a href="interviews.php" title="Interviews"><u>Interviews</u></a></p>
      <div id="search">
        <input type="text" placeholder="Rechercher un élément...">
        <input type="submit" value="">
      </div>
    </section>
    <!-- Contenu spécifique à une page. -->
    <section id= "main">
     <!-- Les interviews. -->
      <section id="images">
        <div id="image">
          <p class="label">Interview de Romain JARRY</p>
          <a href="interview_1.php" title="Interview de Romain JARRY"><img src="images/interviews/interview_1.png" alt="Interview de Romain JARRY" title="Interview de Romain JARRY"></a>
        </div>
        <div id="image">
          <p class="label">Interview à venir</p>
          <a href="interview_2.php" title="Interview à venir"><img src="images/interviews/interview_2.png" alt="Interview à venir" title="Interview à venir"></a>
        </div>
      </section>
    </section>
    <?php include 'page_elements/bottom_tabs.php';//La flèche est dans ce fichier?> 
  </body>
  <?php include 'page_elements/footer.php';//Pied de page, peu de contenu?> 
</html>