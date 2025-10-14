<?php

    include "./inc/polygones.inc.php";

    $titre = "ph07c : formulaire";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ph07c</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1><?=$titre?></h1>

    <a href="./index.php">Lien vers le tableau</a>
    <form action="./page2.php" method="POST">
    <label for="nombre">Nombre de côtés</label>
    <input type="text" id="nombre" name="nombre">
    <input type="submit" value="submit">
    </form>

    <?php

        if (isset($_POST["nombre"])){
            $nbcote = $_POST["nombre"];
            foreach ($polygones as $cle => $valeur){
                if ($cle == $nbcote) {
                    echo "Un polygone a $nbcote est un $valeur";
                    return;
                } 
            } echo "Aucun polygone connu avec $nbcote côtés";
        }
    ?>
</body>
</html>