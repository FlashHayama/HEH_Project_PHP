<?php
  include 'heater.php';
  include_once 'form_modal.php';
?>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <a class="navbar-brand" href="../index.php">Accueil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="../index.php#nav">Carte mère<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Carte graphique</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="processeur.php">Processeur</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ram.php">RAM</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="rom.php">Disque dur</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <div class="btn-group form-inline my-2 my-lg-0" role="group" aria-label="Basic example">
      <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">S'identifier</button>
      <button type="button" class="btn btn-secondary">S'inscrire</button>
    </div>
  </div>
</nav>

  <section id=tete>
    <div>
      <h1>Monter son PC</h1>
      <p>Carte graphique</p>
    </div>
  </section>
  <section id=corp>
    <h3>Explication</h3>
    <figure>
      <img src="../image/carte-graphique.png" alt="Carte_graphique">
    </figure>
    <p>
      Une carte graphique ou encore une carte vidéo est une carte d’extension de l’ordinateur qui permet de produire une image affichable par le moniteur(écran).
      <br>
      Même si les première carte graphique ne permettait que d’afficher des image 2D et monochrome,
      Avec l’évolution des techniques pour augmenter la vitesse de transfert entre le processeur et la carte graphique, des nouvelles cartes sont créées permettant d’afficher des images 3D et leurs puissances de calcul continue d’augmenter avec un cout finalement très réduit.

    </p>
  </section>
  <?php
    include 'footer.html';
  ?>