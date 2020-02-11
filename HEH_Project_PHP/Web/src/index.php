<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="" content="">
    <link rel="stylesheet" href="">
</head>
<body>
    <?php
        $flag = true;
        $tab_errors = array();

        if(isset($_POST['valid']))
        {
            $flag = false;
            if(isset($_POST['nom']))
            {
                $tab_errors['nom'] = true;
            }
            if(isset($_POST['prenom']))
            {
                $tab_errors['prenom'] = true;
            }
            if(isset($_POST['CP']))
            {
                $tab_errors['CP'] = true;
            }

            
        }
    ?>

    <form method="post" action="index.php">
        nom :    <input type="text" name="nom"><br>
        prenom : <input type="text" name="prenom"><br>
        CP :     <input type="text" name="CP"><br>
        <input type="submit" name="valid">
    </form>
</body>