<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

debugView ("Chargement class localisation.php");;

/**
 * Description of adresse
 *
 * @author sam
 */
class Localisation {

  private $adresse_rue;
  private $code_postal;
  private $ville;
  private $pays;

  function getAdresse_rue() {
    return $this->adresse_rue;
  }

  function getCode_postal() {
    return $this->code_postal;
  }

  function getVille() {
    return $this->ville;
  }

  function getPays() {
    return $this->pays;
  }

  function setAdresse_rue($adresse_rue) {
    $this->adresse_rue = $adresse_rue;
  }

  function setCode_postal($code_postal) {
    $this->code_postal = $code_postal;
  }

  function setVille($ville) {
    $this->ville = $ville;
  }

  function setPays($pays) {
    $this->pays = $pays;
  }


}
