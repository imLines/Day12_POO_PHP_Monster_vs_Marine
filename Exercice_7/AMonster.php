<?php  
include_once('IUnit.php');
abstract class AMonster implements IUnit{
    protected $nom;
    protected $hp = 0;
    protected $ap = 0;
    protected $damage = 0;
    protected $apcoast = 0;
    protected $place = "MonsterPlace";

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
    public function getDamage()
    {
        return $this->damage;
    }
    public function equip($weapon)
    {
        echo "Monsters are proud and fight with their own bodies.";
    }
    public function attack($ennemi)
    {
        if($ennemi instanceof IUnit){
            if($this->place != $ennemi->place){
                $this->name." : I'm too far away from".$ennemi->name;
            }else{
                if($this->ap >= $this->apcoast){
                    $this->ap = $this->ap - $this->apcoast;
                    return $this->name." attack ".$ennemi->name;
                }
            }
        }else{
            throw new Exception('Error in AMonster. Parameter is not an IUnit.');
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
        $this->ap += 7;
        if($this->ap > 50){
            $this->ap = 50;
        }
    }
}