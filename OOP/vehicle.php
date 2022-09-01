<?php

class Vehicle{
    public $name;
    public $type;
    public $color;

    public function __construct($name,$type,$color){
        $this->name = $name;
        $this->type = $type;
        $this->color = $color;
    }

}

