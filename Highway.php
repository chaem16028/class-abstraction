<?php


abstract class  Highway
{

    /**
     * @var array
     */
    protected $currentVehicles=[];

    /**
     * @var int
     */
    protected $nbLane;

    /**
     * @var int
     */
    protected $maxSpeed;


    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }


    abstract public function addVehicule(Vehicle $vehicle);


    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }




    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }



    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }



}