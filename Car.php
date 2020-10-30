<?php

require_once 'Vehicle.php';

 class Car extends Vehicle 
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    /**
       * @var string
       */
    private $energy;

    /**
       * @var string
       */
    private $energyLevel;

    /**
       * @var boolean
       */
      private $hasParkBrake;


    //Function


    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    
     public function start() :string
    {
        if($this->hasParkBrake=true)
        {
            throw new Exception ("attention frein à main enclenché");
        }



        if ($this->currentSpeed ===0 ) {
            $this->currentSpeed=5;
            return "Start !";
            }else{
            return "No need to start!";
            }
        
    }

    public function getEnergy() :int
    {
        return $this->energy;
    }

    

    public function setEnergy(string $energy): Car
    {
    if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
    }
    return $this;
    }

    public function getEnergyLevel() : int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getParkBrake() : boolean
    {
        return $this->hasParkBrake;        
    }

    public function setParkBrake(): void
    {
        if($this->hasParkBrake)
        {
            $this->hasParkBrake = false;
        }
        else
        {
            $this->hasParkBrake = true;
        }
        
    }

}
 



