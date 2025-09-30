<?php

    $titre = "ph05c : table de multiplication";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ph05d</title>
</head>
<body>
    
    <h1><?=$titre?></h1>

    <form action="index.php" method="POST">
        <label for="nombre">Nombre</label><br>
        <input type="text" id="nombre" name="nombre">
        <input type="submit">
    </form>

    <?php
       
    if (isset($_POST["nombre"])){
        $nombre = $_POST["nombre"];
        boucle($nombre);
    }
        
    function boucle($nombre){
        echo "<h2> Table de multiplication de " . $nombre . "</h2>";
        echo "<ul>";
            for ($i=1;$i<=10;$i++) {
                echo "<li>". $nombre . "x" . $i . "=" . $nombre * $i ."</li>" ; 
            }
        echo "</ul>";
    }
    
    ?>
</body>
</html>