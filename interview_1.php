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
      <p><a href="index.php" title="Accueil">Accueil</a> > <a href="interviews.php" title="Interviews">Interviews</a> > <a href="interview_1.php" title="Interview d'un développeur"><u>Interview d'un développeur</u></a></p>
      <div id="search">
        <input type="text" placeholder="Rechercher un élément...">
        <input type="submit" value="">
      </div>
    </section>
    <!-- Contenu spécifique à une page. -->
    <section id="main">
      <h1>L'interview avec Romain</h1>
      <p><span class="color">Romain JARRY</span> est <span class="color">développeur</span> chez <span class="color">AM Créations</span>.</p>
      <div id="row">
        <div id="column">
          <h2>Vidéo de l'interview</h2>
          <p><iframe class="video" src="https://youtube.com/embed/K9P5tk-L1Ec?"  allowfullscreen></iframe></p>
        </div>
        <div id="column">
          <h2>Audio de l'interview</h2>
          <p><audio controls src="audio_files/interview_1.mp3" type ="audio/mpeg" controls="controls"></audio></p>
          <a class="download" href="audio/interview_1.mp3" download="Interview de Romain JARRY" type="audio/mpeg">Télécharger l'audio</a></p>
        </div>
        </div>
      </div>
    </section>
    <?php include 'page_elements/bottom_tabs.php';//La flèche est dans ce fichier?> 
  </body>
  <?php include 'page_elements/footer.php';//Pied de page, peu de contenu?> 
</html>

