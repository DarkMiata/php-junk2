<?php
define ('PATH_ROOT', $_SERVER['DOCUMENT_ROOT']);
require_once PATH_ROOT.'/php_junk/crud/config/config.php';
?>

<html>
  <head>
    <meta charset="UTF-8">
    <title>CRUDE - index</title>
</head>
  <body>
  <?php
    $form = new FormHtml();

    $form->addTextInput(array('name' => 'Prenom'
      ,'id' => 'prenom'));
    $form->addTextInput(array('name' =>  'Nom'
      ,'id' => 'nom'));
    $form->addTextInput(array('name' =>  'Email'
      ,'id' => 'emailOne'));
    $form->addTextInput(array('name' =>  'Email'
      ,'id' => 'emailTwo'));
    $form->addTextInput(array('name' =>  'Adresse'
      ,'id' => 'adresse'));
    $form->addTextInput(array('name' =>  'Ville'
      ,'id' => 'ville'));
    $form->addTextInput(array('name' =>  'Code Postal'
      ,'id' => 'ville'));
    $form->addTextInput(array('name' =>  'Téléphone'
      ,'id' => 'phone'));
    $form->addButtonValidate(array('name' => 'submit', 'id' => 'submit'));

    $form->actionParams('post', PATH_SUBMIT.'formAdd.php');

    $form->render();

    var_dump($form);
  ?>
  </body>
</html>
