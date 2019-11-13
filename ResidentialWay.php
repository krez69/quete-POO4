<?php

require_once 'HighWay.php';
final class ResidentialWay extends HighWay
{
    public function addVehicule(object $vehicle)
    {
        if ($vehicle instanceof Vehicle){
            $this->currentVehicules[] = $vehicle;
        }
    }

}