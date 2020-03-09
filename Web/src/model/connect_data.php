<?php
    require_once 'db-config.php';

    try
    {
    $PDO = new PDO($DB_DSN,$DB_USER,$DB_PASS);
    echo "Connection bien établie";
    }
    catch (PDOException $e)
    {
    echo $e;
    }