<?php
    include_once 'heater.php';
    include_once 'form_modal.php';
    include_once 'navbar.php';
    include_once 'content.php';
?>
<?php if(true){?>
    <section id=tete>
        <div>
            <h1>Monter son PC</h1>
            <p><?php
                switch ($_GET['value'])
                {
                    case 'home': echo 'Accueil'; $ifExists = true; break;
                    case 'mother': echo 'Accueil'; $ifExists = true; break;
                    case 'gpu': echo 'Carte graphique'; $ifExists = true; break;
                    case 'cpu': echo 'Processeur'; $ifExists = true; break;
                    case 'ram': echo 'RAM'; $ifExists = true; break;
                    case 'rom': echo 'Disque dur'; $ifExists = true; break;
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
        else if ($ifExists)
        {
            component();
        }
        else
        {
            echo '<h1>Erreur : La page n\'existe pas</h1>';
        }
        if($_GET['value'] == 'mother')
        {
            
        }
    ?>
</section>
<?php
    if($ifExists)
        include_once 'footer.html';
?>