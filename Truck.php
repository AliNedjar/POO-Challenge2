<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{

    /**
     * @var int
     */
    private $stockageCapacity;

    /**
     * @var int
     */
    private $actualCharge;

    /**
     * @var string
     */
    private $energy;

    public function getStockageCapacity(): int
    {
        return $this->stockageCapacity;
    }

    public function setStockageCapacity(int $stockageCapacity): void
    {
        $this->stockageCapacity = $stockageCapacity;
    }

    public function getActualCharge(): int
    {
        return $this->actualCharge;
    }

    public function setActualCharge(int $actualCharge): void
    {
        if($actualCharge >= 0){
            $this->actualCharge = $actualCharge;
        }
    }

    public function getEnergy(): int
    {
        return $this->energy;
    }

    public function setEnergy(int $energy): void
    {
        $this->energy = $energy;
    }


    public function __construct(string $color, int $nbSeats, string $energy, int $stockageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->stockageCapacity = $stockageCapacity;
    }

    public function Fill()
    {
        if ($this->getActualCharge() < $this->getStockageCapacity()) {
            $this->setActualCharge($this->setStockageCapacity());
        }
    }




}
