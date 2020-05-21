<?php
    require_once '../model/verif_data.php';

	extract($_POST);
	extract($_GET);

    if(!empty($mail) && isset($mail))
    {
        //echo "mail enter";
        if(filter_var($mail, FILTER_VALIDATE_EMAIL) && verifMailUser($mail))
        {
            //echo "mail check";
            if(verifPasswordUser($password,$mail,$result))
            {
				if(!session_start())
				{
					echo "la session na pas pu démarrer";
				}
                //echo "password check";
                $_SESSION["name"] = $result["name"];
                $_SESSION["firstName"] = $result["firstName"];
                $_SESSION["id"] = $result["id"];
                $_SESSION['admin'] = $result["admin"];
                header("Location: ../view/template.php?value=$value");
            }
        }
	}	
	header("Location: ../view/template.php?value=$value#nav");
?>