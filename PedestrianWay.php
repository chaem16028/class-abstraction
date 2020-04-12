<?php
require_once 'Highway.php';
require_once 'Skateboard.php';
require_once 'Bicycle.php';


final class PedestrianWay extends Highway
{
    public function addVehicule(Vehicle $vehicle){
        if (($vehicle instanceof Bicycle) or ($vehicle instanceof Skateboard)){

            echo "c'est ok";
            return $this->currentVehicles[]= $vehicle;
        }

    }
}

