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
      <p><a href="index.php" title="Accueil">Accueil</a> > <a href="plan_du_site.php" title="Plan du site"><u>Plan du site</u></a></p>
      <div id="search">
        <input type="text" placeholder="Rechercher un élément...">
        <input type="submit" value="">
      </div>
    </section>
    <!-- Contenu spécifique à une page. -->
    <section id="main">
      <div id="row">
        <div id="column">
          <h1>PLAN DU SITE</h1>
          <p>Voici l'intégralité des <span class="color">pages disponibles</span> sur le site.</br>Cliquez sur l'une d'elles pour y accéder.</p>
          <ul>
            <li><a href="index.php" title="Accueil">Accueil</a></li>
            <li>
              <a href="metiers.php" title="Métiers">Métiers :</a>
              <ul>
                <li><a href="architecte_logiciel.php" title="Architecte logiciel">Architecte logiciel</a></li>
                <li><a href="developpeur_web.php" title="Développeur web">Développeur web</a></li>
                <li><a href="game_designer.php" title="Game designer">Game designer</a></li>
                <li><a href="pentester.php" title="Pentester">Pentester</a></li>
              </ul>
            </li>
            <li>
              <a href="interviews.php" title="Interviews">Interviews :</a>
              <ul>
                <li><a href="interview_1.php" title="Interview n°1"><u>Interview n°1</u></a></li>
                <li><a href="interview_2.php" title="Interview n°2"><u>Interview n°2</u></a></li>
              </ul>
            </li>
            <li><a href="contact.php" title="Contact">Contact</a></li>
              <li><a href="connexion.php" title="Connexion">Connexion :</a></li>
              <ul>
                <li><a href="inscription.php" title="Inscription">Inscription</a></li>
              </ul>
            </li>
            <li><a href="plan_du_site.php" title="Plan du site">Plan du site</a></li>
            <li><a href="sources.php" title="Sources">Sources</a></li>
          </ul>
        </div>
        <div id="column">
          <h2>Charte graphique</h2>
          <p>Voici la  <span class="color">charte graphique</span> utilisée sur notre site.</p>
          <img src="images/plan_du_site/graphic_chart.png" alt="Charte graphique" title="Charte graphique" width="600px"/>
        </div>
      </div>
    </section>
    <?php include 'page_elements/bottom_tabs.php';//La flèche est dans ce fichier?> 
  </body>
  <?php include 'page_elements/footer.php';//Pied de page, peu de contenu?> 
</html>