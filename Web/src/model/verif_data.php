<?php
    function verifMailUser($mail) : bool
    {
        try
        {
            require 'db-config.php';
            $PDO = new PDO($DB_DSN,$DB_USER,$DB_PASS,$options);      
        
            $p = $PDO->prepare('SELECT mail FROM User WHERE mail = ?');
            $p->bindParam(1,$mail);
            $p->execute();

            $result = $p->fetchAll(PDO::FETCH_ASSOC);
            if(empty($result))
            {
                return false;
            }
            else
            {
                return true;
            }
        }
        catch (PDOException $e)
        {
            echo "ERREUR : " . $e->getMessage();            
        }
    }

    function verifPasswordUser($password,$mail,&$result) : bool
    {
        try
        {
            require 'db-config.php';
            $PDO = new PDO($DB_DSN,$DB_USER,$DB_PASS,$options);      
        
            $p = $PDO->prepare('SELECT * FROM User WHERE mail = ?');
            $p->bindParam(1,$mail);
            $p->execute();

            $result = $p->fetch(PDO::FETCH_ASSOC);
            $options = [
                'cost' => 12,
            ];
            $v = password_verify($password,$result["password"]);
            if($v)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        catch (PDOException $e)
        {
            echo "ERREUR : " . $e->getMessage();            
        }
    }
?>