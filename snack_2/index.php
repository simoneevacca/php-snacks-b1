<!-- Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php

    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];

   


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="get">
        <input type="text" name="name">
        <input type="email" name="mail">
        <input type="number" name="age">
        <button type="submit">invia</button>
        <div>
            <?php
                if (strlen($name) > 3 && str_contains($mail, '@') && str_contains($mail, '.') && is_numeric($age)) {
                    echo "Accesso riuscito";
                    
                } else {
                    echo "Accesso negato";
                }
            ?>
        </div>
    </form>

</body>
</html>