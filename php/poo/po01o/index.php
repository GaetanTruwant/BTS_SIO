<?php
// include "class/Voiture.php";
function my_autoloader($classe){
    include "class/".$classe.".php";
}
spl_autoload_register("my_autoloader");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>po01o</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        $voiture1 = new Voiture("voiture1");
        $voiture1->demarrer();
        $voiture1->avancer(100);
        $voiture1->afficher();
        echo "</ul>"; // Pour éviter le bug de afficher() dans la classe mère
        $camion1 = new Camion("camion1");
        $camion1->charger(5000);
        $camion1->demarrer();
        $camion1->avancer(300);
        $camion1->afficher();
        echo Vehicule::get_nb() . " véhicule(s) instancié(s)";
        ?>
    </body>
</html>
