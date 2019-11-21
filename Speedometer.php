<?php


class Speedometer
{
    const CONVERTION= 1.60934;

    public static function convertKmToMiles($km)
    {
        if($km > 0){
            return $km/self::CONVERTION;
        };
    }

    public static function convertMilesToKm($miles)
    {
        if($miles > 0 ){
            return $miles*self::CONVERTION;
        }

    }
}
//en dehors de la classe
$km = 10;
echo Speedometer::convertKmToMiles($km)."</br>";

$miles =10;
echo Speedometer::convertMilesToKm($miles);
