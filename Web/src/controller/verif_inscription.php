<?php
    require_once '../model/insert_data.php';
    require_once '../model/verif_data.php';
    $verif;
    $value;
    $is_correct = true;
    extract($_POST);
    if(!empty($name) && isset($name))
    {
        $value["na"] = htmlspecialchars($name);
        if(verifString($name))
        {
            $verif["n"] = true;
            $value["na"] = htmlspecialchars($name);
        }
        else
        {
            $verif["n"] = false;    
        }
        $is_correct = $is_correct && $verif["n"];
    }
    if(!empty($firstName) && isset($firstName))
    {
        $value["fi"] = htmlspecialchars($firstName);
        if(verifString($firstName))
        {
            $verif["f"] = true;
            $value["fi"] = htmlspecialchars($firstName);           
        }
        else
        {
            $verif["f"] = false;
        }
        
        $is_correct = $is_correct && $verif["f"];
    }
    if(!empty($mail) && isset($mail))
    {
        $value["ma"] = htmlspecialchars($mail);
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
        $value["pa"] = $password;
        if(preg_match("#^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w\d\s:])([^\s]){8,16}$#",$password))
        {
            $verif["p"] = true;
            $value["pa"] = $password;
        }
        else
        {
            $verif["p"] = false;
        }
        
        $is_correct = $is_correct && $verif["p"];
    }
    if(!empty($date) && isset($date))
    {
        $value["da"] = htmlspecialchars($date);
        if(preg_match("#^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$#",$date))
        {
            $verif["d"] = true;
            $value["da"] = htmlspecialchars($date);
        }
        else
        {
            $verif["d"] = false;
        }
        
        $is_correct = $is_correct && $verif["d"];
    }
    extract($verif);
    extract($value);
    if($is_correct)
    {
        insertUser($value);
        session_start();
        $_SESSION["name"] = $na;
        $_SESSION["firstName"] = $fi;
        header("Location: ../view/template.php?value=$value");
    }
    else
    {
        
        header("Location: ../view/form_inscription.php?f=$f&n=$n&m=$m&p=$p&d=$d&fi=$fi&na=$na&ma=$ma&vm=$vm&da=$da&value=$value");
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