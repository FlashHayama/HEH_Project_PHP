
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <a class="navbar-brand" href="template.php?value=home">Accueil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php if($_GET['value'] == 'mother' || $_GET['value'] == 'home') echo 'active';?>">
        <a class="nav-link" href="template.php?value=mother">Carte mère<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php if($_GET['value'] == 'gpu') echo 'active';?>">
        <a class="nav-link" href="template.php?value=gpu">Carte graphique</a>
      </li>
      <li class="nav-item <?php if($_GET['value'] == 'cpu') echo 'active';?>">
        <a class="nav-link" href="template.php?value=cpu">Processeur</a>
      </li>
      <li class="nav-item <?php if($_GET['value'] == 'ram') echo 'active';?>">
        <a class="nav-link" href="template.php?value=ram">RAM</a>
      </li>
      <li class="nav-item <?php if($_GET['value'] == 'rom') echo 'active';?>">
        <a class="nav-link" href="template.php?value=rom">Disque dur</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="template.php?value=mother" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <div class="btn-group form-inline my-2 my-lg-0" role="group" aria-label="Basic example">
      <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">S'identifier</button>
      <button type="button" class="btn btn-secondary">S'inscrire</button>
    </div>
  </div>
</nav>

