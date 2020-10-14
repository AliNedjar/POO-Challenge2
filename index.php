<?php


require_once 'Truck.php';


$optimusPrime = new Truck('red','3','Fuel','100',);
var_dump($optimusPrime);
echo $optimusPrime->forward();
echo $optimusPrime->brake();

var_dump($optimusPrime);
