<?php


class Truck extends Vehicle
{
    /**
     * @var integer
     */
    protected $capacity;

    /**
     * @var integer
     */
    protected $loadTest = 0;

    public function __construct($color, $nbSeats, $energy, $capacity, $nbWheels)
    {
        parent::__construct($color,$nbSeats, $nbWheels, $energy);
        $this->capacity = $capacity;
    }


    public function getCapacity(): int
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }

    public function getLoad(): int
    {
        return $this->load;
    }

    public function setLoadTest(int $loadTest): void
    {
        $this->loadTest = $loadTest;

    }
    public function getLoadTest(): string
    {
        if($this->loadTest < $this->capacity){
            return 'in filling';
        }else{
            return 'full';
        }

    }


}