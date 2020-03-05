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
      <li class="nav-item active">
        <a class="nav-link" href="#">Processeur</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="RAM.php">RAM</a>
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
      <p>Processeur</p>
    </div>
  </section>
  <section id=corp>
    <h3>Explication</h3>
    <figure>
      <img src="../image/processeur.png" alt="Processeur">
    </figure>
    <p>
      C’est lui qui effectue les calculs et exécute les instructions.
    </p>
    <p>
      Un processeur est composé de millier de transistor, des petits puces électroniques qui fonctionnent un peu comme des interrupteurs et qui ont donc 2 états, allumer ou éteint, 1 ou 0, ce qui va permettre celons les opérations demander de laisser passer le courant ou pas.
    </p>
    <p>
      Les processeurs ont un certain rythme et sont cadencer par une horloge, plus elle tourne vite et plus le CPU pourra traiter des informations, à chaque impulsion les transistors vont prendre un 1 ou un 0, ce qui va permettre de faire des calculs.
      On exprime ce cadencement en GHz.
    </p>
    <p>
      (Giga Hertz, Hertz étant une unité de fréquence). On peut parler d’un processeur à 4GHz. Soit 4.000.000.000 cycles d’opérations à la seconde !!
      Les processeurs on différente caractéristique les uns avec les autres donc 2 processeurs cadencés à 4GHz n’auront pas forcément la même puissance, car la vitesse ne suffit pas et pour aller plus vite certain CPU on plusieurs cœur et de la mémoire cache intégrer.
    </p>
  </section>  
  <?php
    include 'footer.html';
  ?>