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
      <p><a href="index.php" title="Accueil">Accueil</a> > <a href="contact.php" title="Contact"><u>Contact</u></a></p>
      <div id="search">
        <input type="text" placeholder="Rechercher un élément...">
        <input type="submit" value="">
      </div>
    </section>
    <!-- Contenu spécifique à une page. -->
    <section id="main">
      <div id="row">
        <div id="column">
          <h1>IUT Informatique de La Rochelle</h1>
          <ul>
            <li><span class="color">Adresse</span> : 15 rue François de Vaux de Foletier - 17026 La Rochelle Cedex 1 - France</li>
            <li><span class="color">Téléphone</span> : +33&nbsp;(0)5&nbsp;46&nbsp;51&nbsp;39&nbsp;00</li>
            <li><span class="color">Établissement</span> : IUT Informatique de La Rochelle</li>
          </ul>
        </div>
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2764.442713920753!2d-1.1535880337831077!3d46.14192974598455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x352619d914a0d0bd!2sD%C3%A9partement%20Informatique!5e0!3m2!1sfr!2sus!4v1579286857282!5m2!1sfr!2sus"></iframe>
      </div>
      <div id="row">
        <div id="column">
          <h2>BÉQUIN Tom</h2>
          <ul>
            <li>Adresse e-mail étudiante : <a href="mailto:tom.bequin@etudiant.univ-lr.fr" title="Envoyer un mail">tom.bequin@etudiant.univ-lr.fr</a></li>
            <li>Établissement : IUT Informatique de La Rochelle</li>
          </ul>
        </div>
        <div id="column">
          <h2>CHACON Esteban</h2>
          <ul>
            <li>Adresse e-mail étudiante : <a href="mailto:esteban.chacon@etudiant.univ-lr.fr" title="Envoyer un mail">esteban.chacon@etudiant.univ-lr.fr</a></li>
            <li>Établissement : IUT Informatique de La Rochelle</li>
          </ul>
        </div>
        <div id="column">
          <h2>OLIVIA Tania</h2>
          <ul>
            <li>Adresse e-mail personnelle : <a href="mailto:tania.olivia69@yahoo.com" title="Envoyer un mail">tania.olivia69@yahoo.com</a></li>
            <li>Adresse e-mail étudiante : <a href="mailto:tania.olivia@etudiant.univ-lr.fr" title="Envoyer un mail">tania.olivia@etudiant.univ-lr.fr</a></li>
            <li>Établissement : IUT Informatique de La Rochelle</li>
          </ul>
        </div>
        <div id="column">
          <h2>VERGER Sandy</h2>
          <ul>
            <li>Adresse e-mail étudiante : <a href="mailto:sandy.verger@etudiant.univ-lr.fr" title="Envoyer un mail">sandy.verger@etudiant.univ-lr.fr</a></li>
            <li>Établissement : IUT Informatique de La Rochelle</li>
          </ul>
        </div>
      </div>
    </section> 
    <?php include 'page_elements/bottom_tabs.php';//La flèche est dans ce fichier?> 
  </body>
  <?php include 'page_elements/footer.php';//Pied de page, peu de contenu?> 
</html>