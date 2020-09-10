<?php

/**
 * Created by PhpStorm.
 * User: Davronbek Achilov.
 * Date: 9/10/20
 * Time: 10:28 AM
 */

/**
 * Class Food
 * @property float $price
 * @property string $type
 */
class Food {

    protected $id;

    protected $price;

    /**
     * @param int $id
     * @return $this
     */
    public function find(int $id) {
        return $this;
    }

}

interface CalculationOrderDiscount {

    public function getDiscountPrice(): float;
}

/**
 * Class Order
 */
class Order  {

    /**
     * Get discount price food
     *
     * @param CalculationOrderDiscount $orderDiscount
     * @return string
     */
    public function getDiscount(CalculationOrderDiscount $orderDiscount): string
    {
        return $orderDiscount->getDiscountPrice();
    }
}

class MilliyFood implements CalculationOrderDiscount {

    /**
     * @var Food
     */
    protected $food;

    /**
     * MilliyFood constructor.
     * @param Food $food
     */
    public function __construct(Food $food)
    {
        $this->food = $food;
    }

    public function getDiscountPrice(): float
    {
        return $this->food->price - 1000;
    }
}

class BistroFood implements CalculationOrderDiscount {

    /**
     * @var Food
     */
    protected $food;

    /**
     * MilliyFood constructor.
     * @param Food $food
     */
    public function __construct(Food $food)
    {
        $this->food = $food;
    }

    public function getDiscountPrice(): float
    {
        return $this->food->price - 3000;
    }
}

$order = new Order();

$food = new Food();
$orderDiscount = new BistroFood($food->find(1));
$order->getDiscount($orderDiscount);