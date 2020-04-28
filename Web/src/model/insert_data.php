<?php
    function insertUser(array $user)
    {
        try
        {
            require 'db-config.php';
            $PDO = new PDO($DB_DSN,$DB_USER,$DB_PASS,$options);
        
            extract($user);

            $options = [
                'cost' => 12,
            ];
            $hashpass = password_hash($pa, PASSWORD_BCRYPT, $options);

            $request = $PDO->prepare('INSERT INTO User(name,firstName,age,mail,password) VALUES(:name,:firstName,:age,:mail,:password)');
            $request->bindValue(":name",$na);
            $request->bindValue(":firstName",$fi);
            $request->bindValue(":age",$da);
            $request->bindValue(":mail",$ma);
            $request->bindValue(":password",$hashpass);

            $request->execute();
        }
        catch (PDOException $e)
        {
            echo "ERREUR : " . $e->getMessage();
        }
    }
?>