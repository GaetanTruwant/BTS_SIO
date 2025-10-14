<?php 

class Boisson{
    private $nom = "";
    private $contenance = "";
    private $categorie = ["vin", "eau", "jus"];
    private $est_alcoolisee = true;

    function __construct($nom, $contenance){
        $this->nom = $nom;
        $this->contenance = $contenance;
        $this->est_alcoolisee = false;
    }

    function commande($message) {
        echo '<p class="commande">Commande : '.$message.'</p>'.PHP_EOL;
    }
    function reponse($message) {
        echo '<p class="reponse">Reponse : '.$message.'</p>'.PHP_EOL;
    }
    function erreur($message) {
        echo '<p class="erreur">Erreur : '.$message.'</p>'.PHP_EOL;
    }

    function get_categorie(){
        return $this->categorie;
    }

    function set_categorie($categorie){
        if($categorie=="vin"||$categorie=="eau"||$categorie=="jus"){
            $this->categorie = $categorie;
        } else {
            $this->erreur("Erreur, la catégorie doit être vin, eau ou jus");
        }
    }

    function get_contenance(){
        return $this->contenance;
    }

    function set_contenance($contenance){
        if($contenance>0){
            $this->contenance = $contenance;
        } else {
            $this->erreur("Erreur, la contenance doit être supérieure à 0");
        }
    }

    function get_lib_contenance() {
        return $this->contenance . 'L';
    }

    public function get_est_alcoolisee(){
        return $this->est_alcoolisee;
    }

    public function set_est_alcoolisee($est_alcoolisee){
        $this->est_alcoolisee = $est_alcoolisee;
    }

    function get_lib_est_alcoolisee() {
        return $this->est_alcoolisee ? 'oui' : 'non';
    }

    public function afficher() {
        echo '<p>Nom :' . $this->nom . '</p>';
        echo '<p>Contenance : ' . $this->get_lib_contenance() . '</p>';
        echo '<p>Catégorie : ' . $this->categorie . '</p>';
        echo '<p>Alcoolisée : ' . $this->get_lib_est_alcoolisee() . '</p>';
    }

    function __destruct(){
        echo "C'est fini les boissons !";
    }
}


?>