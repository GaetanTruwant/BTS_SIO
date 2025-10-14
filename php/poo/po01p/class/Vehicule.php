<?php

abstract class Vehicule {

    private $marque = "???";
    private $modele = "???";
    private $nom = "???";
    private $compteur = 0;
    private $etat = 0;
    private $type = "Vehicule";

    private static $nb = 0;

    const DEMARREE=1;
    const ARRETEE=0;

    // Constructeur
    public function __construct($nom) {
        $this->set_marque("Renaud");
        $this->set_modele("???");
        $this->nom = $nom;
        $this->compteur = 0;
        $this->etat = self::ARRETEE;
        $this->type = "Vehicule";
        self::$nb++;
    }

    // Destructeur
    function __destruct(){
        echo "<p>Adieu monde cruel !</p>";
    }

    // Getter nombre
    static function get_nb() {
        return self::$nb;
    }
    // Getter / Setter type
    function get_type(){
        return $this->type;
    }

    function set_type($type){
        $this->type = $type;
    }

    // Getter et Setter marque
    function get_marque(){
        return $this -> marque;
    }

    function set_marque($marque){
        if($marque == "Renaud" || $marque == "Dacia"){
            $this->marque=$marque;
        } else {
            throw new Exception("Erreur : Marque non conforme");
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

    // Getter et Setter etat
    function get_etat(){
        return $this -> etat;
    }

    function get_lib_etat() {
        if ($this->etat==self::DEMARREE) {
            return "Oui";
        } else {
            return "Non";
        }
    }

    function set_etat($bool) {
        if ($bool){
            $this->etat = self::DEMARREE;
        } else {
            $this->etat = self::ARRETEE;
        }
    }

    // Démarrer
    function demarrer() {
        $this->etat = self::DEMARREE;
        Html::e("demarrer : la voiture a démarré");
    }

    // Avancer de X km
    function avancer($km) {
        if ($this->etat == self::DEMARREE) {
            $km = abs($km);
            $this->compteur = $this->compteur + $km;
            Html::e("avancer : la voiture a avancé de " . $km . " km(s)");
        } else {
            throw new Exception("Erreur : la voiture doit démarrer avant de pouvoir avancer !");
        }
    }

    // Arrêter
    function arreter() {
        $this->etat = self::ARRETEE;
        Html::e("arreter : la voiture est arrétée");
    }

    // Afficher
    abstract function afficher();

}

?>