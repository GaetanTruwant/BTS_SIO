<?php

/**
 * Description de Client
 * 
 * Client titulaire d'un compte
 *
 * @author jef
 */
class Client {

  /**
   * Propriétés
   */
  private $nom = "???";
  private $prenom = "???";
  private $titre = "???";

  /**
   * Constructeur
   * @param string $nom
   * @param string $prenom
   * @param string $titre
   */
  function __construct($nom,$prenom,$titre) {
    $this->commande("Créer le client " . $titre." ".$prenom. " ".$nom);
    $this->set_nom($nom);
    $this->set_prenom($prenom);
    $this->set_titre($titre);
    $this->reponse('salut, je suis le client ' . $this->get_titre()." ".$this->get_prenom()." ".$this->get_nom());
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
  function get_nom() {
    return $this->nom;
  }

  function set_nom($nom) {
    $this->nom = $nom;
  }

  function get_prenom() {
    return $this->prenom;
  }

  function set_prenom($prenom) {
    $this->prenom = $prenom;
  }

  function get_titre() {
    return $this->titre;
  }

  function set_titre($titre) {
    $this->titre = $titre;
  }

   /**
   * Affiche une réponse
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
    echo("paramètres du client " . $this->get_nom());
    echo '<div>' . PHP_EOL;
    echo "<ul>" . PHP_EOL;
    echo "<li>Nom : " . $this->get_nom() . "</li>" . PHP_EOL;
    echo "<li>Prénom : " . $this->get_prenom() . "</li>" . PHP_EOL;
    echo "<li>Titre : " . $this->get_titre() . "</li>" . PHP_EOL;
    echo "</ul>" . PHP_EOL;
    echo '</div>' . PHP_EOL;
  }

}
