<?php

    $DB_DSN = 'mysql:host=' . $_ENV['HOST'] . ';dbname='. $_ENV['HOSTNAME'];
    $DB_USER = 'root';
    $DB_PASS = $_ENV['PASSWORD'];
    $options = 
    [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_PERSISTENT
    ];

?>