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
        <a class="nav-link" href="Carte_graphique.php">Carte graphique</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Processeur.php">Processeur</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="RAM.php">RAM</a>
      </li>
      <li class="nav-item active">
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
      <p>Disque dur</p>
    </div>
  </section>
  <section id=corp>
    <h3>Explication</h3>
    <figure>
      <img src="../image/kisspng-hard-drives-data-storage-disk-storage-serial-ata-d-hard-drive-5ae1f180b3bee4.2340839115247568647363.png" alt="Disque dur">
    </figure>
    <p>
      Le disque dur stocke les informations. L’avantage du disque dur c’est que l’on peut stocker une grande quantité d’informations et que ces informations perdurent même si l’on éteint l’ordinateur. Vous pouvez y enregistrer vos logiciels, vos jeux, vos musiques, …
      Le coût du stockage est beaucoup moins cher qu’avec de la mémoire vive. Cependant, la lecture et l’écriture sont beaucoup plus lents qu’avec cette mémoire.
      Il faut néanmoins faire attention car le disque dur est composé d’une partie électronique et une autre mécanique et donc tout ceci peut tomber en panne et par conséquent effacer une partie ou tout ce qui était enregistré, il est donc important de conserver les donné importante sur un autre support.
      Maintenant il y a aussi les nouveaux disque dur SSD qui sont composé exclusivement de pièce électronique, un peu comme la RAM et qui sont également plus rapide. 
    </p>
  </section>   
  <?php
    include 'footer.html';
  ?>