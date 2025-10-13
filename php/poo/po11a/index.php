<?php
require_once "classes/Pizza.php";
?>

<h1>po11a : Pizza</h1>
<h2>Création des pizzas</h2>
<link rel="stylesheet" href="./css/styles.css">
<?php
// Création de la pizza royale
echo "<h3>Pizza royale</h3>";
$pizza1 = new Pizza("ROYALE",["tomate","jambon","champignons","fromage"]);
$pizza1->set_prix(-1); // Erreur, prix négatif
$pizza1->set_prix(5.70);
$pizza1->afficher();
echo "<p>".$pizza1->count_ingredients()." ingrédient(s)</p>";
// Création de la pizza saumon
echo "<h3>Pizza saumon</h3>";
$pizza2 = new Pizza("SAUMON",[]); // Erreur, tableau vide
$pizza2->add_ingredient("crème fraîche");
$pizza2->add_ingredient("saumon");
$pizza2->add_ingredient("fromage");
$pizza2->set_prix(6.30);
$pizza2->afficher();
echo "<p>".$pizza2->count_ingredients()." ingrédient(s)</p>";
// Création de la pizza alsacienne
echo "<h3>Pizza alsacienne</h3>";
$pizza3 = new Pizza("ALSACIENNE",["crème fraîche","oignons","fromage","lardons"]);
$pizza3->set_prix(6.30);
$pizza3->afficher();
echo "<p>".$pizza3->count_ingredients()." ingrédient(s)</p>";
?>