<?php

    $nombre = 3;
    $titre = "ph05b : table de multiplication";
    $titre_for = "Table de multiplication avec une boucle for";
    $titre_while = "Table de multiplication avec une boucle while";
    $titre_do_while = "Table de multiplication avec une boucle do..while";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ph05b</title>
</head>
<body>
    
    <h1><?=$titre?></h1>

    <h2><?=$titre_for?></h2>

    <?php
        echo "<ul>";
            for ($i=1;$i<=10;$i++) {
                echo "<li>". $nombre . "x" . $i . "=" . $nombre * $i."</li>" ; 
            }
        echo "</ul>";
    ?>

    <h2><?=$titre_while?></h2>

    <?php
        $i = 1;

        echo "<ul>";
            while($i<=10){
                echo "<li>". $nombre . "x" . $i . "=" . $nombre * $i."</li>" ; 
                $i++;
            }
        echo "</ul>";
    ?>

    <h2><?=$titre_do_while?></h2>

    <?php
        $i = 1;
        echo "<ul>";
            do{
                echo "<li>". $nombre . "x" . $i . "=" . $nombre * $i."</li>" ; 
                $i++;
            }
            while($i<=10);
    ?>


</body>
</html>