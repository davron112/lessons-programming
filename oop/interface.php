<?php

interface CarInterface {
    public function calculationSpeed(string $model): int;
}

class Car implements CarInterface {

    public $color = 'red';

    protected $speed;

    public function speed() {
        return $this->speed;
    }

    public function calculationSpeed(string $model): int
    {
        return 122 + $this->speed;
    }
}
$car1 = new Car();
$car1->color = 'red';

$car2 = new Car();
$car2->color = 'blue';






