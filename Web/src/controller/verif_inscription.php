<?php
    require_once '../model/insert_data.php';
    require_once '../model/verif_data.php';
    $verif;
    $val;
    $is_correct = true;
    extract($_POST);
    if(!empty($name) && isset($name))
    {
        $val["na"] = htmlspecialchars($name);
        if(verifString($name))
        {
            $verif["n"] = true;
            $val["na"] = htmlspecialchars($name);
        }
        else
        {
            $verif["n"] = false;    
        }
        $is_correct = $is_correct && $verif["n"];
    }
    if(!empty($firstName) && isset($firstName))
    {
        $val["fi"] = htmlspecialchars($firstName);
        if(verifString($firstName))
        {
            $verif["f"] = true;
            $val["fi"] = htmlspecialchars($firstName);           
        }
        else
        {
            $verif["f"] = false;
        }
        
        $is_correct = $is_correct && $verif["f"];
    }
    if(!empty($mail) && isset($mail))
    {
        $val["ma"] = htmlspecialchars($mail);
        if(filter_var($mail, FILTER_VALIDATE_EMAIL))
        {
            if(!verifMailUser($mail))
            {
                $verif["m"] = true;              
            }
            else
            { 
                $verif["vm"] = 1;
            }
        }
        else
        {
            $verif["m"] = false;
            $verif["vm"] = 0;
        }
        
        $is_correct = $is_correct && $verif["m"];
    }
    if(!empty($password) && isset($password))
    {
        $val["pa"] = $password;
        if(preg_match("#^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w\d\s:])([^\s]){8,100}$#",$password))
        {
            $verif["p"] = true;
            $val["pa"] = $password;
        }
        else
        {
            $verif["p"] = false;
        }
        
        $is_correct = $is_correct && $verif["p"];
    }
    if(!empty($date) && isset($date))
    {
        $val["da"] = htmlspecialchars($date);
        if(preg_match("#^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$#",$date))
        {
            $verif["d"] = true;
            $val["da"] = htmlspecialchars($date);
        }
        else
        {
            $verif["d"] = false;
        }
        
        $is_correct = $is_correct && $verif["d"];
    }
    extract($verif);
    extract($val);
    if($is_correct)
    {
        insertUser($val);
        verifPasswordUser($password,$mail,$result);
        extract($result);
        session_start();
        $_SESSION["name"] = $name;
        $_SESSION["firstName"] = $firstName;
        $_SESSION["id"] = $id;
        $_SESSION["admin"] = 0;
        header("Location: ../view/template.php?value=home");
    }
    else
    {
        
        header("Location: ../view/form_inscription.php?f=$f&n=$n&m=$m&p=$p&d=$d&fi=$fi&na=$na&ma=$ma&vm=$vm&da=$da");
    }
    
    function verifString(&$string) : bool
    {
        if(strlen($string) <= 15)
        {
            $string = trim($string);
            $string = preg_replace('/\s/','', $string);
            $string = strtolower($string);
            return true;
        }
        else
            return false;
    }
?>