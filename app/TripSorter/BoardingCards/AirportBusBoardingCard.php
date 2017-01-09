<?php
/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 9.01.2017
 * Time: 08:53
 */

namespace App\TripSorter\BoardingCards;


use App\TripSorter\BoardingCards\Common\BoardingCard;

class AirportBusBoardingCard extends BoardingCard
{
    /**
     * AirportBusBoardingCard constructor.
     * @param $departureLocation
     * @param $arrivalLocation
     * @param $seat
     */
    function __construct($departureLocation, $arrivalLocation, $seat)
    {
        parent::__construct($departureLocation, $arrivalLocation, $seat);
    }

    /**
     * @return string
     */
    public function toString()
    {
        $text = 'Take the airport bus from '.$this->getDepartureLocation().' to '.$this->getArrivalLocation().'. ';
        $seat = $this->getSeat() ? 'Sit in seat '.$this->getSeat().'.' : 'No seat assignment.';
        $text .= $seat;
        return $text;
    }

}