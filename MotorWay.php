<?php
require_once 'Highway.php';
require_once 'Vehicle.php';
require_once 'Car.php';

final class MotorWay extends Highway
{
    public function addVehicule(Vehicle $vehicle){

        if (($vehicle instanceof Car)){
            echo "c'est ok";
            return $this->currentVehicles[]= $vehicle;

        }




    }

}

