<?php
$currentDirectory = dirname(realpath(__FILE__));
set_include_path(get_include_path() . PATH_SEPARATOR . $currentDirectory . DIRECTORY_SEPARATOR. '..'. DIRECTORY_SEPARATOR .'library');

include_once 'Zend/Loader/Autoloader.php';
$autoloader = Zend_Loader_Autoloader::getInstance();
$autoloader->registerNamespace('br');

use br\gov\filter as f;
$a = new f\Acentuacao();

$f = $a->filter('Cinqüênta pássaros se vão e caçoam da àguia. Pão-de-ló e café!');

Zend_Debug::dump($f);