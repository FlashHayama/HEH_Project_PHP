<?php
  include 'heater.html';

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
      <li class="nav-item">
        <a class="nav-link" href="carte_graphique.php">Carte graphique</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Processeur.php">Processeur</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">RAM</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ROM.php">Disque dur</a>
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
      <p>RAM</p>
    </div>
  </section>
  <section id=corp>
    <h3>Explication</h3>
    <figure>
      <img src="../image/RAM.png" alt="RAM">
    </figure>
    <p>
      La RAM est une mémoire volatile servant de stockage temporaire pour le traitement de données, l’avantage de cette mémoire est que le traitement d’information très rapide autant en lecture qu’en écriture. 
      L’inconvénient est que cette mémoire s’efface dès que l’ordinateur est éteint. De plus, cette RAM ayant un certain coût, si l’on voulait y stocker l’ensemble des informations, cela coûterait très cher. 
      Etant donné que l’on ne peut pas tout stocker dans la RAM (cout et perte de données) il a fallu mettre en parallèle un autre système de stockage en masse et permanent, ce qui se faisait au début de l’informatique avec des carte perforé et maintenant avec les disques durs.

    </p>
  </section>  
  <?php
    include 'footer.html';
  ?>