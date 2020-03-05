<!doctype html>
<html lang="fr">
  <head>
    <title>Fonctionnement d'un ordinateur</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="view/CSS/CSS.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="description" content="fonctionnement d'un ordinateur">
    <meta name="keyworks" content="carte graphique, carte mere, ordinateur, Processeur, fonctionnement, informatique">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <meta name="author" content="Marchand Valentin">
    <meta name="geo.placement" content="Mons, Hainaut">
    <meta name="geo.region" content="BE-WHT">
  </head>
  <body>
    <?php
      include_once 'view/form_modal.php';
    ?>
    
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Accueil</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> 
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#nav">Carte mère<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="view/Carte_graphique.php">Carte graphique</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="view/Processeur.php">Processeur</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="view/RAM.php">RAM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="view/ROM.php">Disque dur</a>
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
          <p>Accueil</p>
        </div>
      </section>
      <section id=corp>
        <h3>Introduction</h3>
        <p>
          L’ordinateur est une technologie aujourd’hui utiliser par tous le monde et dans tous les domaines, que se soit dans l’industrie ou dans les taches du quotidien, que se soit des tours pc ou des téléphones, l’ordinateur est l’héritier de nombreuse invention, comme celle des mathématiques et des machines à calculer.
          <br>
          Ce document a pour objectif d’expliquer simplement le fonctionnement d’un ordinateur ainsi que des différent composant qui le compose :
        </p>  
        <ul>
          <li>Processeur</li>
          <li>Disque dur</li>
          <li>RAM</li>
          <li>Carte graphique</li>
          <li>Carte mère</li>
        </ul>
        
        <h3 id="carte">Carte mère</h3>
        <p>La carte mère est l’élément central de l’ordinateur, elle permet de relier tous les composant entre eux et possède tous les branchements pour les périphériques d’entrées et de sorties.</p>
        <br>
        <p>Clique sur les zone pour naviguer : (Ne fonctionne pas avec les petit ecrant de moin de 1000 pixel)</p>
      </section>
      <nav id="nav" >
        <figure>
          <img src="image/Carte_mere.jpg" alt="Carte_mere" usemap="#carte">
          <map name="carte">
            <area shape="rect" coords="179,678,591,730" href="view/Carte_graphique.php" alt="" title="Carte graphique">
            <area shape="rect" coords="178,918,589,970" href="view/Carte_graphique.php" alt="" title="Carte graphique">
            <area shape="rect" coords="424,253,589,454" href="view/Processeur.php" alt="" title="Processeur">
            <area shape="rect" coords="695,44,840,613" href="view/RAM.php" alt="" title="RAM">
            <area shape="rect" coords="882,801,952,941" href="view/ROM.php" alt="" title="Disque dur">
          </map>
        </figure>
      </nav> 
      <footer id="pied">
    <div>
      <h4>Me contacter :</h4>
      <p>Nom : Marchand Valentin</p>
      <p>telephone : 0495 92 46 20</p>
      <a href="mailto:marchandvalentin.7@outlook.fr">marchandvalentin.7@outlook.fr</a>
      <a href="View/Contact.php">Information</a>
    </div>
    <div>
      <h4>Liens utile :</h4>
      <div class="ligne">
        <a href="https://www.facebook.com/valentin.marchand.12327"><img src="icone/facebook.png" alt="">Facebook</a>
      </div>
      <div class="ligne">
          <a href="https://www.Youtube.com"><img src="icone/youtube1png.png" alt="">Youtube</a>
      </div>
    </div>
    <div>
      <h4>Sources :</h4>
      <div>
        <a href="https://www.culture-informatique.net/comment-ca-marche-un-ordinateur/">https://www.culture-informatique.net</a>
        <a href="https://fr.m.wikipedia.org/wiki/Carte_graphique">https://fr.m.wikipedia.org/carte_graphique</a>
        <a href="https://fr.wikipedia.org/wiki/M%C3%A9moire_vive">https://fr.wikipedia.org/wiki/Memoire_vive</a>
      </div>
    </div>
    
  </footer>
</body>
</html>