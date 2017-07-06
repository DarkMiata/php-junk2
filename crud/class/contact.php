<?php

/**
 * Description of contact
 *
 * @author sam
 */

require_once PATH_CLASS . 'Localisation.php';

debugView ("Chargement class contact.php");

class Contact
  {
  private $prenom;
  private $nom;
  private $adresse;
  private $dateNaissance;
  private $numTel;

  // ========================================

  function getPrenom() {
    return $this->prenom;
  }

  function getNom() {
    return $this->nom;
  }

  function getAdresse() {
    return $this->adresse;
  }

  function getDateNaissance() {
    return $this->dateNaissance;
  }

  function getNumTel() {
    return $this->numTel;
  }

  function setPrenom($prenom) {
    $this->prenom = $prenom;
  }

  function setNom($nom) {
    $this->nom = $nom;
  }

  function setAdresse(Localisation $adresse) {
    $this->adresse = $adresse;
  }

  function setDateNaissance($dateNaissance) {
    $this->dateNaissance = $dateNaissance;
  }

  function setNumTel($numTel) {
    $this->numTel = $numTel;
  }

  }

