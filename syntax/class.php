<?php

class MyClass {

    //public can access outside of the class
    //private cannot acces outside of the class
    //protected can acces with inheritence
    public $name = "hero";
    public $pv = 100;
    public $sword = "wooden stick";

    //constructor
    public function __construct($name, $sword) {
        $this->name = $name;
        $this->sword = $sword;
    }

    public function attack () {
        echo "$this->name attack\n";
    }

    public function get_heal ($heal = null) {
        if ($heal) {
            $this->pv += $heal;
        } else {
            $this->pv = 100;
        }
    }

    public function get_damage ($damage) {
        $this->pv -= $damage;
    }

    public function is_dead () {
        if ($this->pv <= 0) {
            return true;
        }
        return false;
    }
}

$my_class = new MyClass("Antoine", "iron sword"); //new instance of a class
$my_class->attack(); //acces to a method from instance

$my_class->get_damage(50);
echo 'after damage: '.$my_class->pv."\n";
$my_class->get_heal();
echo 'after heal: '.$my_class->pv."\n";