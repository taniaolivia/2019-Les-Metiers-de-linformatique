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
      <p><a href="index.php" title="Accueil">Accueil</a> > <a href="connexion.php" title="Connexion">Connexion</a> > <a href="inscription.php" title="Inscription"><u>Inscription</u></a></p>
      <div id="search">
        <input type="text" placeholder="Rechercher un élément...">
        <input type="submit" value="">
      </div>
    </section>
    <section id="main">
      <h1>INSCRIPTION</h1>
      <p>
        <div id="row">
          <div id="column">
            <h2>Veuillez remplir les champs ci-dessous :</h2>
            <div id="connexion">
              <input type="text" placeholder="Nom d'utilisateur..." required/>
              <input type="text" placeholder="Adresse e-mail..." required/>
              <input type="password" placeholder="Mot de passe..." required/>
              <input type="password" placeholder="Répétez le mot de passe..." required/>
              <input type="submit" value="S'inscrire"/>
            </div>
          </div>
          <div id="column">
            <h2>Déjà un compte ?</h2>
            <p><a href="connexion.php">Connectez-vous !</a></p>
          </div>
        </div>
      </p>
    </section> 
    <?php include 'page_elements/bottom_tabs.php';//La flèche est dans ce fichier?> 
  </body>
  <?php include 'page_elements/footer.php';//Pied de page, peu de contenu?> 
</html>