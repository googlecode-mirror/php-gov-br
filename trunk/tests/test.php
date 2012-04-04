<pre>
<?php
use \Br\Gov\Filter\Acentuacao;

define('DS',DIRECTORY_SEPARATOR);
define('PS',PATH_SEPARATOR);

set_include_path ( get_include_path() . PS .
		'/home/brainfork/zend-framework/zf2/library' );

require_once 'Zend'. DS .'Loader'. DS .'StandardAutoloader.php';
$autoloader = new Zend\Loader\StandardAutoloader();
$autoloader->register();

$autoloader->registerNamespace('Br',   __DIR__ . DS . '../library' . DS . 'Br');

$a = new Acentuacao();

$f = $a->filter('Cinqüênta pássaros se vão e caçoam da àguia. Pão-de-ló e café!');

Zend\Debug::dump($f);

