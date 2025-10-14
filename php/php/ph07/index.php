<?php 

    $titre = "ph07 : polygone";
    $nombre = 13;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ph07</title>
</head>
<body>

    <h1><?=$titre?></h1>
   
    <?php

        function polygone($nombre){
            if ($nombre == 3){
                $nom = "Triangle";
                return $nom;
            } else if ($nombre == 4){
                $nom = "Quadrilatère";
                return $nom;
            } else if ($nombre == 5){
                $nom = "Pentagone";
                return $nom;
            } else if ($nombre == 6){
                $nom = "Hexagone";
                return $nom;
            } else if ($nombre == 8){
                $nom = "Octogone";
                return $nom;
            } else if ($nombre == 12){
                $nom = "Dodécagone";
                return $nom;
            } else {
                $nom = "???";
                return $nom;
            }
        }    

        echo "Ce polygone est un " . polygone($nombre) . " à $nombre côtés" ;

    ?>
</body>
</html>