<?php
    include_once 'heater.php';
    include_once 'form_modal.php';
    include_once 'navbar.php';
?>
<?php if(true){?>
    <section id=tete>
        <div>
            <h1>Monter son PC</h1>
            <p><?php
                switch ($_GET['value'])
                {
                    case 'home':
                        echo 'Accueil';
                        break;
                    case 'mother':
                        echo 'Accueil';
                        break;
                    case 'gpu':
                        echo 'Carte graphique';
                        break;
                    case 'cpu':
                        echo 'Processeur';
                        break;
                    case 'ram':
                        echo 'RAM';
                        break;
                    case 'rom':
                        echo 'Disque dur';
                        break;
                    case 'contact':
                        echo 'Info personnelle';
                        break;
                    default:
                        break;
                }
            ?></p>
        </div>
    </section>
<?php }?>
<section id=corp>
    
</section>
<?php
    include_once 'footer.html';
?>