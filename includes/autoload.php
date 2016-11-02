<?php


  function __autoload($classname) {
    $filename = "classes/class.". $classname .".php";
    require_once($filename);
}
 
?>