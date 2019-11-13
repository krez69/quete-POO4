<?php


require_once 'Vehicle.php';
require_once 'LightableInterface.php';
class Bicycle extends Vehicle implements LightableInterface
{

    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }


    public function switchOn(): bool
    {
        return $this->currentSpeed > 10;
    }

    public function switchOff(): bool
    {
        return false;
    }

}
