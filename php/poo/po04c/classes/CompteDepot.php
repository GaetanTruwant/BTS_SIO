<?php

/**
 * Description de CompteDepot
 * 
 * Compte de dépôt
 *
 * @author jef
 */
class CompteDepot extends Compte {

  /**
   * Propriétés
   */
  private $possede_chequier = false;
  private $possede_cb = false;

  /**
   * Constructeur
   * @param Client $client
   * @param float $solde
   * @param float $possede_chequier
   * @param float $possede_cb
   * 
   */
  function __construct($client, $solde = 0,$possede_chequier=false,$possede_cb=false) {
    parent::__construct($client, $solde);
    $this->set_possede_chequier($possede_chequier);
    $this->set_possede_cb($possede_cb);
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
  function get_possede_chequier() {
    return $this->possede_chequier;
  }

  function set_possede_chequier($possede_chequier) {
    $this->possede_chequier = $possede_chequier;
  }

  function get_possede_cb() {
    return $this->possede_cb;
  }

  function set_possede_cb($possede_cb) {
    $this->possede_cb = $possede_cb;
  }

  /**
   * Affiche une description du compte
   */
  function afficher() {
    $this->commande("paramètres du compte de dépôt de " . $this->get_client()->get_nom());
    echo '<div>' . PHP_EOL;
    echo "<ul>" . PHP_EOL;
    echo "<li>Devise : " . $this->get_devise() . "</li>" . PHP_EOL;
    echo "<li>Solde : " . $this->get_lib_solde() . "</li>" . PHP_EOL;
    echo "<li>Titulaire : " . $this->get_client()->get_prenom()." ".$this->get_client()->get_nom() . "</li>" . PHP_EOL;
    echo "<li>Chéquier ? : " . $this->get_possede_chequier() . "</li>" . PHP_EOL;
    echo "<li>CB ? : " . $this->get_possede_cb() . "</li>" . PHP_EOL;
    echo "</ul>" . PHP_EOL;
    echo '</div>' . PHP_EOL;
  }

}