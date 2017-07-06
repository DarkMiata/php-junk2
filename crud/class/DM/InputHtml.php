<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InputHtml
 *
 * @author sam
 */
class InputHtml
  {

  private $type;
  private $id;
  private $name;
  private $placeholder;
  private $class;
  private $required;

  // ========================================

  function getType() {
    return $this->type;
  }

  function getId() {
    return $this->id;
  }

  function getName() {
    return $this->name;
  }

  function getPlaceholder() {
    return $this->placeholder;
  }

  function getClass() {
    return $this->class;
  }

  function getRequired() {
    return $this->required;
  }

  // ------------------------

  function setType($type) {
    $this->type = $type;
  }

  function setId($id) {
    $this->id = $id;
  }

  function setName($name) {
    $this->name = $name;
  }

  function setPlaceholder($placeholder) {
    $this->placeholder = $placeholder;
  }

  function setClass($class) {
    $this->class = $class;
  }

  function setRequired($required) {
    $this->required = $required;
  }

  // ------------------------

  function __construct(array $values) {
    // param obligatoire
    if (isset($values['name'])) {
      $this->setName($values['name']);
    }
    else {
      throw new Exception("le param Name n'est pas défini");
    }

    if (isset($values['type'])) {
      $this->setType($values['type']);
    }
    else {
      throw new Exception("le param Type n'est pas défini");
    }

    // params optionnels
    if (isset($values['id'])) {
      $this->setId($values['id']);
    }
    else {
      $this->setId('');
    }

    if (isset($values['class'])) {
      $this->setClass($values['class']);
    }
    else {
      $this->setClass('');
    }

    if (isset($values['placeholder'])) {
      $this->setPlaceholder($values['placeholder']);
    }
    else {
      $this->setPlaceholder('');
    }

    if (isset($values['required'])) {
      $this->setRequired($values['required']);
    }
    else {
      $this->setRequired('');
    }
  }

// ========================================
// ========================================

  function hydrate(array $values) {
    // param obligatoire
    if (isset($values['name'])) {
      $this->setName($values['name']);
    }
    else {
      throw new Exception("le param Name n'est pas défini");
    }

    if (isset($values['type'])) {
      $this->setName($values['type']);
    }
    else {
      throw new Exception("le param Type n'est pas défini");
    }

    // params optionnels
    if (isset($values['id'])) {
      $this->setId($id);
    }
    else {
      $this->setId('');
    }

    if (isset($values['class'])) {
      $this->setClass($values['class']);
    }
    else {
      $this->setClass('');
    }

    if (isset($values['placeholder'])) {
      $this->setPlaceholder($values['placeholder']);
    }
    else {
      $this->setPlaceholder('');
    }

    if (isset($values['required'])) {
      $this->setRequired($values['required']);
    }
    else {
      $this->setRequired('');
    }
  }

  }
