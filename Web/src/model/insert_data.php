<?php
    require_once 'connect_data.php';
    function insertUser($user)
    {
        $PDO = get_PDO();
        extract($user);

        $options = [
            'cost' => 12,
        ];
        $hashpass = password_hash($pa, PASSWORD_BCRYPT, $options);

        $request = $PDO->prepare('INSERT INTO User(name,firstName,age,mail,password,admin) VALUES(:name,:firstName,:age,:mail,:password,:admin)');
        $request->bindValue(":name",$na);
        $request->bindValue(":firstName",$fi);
        $request->bindValue(":age",$da);
        $request->bindValue(":mail",$ma);
        $request->bindValue(":password",$hashpass);
        $request->bindValue(":admin",0);

        $request->execute();
    }

    function insertComposant(array $composant)
    { 
        $PDO = get_PDO();
        
        extract($composant);

        $request = $PDO->prepare('INSERT INTO Composant(reference,power,mark,name,feature,picture,id_type) VALUES(:reference,:power,:mark,:name,:feature,:picture,:id_type)');
        $request->bindValue(":reference",$re);
        $request->bindValue(":power",$po);
        $request->bindValue(":mark",$ma);
        $request->bindValue(":name",$na);
        $request->bindValue(":feature",$fe);
        $request->bindValue(":picture","../image/composant/$fi");
        $request->bindValue(":id_type",$ty);

        $request->execute();
    }

    function insertChooce($reference,$user)
    {
        $PDO = get_PDO();

        $request = $PDO->prepare('INSERT INTO Choose(id_user,id_composant) VALUES(?,?)');
        $request->bindValue(1,$user);
        $request->bindValue(2,$reference);

        $request->execute();
    }

    function changeQuantity($reference,$user,$quantity)
    {
        $PDO = get_PDO();

        $p = $PDO->prepare("UPDATE Choose c SET quantity = ? + 1 WHERE id_composant LIKE ? and id_user LIKE ?");
        $p->bindParam(1,$quantity);
        $p->bindParam(2,$reference);
        $p->bindParam(3,$user);
        $p->execute();
    }
?>