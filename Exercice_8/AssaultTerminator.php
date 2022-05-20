<?php

class AssaultTerminator extends AMonster{
    public $hp = 150;
    public $ap = 30;
    public function __construct($name)
    {
        parent::__construct($name);
        echo $this->name." has teleported from space.";
        $this->weapon = new PowerFist();
    }
    public function __destruct()
    {
        echo "BOOOOOM ! ".$this->name." has explosed..";
    }
    public function receiveDamage($TReceivDamage)
    {
        
        return $this->hp = ($this->hp - $TReceivDamage) + 3;
        if($TReceivDamage < 4){
            $this->hp - 1;
        }
    }
}