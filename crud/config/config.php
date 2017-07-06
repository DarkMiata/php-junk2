<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

define('PATH_PROJECT_CRUDE',  '/php_junk/crud');

define('PATH_CLASS',  PATH_ROOT . PATH_PROJECT_CRUDE . '/class/');
define('PATH_VIEW',   PATH_ROOT . PATH_PROJECT_CRUDE . '/view/');
define('PATH_SUBMIT', PATH_ROOT . PATH_PROJECT_CRUDE . '/submit/');

define('DEBUG_VIEW',        true);

require_once PATH_CLASS . 'Localisation.php';
require_once PATH_CLASS . 'Contact.php';
require_once PATH_CLASS . 'DM/FormHtml.php';

// ========================================
?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<?php

// ========================================
function debugView($text) {
  if (DEBUG_VIEW) {
    echo ($text."<br>");
  }
}
