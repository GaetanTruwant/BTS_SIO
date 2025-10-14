<?php 

$chaine = "Hello World!";
$titre = "ph02";
$titre_echo= "avec echo";
$titre_raccourci = "en raccourci";
$titre_date = "date en php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titre ?></title>
</head>
<body>
   
    <h1><?=$titre_echo?></h1>
    <?php
    echo "<p>" . $chaine . "</p>";
    ?>

    <h1><?=$titre_raccourci?></h1>
    <p><?= $chaine ?></p>

    <h1><?=$titre_date?></h1>
    <p><?= date('Y-m-d H:i:s') ?> </p>

</body>
</html>