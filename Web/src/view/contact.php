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
      <li class="nav-item">
        <a class="nav-link" href="carte_graphique.php">Carte graphique</a>
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
      <p>Info personnelle</p>
    </div>
  </section>
  <section id=corp>
    <h3>Information</h3>
    <p>Nom : Marchand Valentin</p>
    <p>adresse mail : MarchandValentin.7@outlook.fr</p>

    <h3>Maquette</h3>
    <br>
    <a href="../image/Maquette.PNG" title="Cliquez pour agrandir"><img src="../image/Maquette.PNG" alt="Maquette" id="maquette"></a>
    <br>
  </section>  
  <?php
    include 'footer.html';
  ?>
