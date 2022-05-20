<?php
/*
Une méthode publique equip, qui prendra un paramètre.
- Une méthode publique attack, qui prendra un paramètre.
- Une méthode publique receiveDamage, prenant également un paramètre. 
- Une méthode publique moveCloseTo, prenant   également un paramètre.
- Une méthode publique recoverAP, sans paramètre.
*/

interface IUnit{
    public function equip($TEquip);
    public function attack($TAttack);
    public function receiveDamage($TReceivDamage);
    public function moveCloseTo($TmoveCloseTo);
    public function recoverAP();

}