<?php

class PowerFist extends AWeapon{
    protected $name;
    protected $apcost;
    protected $damage;
    protected $melee;

    public function __construct($name = "Power Fist", $apcost = 8, $damage = 50)
    {
        parent::__construct($name, $apcost, $damage);
    }
    
    public function attack()
    {
        return "SBAM".PHP_EOL;
    }

}