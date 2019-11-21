<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Vehicle.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'MotoWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Speedometer.php';




// Instanciation d'un nouvel objet $k2000

$k2000 = new Car('black',2,4,'diesel');
$k2000->setNbWheels(4);
$k2000->setCurrentSpeed(5);
var_dump($k2000->switchOn());

// Instanciation d'un nouvel objet $bike

$bike = new Bicycle('blue','2');
$bike->setCurrentSpeed(20);

// Instanciation d'un noubel objet $Renault class Truck

$renault = new Truck('red','4','diesel',50,'4');
$renault->setLoadTest(40);
$renault->setCurrentSpeed(3);

// Instanciation d'un noubel objet $citroen class Vehicle

$citroen = new Vehicle('rouge', '4', '4','diesel');


$motoWay = new MotoWay('4','130');
$pedestrianWay = new PedestrianWay('1','10');
$residentialWay = new ResidentialWay('2', '50');


$motoWay->addVehicule($k2000);
$pedestrianWay->addVehicule($bike);
$residentialWay->addVehicule($citroen);

var_dump($motoWay);
var_dump($pedestrianWay);
var_dump($residentialWay);


//Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('yellow', '2');



//Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('black','4');
$tornado->switchOn();
var_dump($tornado);


$Peugeot = new Truck('bleu','4','essence','50','4');





