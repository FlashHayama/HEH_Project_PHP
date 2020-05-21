<?php
    require_once 'connect_data.php';

    function verifMailUser($mail) : bool
    {
        $PDO = get_PDO();

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

    function verifPasswordUser($password,$mail,&$result) : bool
    {
        $PDO = get_PDO();

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

    function verifReferenceComposant($reference) : bool
    {
        $PDO = get_PDO();
        
        $p = $PDO->prepare('SELECT reference FROM Composant WHERE reference = ?');
        $p->bindParam(1,$reference);
        $p->execute();

        $result = $p->fetchAll(PDO::FETCH_ASSOC);
        if(!empty($result))
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    function verifReferenceChoose($reference,$user,&$quantity = 0) : bool
    {
        $PDO = get_PDO();
        
        $p = $PDO->prepare('SELECT * FROM Choose WHERE id_user = ? and id_composant = ?');
        $p->bindParam(1,$user);
        $p->bindParam(2,$reference);
        $p->execute();

        $result = $p->fetch(PDO::FETCH_ASSOC);
        if(!empty($result))
        {
            $quantity = $result['quantity'];
            return true;
        }
        else
        {
            return false;
        }
    }
?>