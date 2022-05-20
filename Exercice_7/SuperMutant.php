<?php

class SuperMutant extends AMonster{
    public static $IncrementName = 0;
    public $hp = 170;
    public $ap = 20;


    public function __construct($name = "Super Mutant #")
    {
        parent::__construct($name);
        self::$IncrementName++;
        $this->name = $this->name.self::$IncrementName;
        echo $this->name." : Roooooaarr !".PHP_EOL;
    }

    public function __destruct()
    {
        $this->name." : Urgh !".PHP_EOL;
    }
    public function attack($ennemi)
    {

    }
    public function recoverAP()
    {
        $this->ap += 7;
        $this->hp += 10;

        if($this->ap > 50){
            $this->ap = 50;
        }
        if($this->hp > 170){
            $this->hp = 170;
        }
    }
}
/*Ils commenceront avec 170HP, 20AP. Chacune de ses attaques infligera 60 dégâts mais coûtera 20AP.
Lorsque le SuperMutant récupère de la PA, il récupère également des HP, avec un maximum de 10HP récupérés par appel (170HP étant leur pleine santé).*/