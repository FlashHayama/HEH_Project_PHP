<?php
    function get_PDO()
    {
        require 'db-config.php';
        try
        {
            $PDO = new PDO($DB_DSN,$DB_USER,$DB_PASS,$options);    
            return $PDO;  
        }
        catch (PDOException $e)
        {
            echo "Erreur : " . $e->getMessage();
            return null;
        }
    }
?>