<?php

class Voiture {

    private $marque = "???";
    private $modele = "???";
    private $nom = "???";
    private $compteur = 0;
    private $aDemarre = false;

    // Constructeur
    public function __construct($nom) {
        $this->marque = "???";
        $this->modele = "???";
        $this->nom = $nom;
        $this->compteur = 0;
        $this->aDemarre = false;
    }

    // Destructeur
    function __destruct(){
        echo "<p>Adieu monde cruel !</p>";
    }

    // Getter et Setter marque
    function get_marque(){
        return $this -> marque;
    }

    function set_marque($marque){
        if($marque == "Renaud" || $marque == "Dacia"){
            $this->marque=$marque;
        } else {
            echo "Erreur : Marque non conforme";
        }
    }

    // Getter et Setter modèle
    function get_modele(){
        return $this -> modele;
    }

    function set_modele($modele){
        $this -> modele = $modele;
    }

    // Getter et Setter nom
    function get_nom(){
        return $this -> nom;
    }

    function set_nom($nom){
        $this -> nom = $nom;
    }

    // Getter et Setter compteur 
    function get_compteur(){
        return $this -> compteur;
    }

    function set_compteur($compteur){
        $this -> compteur = $compteur;
    }

    // Getter et Setter aDemarre
    function get_aDemarre(){
        return $this -> aDemarre;
    }

    function get_lib_aDemarre() {
        if ($this->aDemarre) {
            return "Oui";
        } else {
            return "Non";
        }
    }

    function set_aDemarre($aDemarre) {
        $this->aDemarre = $aDemarre;
    }

    // Démarrer
    function demarrer() {
        $this->aDemarre = true;
        echo "<p>demarrer : la voiture a démarré</p>";
    }

    // Avancer de X km
    function avancer($km) {
        if ($this->aDemarre) {
            $km = abs($km);
            $this->compteur = $this->compteur + $km;
            echo "<p>avancer : la voiture a avancé de " . $km . " km(s)</p>";
        } else {
            echo "<p>Erreur : la voiture doit démarrer avant de pouvoir avancer !</p>";
        }
    }

    // Arrêter
    function arreter() {
        $this->aDemarre = false;
        echo "<p>arreter : la voiture est arrétée</p>";
    }

    // Afficher
    function afficher() {
        echo "<p>--- Description de " . $this->nom . " ---</p>";
        echo "<ul>";
        echo "<li>Marque      : " . $this->marque . "</li>";
        echo "<li>Modèle      : " . $this->modele . "</li>";
        echo "<li>Nom         : " . $this->nom . "</li>";
        echo "<li>Compteur    : " . $this->compteur . "</li>";
        echo "<li>a démarré ? : " . $this->aDemarre . "</li>";  // Affiche 1 si true et rien si false
        echo "</ul>";
    }

}
