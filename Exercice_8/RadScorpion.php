<?php

class RadScorpion extends AMonster{
    public static $IncrementName = 0;
    public $hp = 80;
    public $ap = 50;
    public function __construct($name = "RadScorpion #")
    {
        parent::__construct($name);
        self::$IncrementName++;
        $this->name = $this->name.self::$IncrementName;
        echo $this->name." : Crrrrrr ! ".PHP_EOL;
    }
    public function __destruct()
    {
        $this->name." : SPROTCH !".PHP_EOL;
    }
    public function attack($ennemi)
    {
        if($ennemi instanceof AssaultTerminator){
            $ennemi->hp = $this->hp - 25;
        }
        if($ennemi instanceof ASpaceMarine){

            $ennemi->hp = $this->hp - 50;
            $this->ap = $this->ap - 8;
        }
    }

}