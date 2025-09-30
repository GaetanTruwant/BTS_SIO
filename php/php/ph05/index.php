<?php

    $nombre = 3;
    $titre = "ph05 : table de multiplication";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ph05</title>
</head>
<body>
    
    <h1><?=$titre?></h1>

    <?php
        echo "<ul>";
            echo "<li>" . $nombre . " x 1 = " . $nombre*1 . "</li>";
            echo "<li>" . $nombre . " x 2 = " . $nombre*2 . "</li>";
            echo "<li>" . $nombre . " x 3 = " . $nombre*3 . "</li>";
            echo "<li>" . $nombre . " x 4 = " . $nombre*4 . "</li>";
            echo "<li>" . $nombre . " x 5 = " . $nombre*5 . "</li>";
            echo "<li>" . $nombre . " x 6 = " . $nombre*6 . "</li>";
            echo "<li>" . $nombre . " x 7 = " . $nombre*7 . "</li>";
            echo "<li>" . $nombre . " x 8 = " . $nombre*8 . "</li>";
            echo "<li>" . $nombre . " x 9 = " . $nombre*9 . "</li>";
            echo "<li>" . $nombre . " x 10 = " . $nombre*10 . "</li>";
        echo "</ul>";
    ?>

</body>
</html>