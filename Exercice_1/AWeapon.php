<?php

/*
name (une chaîne), le nom de l'arme.
- apcost (un nombre entier), le coût en points d'action pour utiliser l'arme.
- damage (un entier), le nombre de dégâts infligés par l'arme.
- melee (un booléen), représentant si l'arme est utilisée pour le combat rapproché ou non.
*/

abstract class AWeapon{
    protected $name;
    protected $apcost;
    protected $damage;
    protected $melee = false;
    
    public function __construct($name, $apcost, $damage)
    {
        if(is_string($name) && is_int($apcost) && is_int($damage)){
            $this->name = $name;
            $this->apcost = $apcost;
            $this->damage = $damage;

        } else {
            throw new Exception('Error in AWeapon constructor. Bad parameters.');
        }
    
    }
    public function getName()
    {
        return $this->name;
    }
    public function getApcost()
    {
        return $this->apcost;

    }
    public function getDamage()
    {
        return $this->damage;

    }
    public function isMelee()
    {
        return $this->melee;

    }
    abstract public function attack();

}
