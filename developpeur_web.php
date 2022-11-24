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
      <p><a href="index.php" title="Accueil">Accueil</a> > <a href="metiers.php" title="Métiers">Métiers</a> > <a href="developpeur_web.php" title="Développeur web"><u>Développeur web</u></a></p>
      <div id="search">
        <input type="text" placeholder="Rechercher un élément...">
        <input type="submit" value="">
      </div>
    </section>
    <!-- Contenu spécifique à une page. -->
    <section id="main">
      <div id="row">
        <div id="column">
          <h1>DÉVELOPPEUR WEB</h1>
          <p>Le développeur web est un <span class="color">programmateur multi-tâches et multi-languages</span>, très flexible (agile), afin de s'adapter aux nombreux besoins d'un site internet. Il travaille au sein d'une agence de communication, en freelance, en SSII ou directement en entreprise.</p>
        </div>
        <img src="images/metiers/developpeur_web/developpeur_web_photo.jpg" alt="Développeur web" title="Développeur web" width="350" height="225"/>
      </div>
      <h2>Détail :</h2>
      <p> Il <span class="color">développe des interfaces web adaptées</span> pour son client et il s'agit de sites Intranet, de sites internet, d'applications web ou d'outils en ligne. </p>
    <div id="row">
        <div id="column">
          <h2>Qualités requises :</h2>
          <ul>
            <li>Rigoureux</li>
            <li>Polyvalent</li>
            <li>Autonome</li>
            <li>Être réactif</li>
          </ul>
        </div>
        <div id="column">
          <h2>Compétences :</h2>
           <ul>
            <li>Solide culture web et des tendances internet</li>
            <li>Maîtrise des principaux langages de développement web</li>
            <li>Grande capacité d’écoute pour comprendre les besoins des clients</li>
            <li>Bon relationnel</li>
            <li>Capable de s’adapter rapidement aux évolutions de son environnement</li>
          </ul>
        </div>
      </div>
          <h2>Formations :</h2>
          <p>Bac+2 en <span class="color">BTS</span> ou <span class="color">DUT</span> informatique</p>
          <p>Bac+5 en <span class="color">écoles d'ingénieurs</span> spécialisés ou <span class="color">masters</span> spécialisés en informatique</p>
    <div id="row">
        <div id="column">
          <h2>Salaire :</h2>
          <p>Le développeur web peut avoir un salaire de <span class="color">2500€ brut mensuel</span> pour un débutant et de 3000€ à 4000€ bruts par mois pour les expérimentés.</br> Le salaire moyen en France est 47.900€ bruts par an.</p>
        </div>
        <div id="column">
          <h2>Évolutions possibles :</h2>
          <p>Après quelques expériences, il est capable de présenter une première création,de démarcher de nouveaux clients, de gravir un échelon dans la situation professionnelle. De plus, il peut également faire le choix d’exercer son métier en tant qu’indépendant et se positionner en tant que directeur technique.</p>
        </div>
      </div>
    <div id="row">
        <div id="column">
          <h3>Voir aussi :</h3>
          <ul class="no_dot_list">
            <li><a href="architecte_logiciel.php" title="Architecte logiciel">Architecte Logiciel</a></li>
            <li><a href="game_designer.php" title="Game Designer">Game Designer</a></li>
            <li><a href="pentester.php" title="pentester.php" title="Pentester">Pentester</a></li>
          </ul>
        </div>
        <a class="download" href="fiches_metier/developpeur_web.pdf" download="Développeur web">Télécharger la fiche métier</a>
        </div>
    </section> 
    <?php include 'page_elements/bottom_tabs.php';//La flèche est dans ce fichier?> 
  </body>
  <?php include 'page_elements/footer.php';//Pied de page, peu de contenu?> 
</html>