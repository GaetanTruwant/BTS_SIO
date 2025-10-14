<?php

class Client {
    private $nom = "";
    private $prenom = "";
    private $titre = ""; 

    function __construct($nom, $prenom, $titre){
        $this->commande("Créer le client $titre $prenom $nom");
        $this->set_nom($nom);
        $this->set_prenom($prenom);
        $this->set_titre($titre);
        $this->reponse("Je suis le client" . $this->get_titre() . " " . $this->get_prenom() . " " . $this->get_nom());
    }
    
    public function get_nom()
    {
        return $this->nom;
    }

    public function set_nom($nom)
    {
        $this->nom = $nom;
    }

    public function get_prenom()
    {
        return $this->prenom;
    }

    public function set_prenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function get_titre()
    {
        return $this->titre;
    }

    public function set_titre($titre)
    {
        $this->titre = $titre;
    }

    function commande($message) {
        echo '<p class="commande">Commande : ' . $message . '</p>' . PHP_EOL;
    }

    function reponse($message) {
        echo '<p class="reponse">Reponse : ' . $message . '</p>' . PHP_EOL;
    } 

    function erreur($message) {
        echo '<p class="erreur">Erreur : ' . $message . '</p>' . PHP_EOL;
    }

    function afficher(){
        
    }

    function __destruct(){
        $this->reponse("Adieu...");
    }

}

?>