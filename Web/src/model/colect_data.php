<?php
    require_once 'connect_data.php';

    function get_composants($index) : array
    {
        $PDO = get_PDO();

        $request = $PDO->prepare('SELECT * FROM Composant where id_type = :id_type ORDER BY mark');
        $request->bindValue(":id_type",$index);
        
        $request->execute();

        return $request->fetchAll(PDO::FETCH_ASSOC);
    }

    function get_choose($user) : array
    {
        $PDO = get_PDO();

        $request = $PDO->prepare('SELECT * FROM Choose,Composant where id_user = :id_user and id_composant = reference ORDER BY id_type');
        $request->bindValue(":id_user",$user);
        
        $request->execute();

        return $request->fetchAll(PDO::FETCH_ASSOC);
    }
?>