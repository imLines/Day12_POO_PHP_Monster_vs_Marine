<?php

abstract class ASpaceMarine implements IUnit{
    protected $nom;
    protected $hp = 100;
    protected $ap = 20;
    protected $weapon;
    protected $place;

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
    public function equip($weapon)
    {
        if($weapon instanceof AWeapon){
            if($weapon->dispo == 1){
                $this->weapon = $weapon;
                echo $this->name." has been equipped with a ".$weapon->name;
                $weapon->dispo -= 1;
            }else{

            }
        }else{
            throw new Exception('Error in ASpaceMarine. Parameter is not an AWepon.');
        }
    }

    /*Si ses PA disponibles sont au moins égaux au coût de son arme et qu'il est à portée (ou qu'il utilise une arme à distance), il faudra appeler la méthode "attack" de l'arme équipée mais aussi la méthode receivedDamage de la cible en passant les dégâts de l'arme en paramètre.*/

    public function attack($ennemi)
    {
        if($this->weapon instanceof PowerFist){
            if($this->place =! $ennemi->place){
                echo $this->name." : I'm too far away from".$ennemi->name;
            }elseif($this->place == $ennemi->place){
                if($this->pa < $this->weapon->apcoast){
                    return " PA Insufisant.";
                }else{
                    $this->pa = $this->pa - $this->weapon->apcost;
                    $this->name." attacks ".$ennemi->name." with a ".$this->weapon;
                    $ennemi->receiveDamage($this->weapon->apcost);
                }
            }
        }elseif($this->weapon instanceof PlasmaRifle){
            $this->pa = $this->pa - $this->weapon->apcost;
            $ennemi->receiveDamage($this->weapon->apcost);
        }
        if($this->weapon == null){
            echo $this->name." : Hey, this is crazy. I'm not going to fight this empty handed..".PHP_EOL;
        }
        if($ennemi instanceof IUnit){

        }else{
            echo "Error in ASpaceMarine. Parameter is not an IUnit".PHP_EOL;
        }
    }
    public function receiveDamage($TReceivDamage)
    {
        return $this->hp = $this->hp - $TReceivDamage;
    }
    public function moveCloseTo($ennemi)
    {
        if($ennemi instanceof ASpaceMarine){
            $this->place = "MarinePlace";
            echo $this->name." it's close to".$ennemi->name;
        }
    }
    public function recoverAP()
    {
        $this->ap += 9;
        if($this->ap > 50){
            $this->ap = 50;
        }
    }
    public function getWeapon()
    {
       return $this->weapon->getName(); 
    }
}