<?php

require_once 'HighWay.php';
final class PedestrianWay extends HighWay
{
    public function addVehicule( object $vehicle)
    {
        if ($vehicle instanceof Bicycle){
            $this->currentVehicules[] = $vehicle;
        }
    }

}