<?php
require_once('AWeapon.php');

class PlasmaRifle extends AWeapon{
    protected $name;
    protected $apcost;
    protected $damage;
    public static $inventaire = 0;
    protected $melee = false;

    public function __construct($name = "Plasma Rifle", $apcost = 5, $damage = 21)
    {
        parent::__construct($name, $apcost, $damage);
        self::$inventaire += 1;
    }
    
    public function attack()
    {
        echo "PIOU".PHP_EOL;
    }

}

