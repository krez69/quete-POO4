<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';
class Car extends Vehicle implements LightableInterface
{

    /**
     * Le niveau de carburant/énergie actuel
     * @var Integer
     */
    private $energyLevel;

    /**
     * @return INT
     */


    /*DEMARRER*/
    public function start()
    {
        return "start !";
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }



    /**
     * @param String $eneryLevel
     * @return int
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): int
    {
        $this->energyLevel = $energyLevel;
        return $this->energyLevel;
    }

}
