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
     * @param string $departureLocation
     * @param string $arrivalLocation
     * @param $seat
     */
    public function __construct(string $departureLocation, string $arrivalLocation, $seat)
    {
        parent::__construct($departureLocation, $arrivalLocation, $seat);
    }

    /**
     * @return string
     */
    public function toString() :string
    {
        $text = 'Take the airport bus from '.$this->getDepartureLocation().' to '.$this->getArrivalLocation().'. ';
        $seat = $this->getSeat() ? 'Sit in seat '.$this->getSeat().'.' : 'No seat assignment.';
        $text .= $seat;
        return $text;
    }

}