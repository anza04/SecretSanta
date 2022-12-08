<?php
    if(file_exists("utenti.txt"))
    {
        $file = file("utenti.txt");
        for($i=0;$i<count($file);$i++)
        {
            $valori=explode(",",$file[$i]);
            if($_POST["username"]==$valori[0] && $_POST["password"]==$valori[1])
            {
                header("Location: http://localhost/scuola/secret%20santa/secretSanta.php?username=$valori[0]");
                exit;
            } 
        }
        header("Location: http://localhost/scuola/secret%20santa/index.php?msg=Utente%20non%20trovato");
    }
    else
    {
        header("Location: http://localhost/scuola/secret%20santa/index.php");
    }
?>