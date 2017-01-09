<?php
/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 9.01.2017
 * Time: 08:48
 */

namespace App\TripSorter\BoardingCards\Common;


abstract class BoardingCard
{
    /**
     * BoardingCard constructor.
     * @param $departureLocation
     * @param $arrivalLocation
     * @param $seat
     */
    function __construct($departureLocation, $arrivalLocation, $seat)
    {
        $this->departureLocation = $departureLocation;
        $this->arrivalLocation = $arrivalLocation;
        $this->seat = $seat;
    }

    /**
     * @var
     */
    protected $departureLocation;
    /**
     * @var
     */
    protected $arrivalLocation;
    /**
     * @var
     */
    protected $name;

    /**
     * @return mixed
     */
    public function getSeat()
    {
        return $this->seat;
    }

    /**
     * @param mixed $seat
     */
    public function setSeat($seat)
    {
        $this->seat = $seat;
    }

    /**
     * @return mixed
     */
    public function getDepartureLocation()
    {
        return $this->departureLocation;
    }

    /**
     * @param mixed $departureLocation
     */
    public function setDepartureLocation($departureLocation)
    {
        $this->departureLocation = $departureLocation;
    }

    /**
     * @return mixed
     */
    public function getArrivalLocation()
    {
        return $this->arrivalLocation;
    }

    /**
     * @param mixed $arrivalLocation
     */
    public function setArrivalLocation($arrivalLocation)
    {
        $this->arrivalLocation = $arrivalLocation;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public abstract function toString();


}