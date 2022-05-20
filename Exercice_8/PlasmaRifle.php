<?php
require_once('AWeapon.php');

class PlasmaRifle extends AWeapon{
    public $name;
    public $apcost;
    public $damage;
    public static $inventaire = 0;
    public $melee = false;

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

