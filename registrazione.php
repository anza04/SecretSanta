<?php

    if(file_exists("utenti.txt"))
    {
        Inserisci();
    }
    else
    {
        fopen("utenti.txt", "w+");
        Inserisci();
    }

    function Inserisci()
    {
        $stringa = $_POST["username"].",".$_POST["password"].",".$_POST["nome"].",".$_POST["cognome"].";".PHP_EOL;
        file_put_contents("utenti.txt", $stringa, FILE_APPEND);
    }

    function Controllo($username)
    {
        $file = file("utenti.txt");
        $res = 0;
        for($i=0;$i<count($file);$i++)
        {
            $valori = explode(",", $file[$i]);
            if(strcmp(trim($valori[0]),trim($username)==0))
            {
                $res = 1;
            }
        }
        return $res;
    }

    header("Location: index.php");
    exit;
?>