<?php
//
// po04c : client
//
include('init.php');
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <title>po04c : client</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
  </head>
  <body>
    <h1>po04c : client</h1>
    <?php
    // Compte de dépôt
    $client1 = new Client("Gates","Bill","Mr");
    $compte1 = new CompteDepot($client1,500,true,true);
    $compte1->afficher();
    $compte1->crediter(100);
    $compte1->afficher();
    // Destruction
    $compte1 = NULL;
    $compte2 = NULL;
    ?>
  </body>
</html>