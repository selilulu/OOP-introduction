<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'beverage.php';
require 'beer.php'; //this is to make sure we used beer.php only once!
require 'private.php';
require 'no-cola.php';





echo '<br>';

$cola =new Beverage('black', 2);
echo $cola->getInfo();


?>



