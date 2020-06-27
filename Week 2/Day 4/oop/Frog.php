<?php

class Frog extends Animal
{
    public $suara = "hop hop";

    public function __construct($name){
        $this->name = $name;
        $this->legs = 4;
        $this->cold_blooded = true;
    }

    public function jump(){
        echo $this->suara. "<br>";
    }
}

?>