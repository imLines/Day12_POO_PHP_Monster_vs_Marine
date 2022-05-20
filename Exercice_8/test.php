<?php

require_once('AWeapon.php');
require_once('IUnit.php');
require_once('ASpaceMarine.php');
require_once('TacticalMarine.php');
require_once('AMonster.php');
require_once('AssaultTerminator.php');
require_once('PlasmaRifle.php');
require_once('PowerFist.php');
require_once('SuperMutant.php');
require_once('RadScorpion.php');
require_once('SpaceArena.php');

$team = new SpaceArena();

$mut1 = new SuperMutant();
$mut2 = new SuperMutant();
$mut3 = new SuperMutant();
$mut4 = new SuperMutant();

$mar1 = new TacticalMarine("mar1");
$mar2 = new TacticalMarine("mar2");
$mar3 = new TacticalMarine("mar3");
$mar4 = new TacticalMarine("mar4");


$team->enlistMonsters($mut1);
$team->enlistMonsters($mut2);
$team->enlistMonsters($mut3);
$team->enlistMonsters($mut4);

$team->enlistSpaceMarines($mar1);
$team->enlistSpaceMarines($mar2);
$team->enlistSpaceMarines($mar3);
$team->enlistSpaceMarines($mar4);

$team->fight();
