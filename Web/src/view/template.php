<?php
    include_once 'heater.php';
    include_once 'form_modal.php';
    include_once 'navbar.php';
    include_once 'content.php';
?>
<?php if(true){?>
    <section id=tete>
        <div>
            <h1>Tester son PC</h1>
            <p><?php
                $ty = 0;
                switch ($_GET['value'])
                {
                    case 'home': echo 'Accueil'; $ifExists = true; $ty = 1; break;
                    case 'mother': echo 'Accueil'; $ifExists = true; $ty = 1; break;
                    case 'gpu': echo 'Carte graphique'; $ifExists = true; $ty = 2; break;
                    case 'cpu': echo 'Processeur'; $ifExists = true; $ty = 3; break;
                    case 'ram': echo 'RAM'; $ifExists = true; $ty = 4; break;
                    case 'rom': echo 'Disque dur'; $ifExists = true; $ty = 5; break;
                    case 'alim': echo 'Alimentation'; $ifExists = true; $ty = 6; break;
                    case 'add': echo 'Ajout de composant'; break;
                    case 'col': echo 'Collection'; break;
                    default: echo 'Page inexistante'; $ifExists = false;
                }
            ?></p>
        </div>
    </section>
<?php }?>
<section id=corp>
    <?php
        if ($_GET['value'] == 'mother' || $_GET['value'] == 'home')
        {
            mother();
        }
        else if ($_SESSION['admin'] && $_GET['value'] == 'add')
        {
            include_once 'add_form.php';
        }
        else if ($_GET['value'] == 'col')
        {
            include_once 'collection.php';
        }
        else if ($ifExists)
        {
            component();
        }
        else
        {
            echo '<h1>Erreur : La page n\'existe pas</h1>';
        }
    ?>
</section>
<?php
    if($ifExists)
        affiche_composant($ty);
    include_once 'footer.html';
?>