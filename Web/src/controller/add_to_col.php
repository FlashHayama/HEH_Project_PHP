<?php
    require_once '../model/verif_data.php';
    require_once '../model/insert_data.php';
    session_start();

    if(!verifReferenceComposant($_GET['ref']))
    {
        $quantity = 0;
        if(isset($_SESSION['id']))
        {
            if(verifReferenceChoose($_GET['ref'],$_SESSION['id'],$quantity))
            {
                changeQuantity($_GET['ref'],$_SESSION['id'],$quantity);
            }
            else
            {
                insertChooce($_GET['ref'],$_SESSION['id']);
            }
        }
        header("Location: ../view/template.php?value=col");
    }
    else
    {
        $value = $_GET['value'];
        header("Location: ../view/template.php?value=$value");
    }
?>