<?php

class Car {
    protected  $color;

    public function getColor() {
        return $this->color;
    }
}

class Audi extends Car {
    protected  $color;

    public function getColor()
    {
        //
        return parent::getColor();
    }
}
$audi = new Audi();
$audi->getColor();