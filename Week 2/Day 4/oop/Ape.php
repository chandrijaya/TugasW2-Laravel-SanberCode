<?php

class Ape extends Animal
{
    public $suara = "Auooo";

    public function yell(){
        echo $this->suara. "<br>";
    }
}
?>