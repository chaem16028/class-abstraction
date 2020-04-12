<?php


require_once 'Car.php';
require_once 'Truck.php';
require_once 'Highway.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';
require_once 'Bicycle.php';
require_once 'Skateboard.php';


$car = new Car('green', 4, 'electric');

$car->setCurrentSpeed(25);
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br>';
echo '<br>';


$truck = new Truck('red', 4, 'fuel',100);

$truck->setLoading(150);
echo "le camion est : ".$truck->full()." en capacité";
echo '<br>';
$truck->setCurrentSpeed(35);
echo $truck->forward();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();


$motorway=new MotorWay(4,130);
$pedestrian=new PedestrianWay(1,10);
$residential=new ResidentialWay(2,50);

echo '<br>';
echo '<br>';
$carr=new Car('blue',5,'fuel');
$bike= new Bicycle('vert',1);
$skate=new Skateboard('bleu',0);

$motorway->addVehicule($bike);
$motorway->addVehicule($truck);
$motorway->addVehicule($car);
var_dump($motorway->getCurrentVehicles());


$pedestrian->addVehicule($skate);
$pedestrian->addVehicule($bike);
$pedestrian->addVehicule($carr);
var_dump($pedestrian->getCurrentVehicles());

$residential->addVehicule($car);
$residential->addVehicule($bike);
$residential->addVehicule($skate);
$residential->addVehicule($truck);
var_dump($residential->getCurrentVehicles());