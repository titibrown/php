<?php

require 'Personne.php';

try 

{

$timo = new client ('1','Brown','timothy','20 rue de la brioche 69006 Lyon ')

echo $timo->getInfo();

var_export($timo)

}