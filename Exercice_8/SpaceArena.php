<?php

class SpaceArena{
    public $MonsterArray = [];
    public $MarineArray = [];
    public $arene= [];
    public static $theCounter = 0;
    public static $tourCounter = 0;
    

    

    public function enlistMonsters($monster)
    {
        if($monster instanceof AMonster){
            array_push($this->MonsterArray, $monster);
            self::$theCounter ++;
        }else{
            throw new Exception("Stop triying to cheat !");
        }
    }


    public function enlistSpaceMarines($marine)
    {
        if($marine instanceof ASpaceMarine){
            array_push($this->MarineArray, $marine);
            self::$theCounter ++;
        }elseif(in_array($marine, $this->MarineArray)){
            Echo "NOP";
        }else{
            throw new Exception("Stop triying to cheat !");
        }
    }


    public function fight()
    {
        if(count($this->MarineArray) == 0){
            echo "Those cowards ran away.";
        }elseif(count($this->MonsterArray) == 0){
            echo "No monster available ti fight";
        }else{
            //Add le premier player dans l'arene
            //modifier le nombre de tour en fonction des entrées(2 entrées = 1 tour)
            if(self::$theCounter >= 2){
                // if (array_key_exists('first', $search_array)) 
                array_push($this->arene, $this->MonsterArray[self::$tourCounter]);
                array_push($this->arene, $this->MarineArray[self::$tourCounter]);
                self::$tourCounter ++;
                var_dump($this->arene);

            }
            

        }


        
    }

}