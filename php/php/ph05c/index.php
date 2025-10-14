<?php

    $nombre = 3;
    $titre = "ph05c : table de multiplication";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ph05c</title>
</head>
<body>
    
    <h1><?=$titre?></h1>

    <?php

    function boucle($nombre){
        echo "<h2> Table de multiplication de $nombre </h2>";
        echo "<ul>";
            for ($i=1;$i<=10;$i++) {
                echo "<li>". $nombre . "x" . $i . "=" . $nombre * $i."</li>" ; 
            }
        echo "</ul>";
    }

    boucle(4);
    boucle(9);
    boucle(2);

    ?>
</body>
</html>