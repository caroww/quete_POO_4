<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Skateboard.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';



//Vehicules
$cars = new Car ('blue',5,'diesel',true);
$bike = new Bicycle ('red',1);
$skateboard = new Skateboard ('Yellow', 0);


try
{
    $cars->start(); 
}
catch (Exception $e)
{
    $cars->setParkBrake();
}
finally
{
    echo "Ma voiture roule comme un donut";
}
