<?php

/**
 * Description de CompteEpargne
 * 
 * Compte d'épargne
 *
 * @author jef
 */
class CompteEpargne extends Compte {

  /**
   * Propriétés
   */
  private $taux_interet = 0;

  /**
   * Constructeur
   * @param string $client
   * @param float $solde
   * @param float $taux_interet
   * 
   */
  function __construct($client, $solde = 0,$taux_interet=0) {
    parent::__construct($client, $solde);
    $this->set_taux_interet($taux_interet);
  }

  /**
   * Destructeur
   */
  function __destruct() {
    $this->reponse('Adieu...');
  }

  /**
   * Getter et setter   
   */
  function get_taux_interet() {
    return $this->taux_interet;
  }

  function set_taux_interet($taux_interet) {
    $this->taux_interet = $taux_interet;
  }

  function calculer_interet() {
    $solde = $this->get_solde() + $this->get_solde() * $this->taux_interet;
    $this->set_solde($solde);
  }

  /**
   * Affiche une description du compte
   */
  function afficher() {
    $this->commande("paramètres du compte d'épargne de " . $this->get_client()->get_nom());
    echo '<div>' . PHP_EOL;
    echo "<ul>" . PHP_EOL;
    echo "<li>Devise : " . $this->get_devise() . "</li>" . PHP_EOL;
    echo "<li>Solde : " . $this->get_lib_solde() . "</li>" . PHP_EOL;
    echo "<li>Titulaire : " . $this->get_client()->get_prenom()." ".$this->get_client()->get_nom() . "</li>" . PHP_EOL;
    echo "<li>Taux intérêt : " . $this->get_taux_interet() . "</li>" . PHP_EOL;
    echo "</ul>" . PHP_EOL;
    echo '</div>' . PHP_EOL;
  }

}