<?php

class PowerFist extends AWeapon{
    protected $name;
    protected $apcost;
    protected $damage;
    public static $inventaire = 0;

    protected $melee = true;

    public function __construct($name = "Power Fist", $apcost = 8, $damage = 50)
    {
        parent::__construct($name, $apcost, $damage);
        self::$inventaire += 1;
    }
    
    public function attack()
    {
        return "SBAM".PHP_EOL;
    }

}