<?php
class Compte {
    private $devise = "";
    private $solde = 0;
    private $titulaire = "";
    private $dernier_credit = 0;
    private $dernier_debit = 0;

    function commande($message) {
        echo '<p class="commande">Commande : '.$message.'</p>'.PHP_EOL;
    }
    function reponse($message) {
        echo '<p class="reponse">Reponse : '.$message.'</p>'.PHP_EOL;
    }
    function erreur($message) {
        echo '<p class="erreur">Erreur : '.$message.'</p>'.PHP_EOL;
    }

    public function __construct($titulaire, $solde = 0, $devise = "€"){
        $this->titulaire = $titulaire;
        $this->solde = $solde;
        $this->devise = $devise;
        $this->commande("Créer le compte de $this->titulaire");
        $this->reponse("Je suis le compte de $this->titulaire");
    }

    public function get_devise()
    {
        return $this->devise;
    }

    public function set_devise($devise)
    {
        if($devise=="€"||$devise=="$"){
            $this->devise = $devise;
        } else {
            $this->erreur("devise doit être € ou $ : " . $devise);
        }
    }

    public function set_solde($solde)
    {
        if($solde>=0){
            $this->solde = $solde;
        } else{
            $this->erreur("le solde doit être égal ou supérieur à 0 : " . $this->get_solde());
        }
    }

    public function get_solde()
    {
        return $this->solde;
    }

    public function get_lib_solde(){
        return $this->solde . " " . $this->devise;
    }

    public function get_titulaire()
    {
        return $this->titulaire;
    }

    public function set_titulaire($titulaire)
    {
        $this->titulaire = $titulaire;
    }

    public function crediter($montant_crediter){
        $montant_crediter = abs($montant_crediter);
        $this->solde += $montant_crediter;
        $this->dernier_credit = $montant_crediter;
        $this->commande("créditer $this->dernier_credit $this->devise");
    }

    public function debiter($montant_debiter){
        $montant_debiter = abs($montant_debiter);
        $this->solde -= $montant_debiter;
        $this->dernier_debit = $montant_debiter;
        $this->commande("débiter $this->dernier_debit $this->devise");
        if($this->solde<0){
            $this->erreur("le solde doit être égal ou supérieur à 0 : " . $this->get_solde());
        } else {}
    }

    public function __destruct(){
        $this->reponse("Adieu...");
    }

    public function afficher() {
        $this->commande("paramètres du compte de $this->titulaire");
        echo "<ul>";
        echo "<li><strong>Devise :</strong> " . $this->devise . "</li>";
        echo "<li><strong>Solde :</strong> " . $this->get_lib_solde() . "</li>";
        echo "<li><strong>Titulaire :</strong> " . $this->titulaire . "</li>";
        echo "</ul>";
    }
}    

?>