<?php
    require 'db-config.php';
    try
    {
        $PDO = new PDO($DB_DSN,$DB_USER,$DB_PASS,$options);      
    }
    catch (PDOException $e)
    {
        echo "Probleme lors de la connection a la base de données.";
    }
?>