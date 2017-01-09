<?php
/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 9.01.2017
 * Time: 08:55
 */

namespace App\TripSorter\BoardingCards;


use App\TripSorter\BoardingCards\Common\BoardingCard;

class FlightBoardingCard extends BoardingCard
{
    /**
     * @var
     */
    private $flight;
    /**
     * @var
     */
    private $gate;
    /**
     * @var
     */
    private $counter;

    /**
     * FlightBoardingCard constructor.
     * @param $departureLocation
     * @param $arrivalLocation
     * @param $seat
     * @param $flight
     * @param $gate
     * @param $counter
     */
    function __construct($departureLocation, $arrivalLocation, $seat, $flight, $gate, $counter)
    {
        parent::__construct($departureLocation, $arrivalLocation, $seat);

        $this->gate = $gate;
        $this->counter = $counter;
        $this->flight = $flight;
    }

    /**
     * @return string
     */
    public function toString()
    {
        return 'From ' . $this->getDepartureLocation() . ', take flight ' . $this->flight . ' to ' . $this->getArrivalLocation() . '. Gate ' . $this->gate . ', seat ' . $this->getSeat() . '. ' . ($this->counter ? 'Baggage drop at ticket counter ' . $this->counter . '.' : 'Baggage will be automatically transferred from your last leg.');
    }

}