<?php
/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 9.01.2017
 * Time: 09:10
 */

namespace App\TripSorter\BoardingCards;


use App\TripSorter\BoardingCards\Common\BoardingCard;

class TrainBoardingCard extends BoardingCard
{
    /**
     * @var
     */
    private $trainCode;

    /**
     * TrainBoardingCard constructor.
     * @param string $departureLocation
     * @param string $arrivalLocation
     * @param $seat
     * @param $trainCode
     */
    public function __construct(string $departureLocation, string $arrivalLocation, $seat, $trainCode)
    {
        parent::__construct($departureLocation, $arrivalLocation, $seat);
        $this->trainCode = $trainCode;
    }

    /**
     * @return string
     */
    public function toString() :string
    {
        return 'Take train ' . $this->trainCode . ' from ' . $this->getDepartureLocation() . ' to ' . $this->getArrivalLocation() . '. Sit in seat ' . $this->getSeat() . '.';
    }
}