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
      <p><a href="index.php" title="Accueil">Accueil</a> > <a href="metiers.php" title="Métiers">Métiers</a> > <a href="architecte_logiciel.php" title="Architecte logiciel"><u>Architecte logiciel</u></a></p>
      <div id="search">
        <input type="text" placeholder="Rechercher un élément...">
        <input type="submit" value="">
      </div>
    </section>
    <!-- Contenu spécifique à une page. -->
    <section id="main">
      <div id="row">
        <div id="column">
          <h1>ARCHITECTE LOGICIEL</h1>
          <p>L'architecte logiciel est un <span class="color">expert en informatique</span> qui est responsable de la création et du respect du <span class="color">modèle d'architecture</span> dans les logiciels.</p>
        </div>
        <img src="images/metiers/architecte_logiciel/architecte_logiciel_photo.jpg" alt="Architecte logiciel" title="Architecte logiciel" width="300" height="225"/>
      </div>
      <h2>Détail :</h2>
      <p>Il analyse ou créé un <span class="color">système</span> pour comprendre les <span class="color">attentes de l'utilisateur</span> et ainsi les combler en concevant des architectures logicielles ou en étant capable de se mettre à jour sur les dernières <span class="color">normes</span> et <span class="color">technologies</span>.</p>
      <div id="row">
        <div id="column">
          <h2>Qualités requises :</h2>
          <ul>
            <li>Leadership</li>
            <li>Adaptabilité</li>
            <li>Analyse</li>
            <li>Créativité</li>
            <li>Sens relationnel</li>
            <li>Rigueur</li>
            <li>Communication orale et écrite</li>
          </ul>
        </div>
        <div id="column">
          <h2>Compétences :</h2>
          <ul>
            <li>Informatique et technologies spécifiques</li>
            <li>Gestion d'entreprise</li>
            <li>Résolution de problèmes complexes</li>
            <li>Transmission des connaissances</li>
            <li>Maîtrise des logiciels</li>
            <li>Langue anglaise</li>
          </ul>
        </div>
      </div>
      <h2>Formations :</h2>
      <p><span class="color">Bac+5</span> en école d'ingénieur ou université spécialisée en informatique.</br><i>Exemple : L'<span class="color">ESTIAMA</span> à <span class="color">Lyon</span>.</i></p>
      <div id="row">
        <div id="column">
          <h2>Salaire :</h2>
          <p>L'architecte logiciel peut avoir un salaire allant de <span class="color">5&nbsp;000&nbsp;€</span> à <span class="color">8&nbsp;000&nbsp;€</span> bruts par mois.</p>
        </div>
        <div id="column">
          <h2>Évolutions possibles :</h2>
          <p>Ce métier n'a pas de réelle évolution.</br>Il est plutôt considéré comme un <span class="color">aboutissement de carrière</span> après plusieurs années en tant qu'ingénieur en développement logiciel.</p>
        </div>
      </div>
      <div id="row">
        <div id="column">
          <h3>Voir aussi :</h3>
          <ul class="no_dot_list">
            <li ><a href="developpeur_web.php" title="developpeur_web.php" title="Développeur web">Développeur Web</a></li>
            <li><a href="game_designer.php" title="Game Designer">Game Designer</a></li>
            <li><a href="pentester.php" title="pentester.php" title="Pentester">Pentester</a></li>
          </ul>
        </div>
        <a class="download" href="fiches_metier/architecte_logiciel.pdf" download="Architecte logiciel">Télécharger la fiche métier</a>
      </div>
    </section> 
    <?php include 'page_elements/bottom_tabs.php';//La flèche est dans ce fichier?> 
  </body>
  <?php include 'page_elements/footer.php';//Pied de page, peu de contenu?> 
</html>