<?php
    require_once 'connect_data.php';

    function del_choose($reference,$user)
    {
        $PDO = get_PDO();

        $request = $PDO->prepare('DELETE FROM Choose WHERE id_user = ? AND id_composant = ?');
        $request->bindValue(1,$user);
        $request->bindValue(2,$reference);

        $request->execute();
    }

    function del_all_choose($user)
    {
        $PDO = get_PDO();

        $request = $PDO->prepare('DELETE FROM Choose WHERE id_user = ?');
        $request->bindValue(1,$user);

        $request->execute();
    }
?>