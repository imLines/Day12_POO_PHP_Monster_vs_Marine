<?php
require_once('PlasmaRifle.php');


class TacticalMarine extends ASpaceMarine{
    public $hp = 100;
    public $ap = 20;
    public function __construct($name)
    {
        parent::__construct($name);
        echo $this->name." on duty.";
        $this->weapon = new PlasmaRifle;
    }
    public function __destruct()
    {
        $this->name." the technical marine is falled...";
    }
    public function recoverAP()
    {
        $this->ap += 12;
        if($this->ap > 50){
            $this->ap = 50;
        }
        echo "This";
    }
}