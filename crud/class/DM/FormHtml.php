<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FormHtml
 *
 * @author sam
 */
require_once 'InputHtml.php';

class FormHtml
  {

  private $method;
  private $actionLink;
  private $inputHtmlList;
  private $actionState = false;

  // ========================================

  private function getInputHtmlList() {
    return $this->inputHtmlList;
  }

  private function getMethod() {
    return $this->method;
  }

  private function getActionLink() {
    return $this->actionLink;
  }

  private function getActionState() {
    return $this->actionState;
  }

    // ------------------------

  private function setInputHtmlList($inputHtml) {
    $this->inputHtmlList[] = $inputHtml;
  }

  private function setMethod($method) {
    if (($method !== 'post') && ($method !== 'get')) {
      throw new Exception("FormHtml class - setMethod - post ou get attendu dans methode actionParams");
      exit();
    }

    $this->method = $method;
  }

  private function setActionLink($actionLink) {
    $this->actionLink = $actionLink;
  }

  private function setActionState($actionState) {
    $this->actionState = $actionState;
  }

  // ------------------------

  // ========================================

  public function actionParams($method, $actionLink) {

//    switch ($method) {
//      case 'POST':
//        $this->setMethod('post');
//        break;
//
//      case 'GET';
//        $this->setMethod('get');
//        break;

    $this->setMethod($method);
//
//      default:
//        throw new Exception("post ou get non défini dans actionParams");
//        break;
//    }

    $this->setActionLink($actionLink);
    $this->setActionState(true);
  }
  // ------------------------
  public function addTextInput(array $paramsArray) {

    $paramsArray['type'] = 'text';

    if (isset($paramsArray['name']) == false) {
      throw new Exception("le paramètre 'name' n'est pas défini");
    }

    $input = new InputHtml($paramsArray);

    //$input->hydrate($paramsArray);
    $this->setInputHtmlList($input);

    }
  // ------------------------

    public function addBUttonValidate(array $paramsArray) {

    $paramsArray['type'] = 'button';

    if (isset($paramsArray['name']) == false) {
      throw new Exception("le paramètre 'name' n'est pas défini");
    }

    $input = new InputHtml($paramsArray);

    //$input->hydrate($paramsArray);
    $this->setInputHtmlList($input);

    }

  // ------------------------
  public function render(){

    $method = $this->getMethod();

    if ($this->getActionState() == false) {
      throw new Exception("ActionState non défini avant render - "
          . "actionParams non défini");
    }

    if ($this->inputHtmlList == null) {
      throw new Exception("render: la liste des inputs est vide");
    }
    ?><form class="col-md-8 col-sm-6 col-lg-4 col-xs-12 form-horizontal" method="$">
      <fieldset>
      <legend>Form Name</legend>

    <?php
    foreach ($this->inputHtmlList as $value) {

      $name = $value->getName();
      $type = $value->getType();
      $id   = $value->getId();

      if ($type == 'button') {
        ?>
        <div class="form-group">
          <label class="control-label" for="submit"></label>
          <div class="col-md-4">
            <button id="<?php echo $id; ?>" name="<?php echo $name ?>"
                    class="btn btn-success">Valider</button>
          </div>
        </div>
      <?php
      }
      else {
        ?>
        <div class="form-group">
            <label class="col-md-4 control-label" for="<?php echo $name;?>"><?php echo $name;?></label>
            <div class="col-md-5">
              <input name="<?php echo $name;?>" type="<?php echo $type;?>" class="">
            </div>
        </div>
      <?php
      }
    }
    ?>
    </fieldset>
    </form><br><?php
  }

}
