<?php
    require_once '../model/colect_data.php'
?>

<?php function mother() { ?>
    <h3>Introduction</h3>
    <p>
        L’ordinateur est une technologie aujourd’hui utiliser par tous le monde et dans tous les domaines, que se soit dans l’industrie ou dans les taches du quotidien, que se soit des tours pc ou des téléphones, l’ordinateur est l’héritier de nombreuse invention, comme celle des mathématiques et des machines à calculer.
        
    <h3 id="carte">Carte mère</h3>
    <p>La carte mère est l’élément central de l’ordinateur, elle permet de relier tous les composant entre eux et possède tous les branchements pour les périphériques d’entrées et de sorties.</p>
    <br>
    <p>Clique sur les zone pour naviguer : (Ne fonctionne pas avec les petit ecrant de moin de 1000 pixel)</p>
    </section>
    <nav id="nav" >
    <figure>
        <img src="../image/Carte_mere.jpg" alt="Carte_mere" usemap="#carte">
        <map name="carte">
        <area shape="rect" coords="179,678,591,730" href="template.php?value=gpu" alt="" title="Carte graphique">
        <area shape="rect" coords="178,918,589,970" href="template.php?value=gpu" alt="" title="Carte graphique">
        <area shape="rect" coords="424,253,589,454" href="template.php?value=cpu" alt="" title="Processeur">
        <area shape="rect" coords="695,44,840,613" href="template.php?value=ram" alt="" title="RAM">
        <area shape="rect" coords="882,801,952,941" href="template.php?value=rom" alt="" title="Disque dur">
        </map>
    </figure>
    </nav> 
<?php } ?>
<?php function component() { ?>
    <?php $ty = 2; ?>
    <div class="media">
        <img src="<?= "../image/".$_GET['value'].".png"; ?>" class=" mr-3" alt="<?= $_GET['value'];?>">
        <div class="media-body">
            <h5 class="mt-0">Explication</h5>
            <?php
                switch ($_GET['value'])
                {
                           case 'gpu': $ty = 2;?>
                        <p>Une carte graphique ou encore une carte vidéo est une carte d’extension de l’ordinateur qui permet de produire une image affichable par le moniteur(écran).</p>
                        <p>Même si les première carte graphique ne permettait que d’afficher des image 2D et monochrome,
                                        Avec l’évolution des techniques pour augmenter la vitesse de transfert entre le processeur et la carte graphique, des nouvelles cartes sont créées permettant d’afficher des images 3D et leurs puissances de calcul continue d’augmenter avec un cout finalement très réduit.</p>
            <?php break;   case 'cpu': $ty = 3;?>
                        <p>C’est lui qui effectue les calculs et exécute les instructions.</p>
                        <p>Un processeur est composé de millier de transistor, des petits puces électroniques qui fonctionnent un peu comme des interrupteurs et qui ont donc 2 états, allumer ou éteint, 1 ou 0, ce qui va permettre celons les opérations demander de laisser passer le courant ou pas.</p>
                        <p>Les processeurs ont un certain rythme et sont cadencer par une horloge, plus elle tourne vite et plus le CPU pourra traiter des informations, à chaque impulsion les transistors vont prendre un 1 ou un 0, ce qui va permettre de faire des calculs.
                                        On exprime ce cadencement en GHz.</p>
                        <p>(Giga Hertz, Hertz étant une unité de fréquence). On peut parler d’un processeur à 4GHz. Soit 4.000.000.000 cycles d’opérations à la seconde !!
                                        Les processeurs on différente caractéristique les uns avec les autres donc 2 processeurs cadencés à 4GHz n’auront pas forcément la même puissance, car la vitesse ne suffit pas et pour aller plus vite certain CPU on plusieurs cœur et de la mémoire cache intégrer.</p>
            <?php break;   case 'ram': $ty = 4;?>
                        <p>La RAM est une mémoire volatile servant de stockage temporaire pour le traitement de données, l’avantage de cette mémoire est que le traitement d’information très rapide autant en lecture qu’en écriture. 
                            L’inconvénient est que cette mémoire s’efface dès que l’ordinateur est éteint. De plus, cette RAM ayant un certain coût, si l’on voulait y stocker l’ensemble des informations, cela coûterait très cher. 
                            Etant donné que l’on ne peut pas tout stocker dans la RAM (cout et perte de données) il a fallu mettre en parallèle un autre système de stockage en masse et permanent, ce qui se faisait au début de l’informatique avec des carte perforé et maintenant avec les disques durs.</p> 
            <?php break;   case 'rom': $ty = 5;?>
                        <p>Le disque dur stocke les informations. L’avantage du disque dur c’est que l’on peut stocker une grande quantité d’informations et que ces informations perdurent même si l’on éteint l’ordinateur. Vous pouvez y enregistrer vos logiciels, vos jeux, vos musiques, …
                            Le coût du stockage est beaucoup moins cher qu’avec de la mémoire vive. Cependant, la lecture et l’écriture sont beaucoup plus lents qu’avec cette mémoire.
                            Il faut néanmoins faire attention car le disque dur est composé d’une partie électronique et une autre mécanique et donc tout ceci peut tomber en panne et par conséquent effacer une partie ou tout ce qui était enregistré, il est donc important de conserver les donné importante sur un autre support.
                            Maintenant il y a aussi les nouveaux disque dur SSD qui sont composé exclusivement de pièce électronique, un peu comme la RAM et qui sont également plus rapide. </p>
            <?php break;   case 'alim': $ty = 6;?>
                        <p>Permet d'alimenter chaque composant de l'ordinateur avec une tension adéquate </p>
            <?php
                break;}
            ?>
        </div>

    </div>
<?php } 


function affiche_composant($ty)
{
    $list_composant = get_composants($ty);
    echo "<div class=\"list-group\">";
    echo "<table border=\"1\" >";
    echo "<tr>";
    echo "<td>&nbsp;</td>";
    echo "<th>Nom</th>";
    echo "<th>Puissance</th>";
    echo "<th>Déscription</th>";
    echo "<th>Vers collection</th>";
    echo "</tr>";

    foreach($list_composant as $composant)
    {
        $value = $_GET['value'];
        extract($composant);
        //echo "<a href=\"#\" class=\"list-group-item list-group-item-action\">";
        echo "<tr>";
        echo "<td style=\"width: 120px\"><a href=\"$picture\"><img src=\"$picture\" style=\"width: 100px\"></a></td>";
        echo "<td>$name</td>";
        echo "<td>$power</td>";
        echo "<td>$feature</td>";
        echo "<td><a href=\"../controller/add_to_col.php?ref=$reference&value=$value\" class=\"btn btn-secondary\">Envoyer</a></td>";
        echo "</tr>";
        //echo "</a>";
    }
    echo "</table>";
    echo "</div>";
}
?>