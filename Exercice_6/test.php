<?php

require_once('AWeapon.php');
require_once('IUnit.php');
require_once('ASpaceMarine.php');
require_once('TacticalMarine.php');
require_once('AMonster.php');
require_once('AssaultTerminator.php');
require_once('PlasmaRifle.php');
require_once('PowerFist.php');

$gun = new PlasmaRifle();
$roger = new TacticalMarine("Roger");
$roger->recoverAp();