<?php
    require_once '../model/delete_data.php';
    require_once '../model/verif_data.php';
    session_start();

    if(isset($_SESSION['id']))
    {
        if($_GET['mode'] == 0)
        {
            if(verifReferenceChoose($_GET['ref'],$_SESSION['id']))
            {
                del_choose($_GET['ref'],$_SESSION['id']);
            }
            
        }
        else if($_GET['mode'] == 1)
        {
            del_all_choose($_SESSION['id']);
        }
    }
    header("Location: ../view/template.php?value=col");
    
?>