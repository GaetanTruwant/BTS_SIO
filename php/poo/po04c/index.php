<?php
function my_autoloader($classe){
    include "./classes/".$classe.".php";
}
spl_autoload_register("my_autoloader");
?>

<link rel="stylesheet" href="./css/styles.css">

<h1>po04c : comptes bancaires</h1>

<?php

$client1 = New Client("Gates","Bill","Mr");


?>