<?php

    $titre = "ph06 : parité d'un nombre";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ph06</title>
</head>
<body>

    <h1><?=$titre?></h1>

    <?php

        function calcul($nombre){
            $reste = $nombre % 2; 
            if ($reste == 0) {
                return "$nombre est pair";
            } else {
                return "$nombre est impair";
            }
        }

        echo calcul(12);

    ?>
</body>
</html>