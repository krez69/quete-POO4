<?php

require_once 'HighWay.php';
final class MotoWay extends HighWay
{
    public function addVehicule(object $vehicle)
    {
        if ($vehicle instanceof Car){
            $this->currentVehicules[] = $vehicle;
        }
    }

}