<?php
function my_autoloader($classe){
    include "./classes/".$classe.".php";
}
spl_autoload_register("my_autoloader");
?>

<link rel="stylesheet" href="./css/styles.css">

<h1>po04 : comptes bancaires</h1>

<?php



// Compte de dépôt
$compte1 = new CompteDepot("Bill Gates",500,"€",true,true);
$compte1->afficher();
$compte1->crediter(100);
$compte1->afficher();
// Compte d'épargne
$compte2 = new CompteEpargne("Donald Trump",2000,0.1);
$compte2->afficher();
$compte2->calculer_interet(); // + 200€
$compte2->afficher();
// Destruction
$compte1 = NULL;
$compte2 = NULL;

?>