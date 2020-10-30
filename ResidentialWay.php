<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay 
{ 

    public function __construct()
    {
        $this->setNbLane(2);
        $this->setMaxSpeed(50);
    }

    public function addVehicle(Vehicle $vehi)
    {
         $this->SetCurrentVehicles($vehi);
        

    }
}
 



