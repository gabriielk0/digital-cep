<?php 

require_once 'vendor/autoload.php';

use Gabriel\DigitalCep\Search;

$busca = new Search();

$resultado = $busca->getAdressFromZipcode('71592056');

print_r($resultado);