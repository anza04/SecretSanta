<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret Santa</title>
    <link rel="stylesheet" href="secre_style.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php    
        for ($i = 0; $i < 50; $i++)
            echo "<div class='snowflake'></div>";
    ?>
    <?php
        echo "<h2>Ciao ".$_GET["username"]."!</h2>";

        if(file_exists("accoppiamenti.txt"))
        {
            $file = file("accoppiamenti.txt");
            $trovato=0;
            $j=0;
            while($j<count($file) && $trovato == 0)
            {
                $riga = explode(',',$file[$j]);
                if(strcmp(trim($riga[0]), trim($_GET["username"]))==0)
                {
                    echo "<h3>Sei il Secret Santa di ".$riga[1]."!!!</h3>";
                    $trovato = 1;
                }
                $j++;
            }
        }
        else
        {
            $file = file("utenti.txt");
            echo "<h3>Mancano solo ".(10-count($file))." persone all'estrazione casuale</h3>";
        }
    ?>
    <div class="santa"></div>
</body>
</html>