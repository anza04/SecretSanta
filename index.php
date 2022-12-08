<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benvenuto</title>
    <link rel="stylesheet" href="stile3.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>
<body>

    <?php    
        for ($i = 0; $i < 50; $i++)
            echo "<div class='snowflake'></div>";
    ?>

    <h1>BENVENUTO</h1>
    <button id="accedi" onclick="Accedi()">accedi</button>
    <button id="registrati" onclick="Registrati()">registrati</button>

    <form action="accesso.php" method="post" id="accesso">
        <input type="text" placeholder="username" name="username">
        <input type="text" placeholder="password" name="password">
        <input type="submit" value="accedi">
    </form>

    <form action="registrazione.php" method="post" id="registrazione">
        <input type="text" placeholder="nome" name="nome">
        <input type="text" placeholder="cognome" name="cognome">
        <input type="text" placeholder="username" name="username">
        <input type="text" placeholder="password" name="password">
        <input type="submit" value="registrati">
    </form>

    <?php
        if(strcmp($_GET["msg"],"")!=0)
        {
            echo "<h2>".$_GET["msg"]."</h2>";
        }
    ?>

    <div class="santa"></div>

    <script src="script.js"></script>
</body>
</html>