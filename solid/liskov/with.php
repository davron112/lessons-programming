<?php

/**
 * Created by PhpStorm.
 * User: Davronbek Achilov.
 * Date: 9/10/20
 * Time: 10:28 AM
 */

/**
 * Interface FoodServiceInterface
 */
interface FoodServiceInterface {
    /**
     * @param array $data
     * @return Food
     */
    public function create(array $data);

    /**
     * @param int $id
     * @param array $data
     * @return boolean
     */
    public function update(int $id, array $data);

    /**
     * @param int $id
     * @return boolean
     */
    public function delete(int $id);
}

/**
 * Class FoodService
 */
class FoodService implements FoodServiceInterface {

    /**
     * @param array $data
     * @return Food
     */
    public function create(array $data)
    {

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
     * @param FoodServiceInterface $service
     */
    public function __construct(FoodServiceInterface $service)
    {
        $this->service = $service;
    }
}