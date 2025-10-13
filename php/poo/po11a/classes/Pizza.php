<?php

class Pizza{
    private $nom = "";
    private $prix = 0;
    private $ingredients = [];

    function __construct($nom, $ingredients=[]){
        $this->nom=$nom;
        $this->set_ingredients($ingredients);
    }

    function set_nom($nom){
        $this->nom=$nom;
    }

    function get_nom(){
        return $this->nom;
    }

    function set_prix($prix){
        if($prix>=0){
            $this->prix=$prix;
        } else{
            echo "Erreur : Le prix doit être égal ou supérieur à 0";
        }
    }
    
    function get_prix(){
        return $this->prix;
    }

    function set_ingredients($ingredients=[]){
        if(count($ingredients)> 0){
            $this->ingredients=$ingredients;
        } elseif(empty($ingredients)) {
            echo "Erreur : Vous devez insérer des ingrédients";
        }
    }
    
    function get_ingredients(){
        return $this->ingredients;
    }

    function add_ingredient($ingredient){
        if($ingredient){
            $this->ingredients[] = $ingredient;
        }
    }

    function count_ingredients(){
        return count($this->ingredients);
    }

    function afficher() {
        echo "<p>Pizza : $this->nom</p>";
        echo "<p>Prix : $this->prix €</p>";
        echo "<p>Ingrédients : " . implode(", ", $this->ingredients) . "</p>";
        echo "Nombre d'ingrédients : " . $this->count_ingredients() . "<br>";
    }

    function __destruct(){
        echo "<p>Fini la pizza $this->nom.</p>";
    }
}

?>