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
      <p><a href="index.php" title="Accueil">Accueil</a> > <a href="metiers.php" title="Métiers">Métiers</a> > <a href="game_designer.php" title="Game designer"><u>Game designer</u></a></p>      
      <div id="search">
        <input type="text" placeholder="Rechercher un élément...">
        <input type="submit" value="">
      </div>
    </section>
    <!-- Contenu spécifique à une page. -->
    <section id="main">
      <div id="row">
        <div id="column">
          <h1>GAME DESIGNER</h1>
          <p>Le game designer est au coeur de la conception de jeux vidéos du simple petit jeu jusqu'au jeu avec un univers étendu complexe.</p>
        </div>
        <img src="images/metiers/game_designer/game_designer_photo.jpg" alt="Game designer" title="Game designer" width="350" height="180"/>
      </div>
      <h2>Détail :</h2>
      <p> Le game designer est présent à toutes les étapes e la conception d'un jeu : l'analyse de la cible, la mise en place du l'histoire, des règles, la rédaction du cahier des charges, la prise en main du jeu etc... </p>
    <div id="row">
        <div id="column">
          <h2>Qualités requises :</h2>
          <ul>
            <li>Sensibilité artistique et créative</li>
            <li>Minutieux</li>
            <li>Passionné</li>
            <li>Esprit d'équipe</li>
          </ul>
        </div>
        <div id="column">
          <h2>Compétences :</h2>
           <ul>
            <li>Maitriser l'anglais</li>
            <li>Languages informatique (javascript, html css ..)</li>
            <li>Maitrise de logiciel de conception de jeux vidéos</li>
          </ul>
        </div>
      </div>
          <h2>Formations :</h2>
          <p> • Bac S/ES/STD2A </br>
              • DUT Informatique</br>
              • Licences professionnelles du jeu vidéo</br>
              • Écoles privées du numérique </br></p>
    <div id="row">
        <div id="column">
          <h2>Salaire :</h2>
          <p>Le salaire d'un game designer débutant peut aller de 1 500€ à 1 900€ par mois. Après avoir acquéri un peu d'expérience il peut aller de 2000€ à 3000€ et même jusqu'à 3 500€ pour les plus expérimentés.</p>
        </div>
        <div id="column">
          <h2>Évolutions possibles :</h2>
          <p>Il est rare de commencer en tant que game designer, il faut souvent passer par le métier de level designer pendant quelques années.
le Game designer peut, après quelques années, tenter de rentrer dans des studios à gros budget ou encore devenir chef de projet dans les jeux vidéos.</p>
        </div>
      </div>
    <div id="row">
        <div id="column">
          <h3>Voir aussi :</h3>
          <ul class="no_dot_list">
            <li><a href="architecte_logiciel.php" title="Architecte logiciel">Architecte Logiciel</a></li>
            <li><a href="developpeur_web.php" title="developpeur_web.php" title="Développeur web">Développeur Web</a></li>
            <li><a href="pentester.php" title="pentester.php" title="Pentester">Pentester</a></li>
          </ul>
        </div>
        <a class="download" href="fiches_metier/game_designer.pdf" download="Game designer">Télécharger la fiche métier</a>
        </div>
    </section> 
    <?php include 'page_elements/bottom_tabs.php';//La flèche est dans ce fichier?> 
  </body>
  <?php include 'page_elements/footer.php';//Pied de page, peu de contenu?> 
</html>