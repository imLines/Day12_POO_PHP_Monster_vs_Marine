<?php

abstract class ASpaceMarine implements IUnit{
    protected $nom;
    protected $hp = 0;
    protected $ap = 0;

    public function __construct($name)
    {
        $this->name = $name;
    }


    public function getName()
    {
        return $this->name;
    }
    public function getHp()
    {
        return $this->hp;
    }
    public function getAp()
    {
        return $this->ap;
    }
    public function equip($TEquip)
    {

    }
    public function attack($TAttack)
    {

    }
    public function receiveDamage($TReceivDamage)
    {

    }
    public function moveCloseTo($TmoveCloseTo)
    {

    }
    public function recoverAP()
    {
        
    }
}