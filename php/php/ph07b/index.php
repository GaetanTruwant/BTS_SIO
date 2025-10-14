<?php 
    
    include "./inc/polygones.inc.php";

    $titre = "ph07b : polygone en tableau";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ph07b</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <h1><?=$titre?></h1>
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