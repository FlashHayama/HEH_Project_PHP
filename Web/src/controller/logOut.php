<?php
    session_start();
    session_unset();
    session_destroy();
    extract($_GET);
    header ("Location: ../view/template.php?value=$value");
?>