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

    /**
     * @var int
     */
    protected $id;

    /**
     * @var float
     */
    protected $price;

    /**
     * @param int $id
     * @return $this
     */
    public function find(int $id) {
        return $this;
    }

}

/**
 * Class Order
 */
class Order  {

    /**
     * Get discount price food
     *
     * @param Food $food
     * @return string
     */
    public function getDiscount(Food $food): string
    {
        switch ($food->type) {
            case 'milliy':
                return $food->price - 1000;
            case 'yevropa':
                return $food->price - 2000;
            case 'bistro':
                return $food->price - 3000;
            default: return 0;
        }
    }
}

$order = new Order();
$food = new Food();
$order->getDiscount($food->find(1));