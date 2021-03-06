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
class FoodService {

    /**
     * @param array $data
     * @return Food
     */
    public function create(array $data)
    {
        //
    }

    /**
     * @param int $id
     * @param array $data
     * @return boolean
     */
    public function update(int $id, array $data)
    {
        //
    }

    /**
     * @param int $id
     * @return boolean
     */
    public function delete(int $id)
    {
        //
    }

    /**
     * @param array $data
     * @return Order
     */
    public function createOrder(array $data)
    {
        //
    }

}

/**
 * Class FoodController
 */
class FoodController {

    /**
     * @var FoodService
     */
    protected $service;

    /**
     * FoodController constructor.
     * @param FoodService $service
     */
    public function __construct(FoodService $service)
    {
        $this->service = $service;
    }
}