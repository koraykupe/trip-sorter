<?php
/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 9.01.2017
 * Time: 09:40
 */

namespace App\TripSorter\Sorting\Contracts;


interface ISorting
{
    /**
     * @param array $items
     * @return mixed
     */
    public function sort(array $items = []) :array;
}