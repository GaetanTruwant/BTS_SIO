<?php
//
// po05a : page d'accueil
//
include('ini.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>po05c : boissons</title>
  <link rel="stylesheet" type="text/css" href="./css/styles.css" />
</head>

<body>
  <h1>po05a : boissons</h1>
    <?php
      // Boisson
      echo "<h2>Description de la boisson :</h2>";
      $boisson = new Boisson("Perrier", 0.75);
      $boisson->set_est_alcoolisee(false);
      $boisson->set_categorie("biere");
      $boisson->set_contenance(-1000);
      $boisson->set_categorie("eau");
      $boisson->afficher();

      // Vin
      $vin = new Vin("Cabernet d'Anjou", 0.75);
      $vin->set_est_alcoolisee(true);
      $vin->set_categorie("vin");
      $vin->set_couleur("rosé");
      $vin->afficher();

      // Jus d'ananas
      $jus = new Jus("Jus d'ananas", 2.5);
      $jus->set_est_alcoolisee(false);
      $jus->set_categorie("jus");
      $jus->set_fruit("ananas");
      $jus->afficher();
    ?>
</body>

</html>