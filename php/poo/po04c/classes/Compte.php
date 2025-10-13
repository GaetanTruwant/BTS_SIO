<?php

/**
 * Description de Compte
 * 
 * Compte bancaire
 *
 * @author jef
 */
class Compte {

  /**
   * Propriétés
   */
  private $devise = "?";
  private $solde = 0;
  private $client = null;

  /**
   * Constructeur
   * @param Client $client
   * @param float $solde
   */
  function __construct($client, $solde = 0) {
    $this->commande("Créer le compte de " . $client->get_nom());
    $this->set_client($client);
    $this->set_solde($solde);
    $this->set_devise("€");
    $this->reponse('salut, je suis le compte de ' . $this->client->get_nom());
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
  function get_devise() {
    return $this->devise;
  }

  function set_devise($devise) {
    if ($devise == "€" || $devise == "$") {
      $this->devise = $devise;
    } else {
      $this->erreur("la devise doit être $ ou € : " . $devise);
    }
  }

  function get_solde() {
    return $this->solde;
  }

  function set_solde($solde) {
    if ($solde >= 0) {
      $this->solde = $solde;
    } else {
      $this->erreur("Erreur : le solde doit être >=0 : " . $solde. $this->get_devise());
    }
  }

  /**
   * Retourne le solde suivi de la devise
   * @return string
   */
  function get_lib_solde() {
    return $this->solde . " " . $this->devise;
  }

  function get_client() {
    return $this->client;
  }

  function set_client($client) {
    $this->client = $client;
  }

  /**
   * Crédite le compte
   * @param float $montant
   */
  function crediter($montant) {
    $this->commande("créditer " . $montant . $this->get_devise());
    $montant = abs($montant);
    $nouveau_solde = $this->get_solde() + $montant;
    $this->set_solde($nouveau_solde);
  }

  /**
   * Débite le compte
   * @param type $montant
   */
  function debiter($montant) {
    $this->commande("debiter " . $montant . $this->get_devise());
    $montant = abs($montant);
    $nouveau_solde = $this->get_solde() - $montant;
    $this->set_solde($nouveau_solde);
  }

  /**
   * Affiche une commande
   * @param string $message
   */
  function commande($message) {
    echo '<p class="commande">Commande : ' . $message . '</p>' . PHP_EOL;
  }

  /**
   * Affiche une réponse
   * @param string $message
   */
  function reponse($message) {
    echo '<p class="reponse">Reponse : ' . $message . '</p>' . PHP_EOL;
  }

  /**
   * Affiche un message d'erreur
   * @param type $message
   */
  function erreur($message) {
    echo '<p class="erreur">Erreur : ' . $message . '</p>' . PHP_EOL;
  }

  /**
   * Affiche une description du compte
   */
  function afficher() {
    $this->commande("paramètres du compte de " . $this->get_client()->get_nom());
    echo '<div>' . PHP_EOL;
    echo "<ul>" . PHP_EOL;
    echo "<li>Devise : " . $this->get_devise() . "</li>" . PHP_EOL;
    echo "<li>Solde : " . $this->get_lib_solde() . "</li>" . PHP_EOL;
    echo "<li>Titulaire : " . $this->get_client()->get_prenom()." ".$this->get_client()->get_nom() . "</li>" . PHP_EOL;
    echo "</ul>" . PHP_EOL;
    echo '</div>' . PHP_EOL;
  }

}
