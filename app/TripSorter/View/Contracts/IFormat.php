<?php
/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 9.01.2017
 * Time: 09:32
 */

namespace App\TripSorter\View\Contracts;


interface IFormat
{
    /**
     * @param array $data
     * @return mixed
     */
    public function view($data = []);
}