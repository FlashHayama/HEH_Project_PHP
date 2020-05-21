<?php
    require_once '../model/insert_data.php';
    require_once '../model/verif_data.php';
    $verif;
    $value;
    $is_correct = true;
    extract($_POST);

    if(!empty($reference) && isset($reference))
    {
        $value["re"] = htmlspecialchars($reference);
        if(verifReferenceComposant($reference))
        {
            $verif["r"] = true;
            $value["re"] = htmlspecialchars($reference);
        }
        else
        {
            $verif["r"] = false;
        }
        $is_correct = $is_correct && $verif["r"];
    }

    if(!empty($mark) && isset($mark))
    {
        $value["ma"] = htmlspecialchars($mark);
        $verif["m"] = true;
        $value["ma"] = htmlspecialchars($mark);
        $is_correct = $is_correct && $verif["m"];
    }

    if(!empty($name) && isset($name))
    {
        $value["na"] = htmlspecialchars($name);
        $verif["n"] = true;
        $value["na"] = htmlspecialchars($name);
        $is_correct = $is_correct && $verif["n"];
    }

    if(!empty($type) && isset($type))
    {
        switch($type)
        {
            case "Carte mère":
                $value["ty"] = 1;
                $verif["t"] = true;
                break;
            case "Carte graphique":
                $value["ty"] = 2;
                $verif["t"] = true;
                break;
            case "Processeur":
                $value["ty"] = 3;
                $verif["t"] = true;
                break;
            case "Ram":
                $value["ty"] = 4;
                $verif["t"] = true;
                break;
            case "Disque dur":
                $value["ty"] = 5;
                $verif["t"] = true;
                break;
            case "Alimentation":
                $value["ty"] = 6;
                $verif["t"] = true;
                break;
            default: 
                $verif["t"] = false;
                break;
        }
    }
    else
    {
        $verif["t"] = false;
    }
    $is_correct = $is_correct && $verif["t"];

    if(!empty($power) && isset($power))
    {
        $value["po"] = htmlspecialchars($power);
        $power = intval($power);
        if(is_integer($power) && $power > 0)
        {
            $verif["p"] = true;
            $value["po"] = $power;
        }
        else
        {
            $verif["p"] = false;
        }
        $is_correct = $is_correct && $verif["p"];
    }

    if(!empty($feature) && isset($feature))
    {
        $value["fe"] = htmlspecialchars($feature);
        $verif["e"] = true;
        $value["fe"] = htmlspecialchars($feature);
        
        $is_correct = $is_correct && $verif["e"];
    }

    $target_dir = "../image/composant/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $verif["f"] = true;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    /*try
    {
        getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        $verif["f"] = true;
    }
    catch (Exception $e)
    {
        echo "Exception";
        $verif["f"] = false;
    }
    if($check !== false) {
        $verif["f"] = true;
    } else {
        $verif["f"] = false;
    }*/
    // Check if file already exists
    if (file_exists($target_file)) {
        $verif["f"] = false;
    }
    
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        $verif["f"] = false;
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $verif["f"] = false;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if (!$verif["f"] || !$is_correct) {
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $value["fi"] = $_FILES["fileToUpload"]["name"];
            $verif["f"] = true;
        } else {
            $verif["f"] = false;
        }
    }
    $is_correct = $is_correct && $verif["f"];

    extract($value);
    extract($verif);

    if($is_correct)
    {
        insertComposant($value);

        header("Location: ../view/template.php?value=add&c=1");
    }
    else
    {
        header("Location: ../view/template.php?value=add&c=0&re=$re&po=$po&ma=$ma&na=$na&fe=$fe&ty=$ty&r=$r&p=$p&m=$m&n=$n&f=$f&e=$e&t=$t");
    }
?>