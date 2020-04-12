<?php
require_once 'Highway.php';
require_once 'Vehicle.php';


final class ResidentialWay extends Highway
{
    public function addVehicule(Vehicle $vehicle){
        if (($vehicle instanceof Vehicle)){
            echo "c'est ok";
            return $this->currentVehicles[]= $vehicle;
        }

    }
}

