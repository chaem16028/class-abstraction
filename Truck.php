<?php
require_once 'Vehicle.php';
require_once 'Car.php';

class Truck extends Car
{


    /**
     * @var string
     */
    private $capacity;
    /**
     * @var string
     */
    private $loading;

    public function __construct(string $color, int $nbSeats, string $energy,int $capacity)
    {
        parent::__construct($color, $nbSeats,$energy);
        $this->capacity=$capacity;

    }

    public function full():string {
        if ($this->loading >0 && $this->loading<$this->capacity){
            return "in filling";
        }else{
            return "full";
        }
    }




    public function getCapacity(): int
    {
        return $this->capacity;
    }

    public function setCapacity(string $capacity):void
    {
        $this->capacity = $capacity;
    }

    public function getLoading(): int
    {
        return $this->loading;
    }

    public function setLoading(int $loading):void
    {
        $this->loading = $loading;
    }

}