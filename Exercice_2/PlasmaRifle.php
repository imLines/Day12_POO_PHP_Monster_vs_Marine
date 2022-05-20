<?php
require_once('AWeapon.php');

class PlasmaRifle extends AWeapon{
    protected $name;
    protected $apcost;
    protected $damage;
    protected $melee;

    public function __construct($name = "Plasma Rifle", $apcost = 5, $damage = 21)
    {
        parent::__construct($name, $apcost, $damage);
    }
    
    public function attack()
    {
        echo "PIOU".PHP_EOL;
    }

}

