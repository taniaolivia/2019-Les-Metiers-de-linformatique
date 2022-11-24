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
      <p><a href="index.php" title="Accueil">Accueil</a> > <a href="connexion.php" title="Connexion"><u>Connexion</u></a></p>
      <div id="search">
        <input type="text" placeholder="Rechercher un élément...">
        <input type="submit" value="">
      </div>
    </section>
    <section id="main">
      <h1>CONNEXION</h1>
      <p>
        <div id="row">
          <div id="column">
            <h2>Se connecter avec :</h2>
            <a href="#" class="social facebook"><img src="images/connexion/facebook.png" alt="Logo de Facebook" title="Logo de Facebook"/>Facebook</a>
            <a href="#" class="social twitter"><img src="images/connexion/twitter.png" alt="Logo de Twitter" title="Logo de Twitter"/>Twitter</a>
            <a href="#" class="social google"><img src="images/connexion/google.png" alt="Logo de Google" title="Logo de Google"/>Google</a>
          </div>
          <div id="column">
            <h2>Se connecter :</h2>
            <div id="connexion">
              <input type="text" placeholder="Nom d'utilisateur..." required/>
              <input type="password" placeholder="Mot de passe..." required/>
              <input type="submit" value="S'identifier"/>
            </div>
          </div>
          <div id="column">
            <h2>Pas encore de compte ?</h2>
            <p><a href="inscription.php">Inscrivez-vous !</a></p>
          </div>
          <div id="column">
            <h2>Mot de passe oublié ?</h2>
            <p><a href="#">Réinitialisez votre mot de passe !</a></p>
          </div>
        </div>
      </p>
    </section> 
    <?php include 'page_elements/bottom_tabs.php';//La flèche est dans ce fichier?> 
  </body>
  <?php include 'page_elements/footer.php';//Pied de page, peu de contenu?> 
</html>