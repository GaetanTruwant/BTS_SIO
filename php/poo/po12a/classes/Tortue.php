<?php

class Tortue {
    private $id_tortue;
    private $nom;
    private $surnom;
    private $couleur;
    public $couleurs = ["bleu","orange","violet","rouge","vert","marron","rose","blanc","jaune"];

    function __construct($nom = "???"){
        $this->setNom($nom); 
    }

    function nom_complet(){
        return $this->getNom() . " dit " . $this->getSurnom(); 
    }

    function afficher(){
        ?>
        <ul>
            <li>id_tortue = <?=$this->getId_tortue()?></li>
            <li>nom = <?=$this->getNom()?></li>
            <li>surnom = <?=$this->getSurnom()?></li>
            <li>couleur = <?=$this->getCouleur()?></li>
        </ul>
        <?php
    }

    public function getId_tortue()
    {
        return $this->id_tortue;
    }

    public function setId_tortue($id_tortue)
    {
        $this->id_tortue = $id_tortue;
    } 
    
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getSurnom()
    {
        return $this->surnom;
    }

    public function setSurnom($surnom)
    {
        $this->surnom = $surnom;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function setCouleur($couleur)
    {
        try {
            if(in_array($couleur, $this->couleurs)) {
                $this->couleur = $couleur;
            } else {
                echo "<p class='erreur'>Erreur, la couleur doit être parmi bleu, orange, violet, rouge, vert, marron, rose, blanc, jaune</p>";
                exit;
            }
        } catch(Exception $e) {
            throw new Exception("La couleur $couleur n'est pas valide");
        }
  
    }


}