<?php 
    
    include "./inc/polygones.inc.php";

    $titre = "ph07c : polygone en formulaire";

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

    <a href="./page2.php">Lien vers page2</a> <br><br>
   

    <table>
        <tr>
            <th>Nb côtés</th> 
            <th>Nom</th>
        </tr>
    <?php
    
        foreach ($polygones as $cle => $valeur){
            echo 
            "<tr>
            <td>$cle</td>
            <td>$valeur</td>
            </tr>";
        }

    ?>
    </table>
</body>
</html>