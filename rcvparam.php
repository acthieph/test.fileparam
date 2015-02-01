<?php
  ini_set('display_errors',1);
  error_reporting(E_ALL);

  function dump($var) {
    echo "<pre>" ;
    print_r($var) ;
    echo "</pre>";
  }

  dump($_POST) ;

?>