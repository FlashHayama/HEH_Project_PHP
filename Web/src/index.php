<?php

$DB_DSN = 'mysql:host=127.0.0.1;dbname=maria';
$DB_USER = 'root';
$DB_PASS = '3111997';


$PDO = new PDO($DB_DSN,$DB_USER,$DB_PASS);
echo "Connection bien établie";


  exit();
  header('Location: view/template.php?value=home');
?>