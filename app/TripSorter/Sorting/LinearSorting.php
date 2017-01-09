<?php
/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 9.01.2017
 * Time: 09:42
 */

namespace App\TripSorter\Sorting;

use App\TripSorter\Sorting\Contracts\ISorting;

class LinearSorting implements ISorting
{
    /**
     * @var array
     */
    private $departureIndex = [];
    /**
     * @var array
     */
    private $arrivalIndex = [];

    /**
     * @param array $items
     * @return array
     * Sorting algorithm using hash table
     */
    public function sort($items = [])
    {
        $this->departureIndex = $this->makeDepartureIndex($items);
        $this->arrivalIndex = $this->makeArrivalIndex($items);

        $journeyStartsAt = $this->findWhereJourneyStarts($this->departureIndex);
        $sortedBoardingCards[] = $journeyStartsAt;
        $currentLocation = $journeyStartsAt->getArrivalLocation();

        while (array_key_exists($currentLocation, $this->departureIndex)) {
            array_push($sortedBoardingCards, $this->departureIndex[$currentLocation]);
            $currentLocation = $this->departureIndex[$currentLocation]->getArrivalLocation();
        }

        return $sortedBoardingCards;

    }

    /**
     * @param array $departures
     * @return mixed|null
     */
    private function findWhereJourneyStarts($departures = [])
    {
        $firstDeparture = null;
        foreach ($departures as $departure => $value) {
            if (!isset($this->arrivalIndex[$departure])) $firstDeparture = $value;
            // else array_push($commonLocations, $departure);
        }
        return $firstDeparture;
    }

    // Create array with indexes using key->value pair for arrivals and departures
    // We'll use them to find starting location and next trip

    /**
     * @param array $boardingCards
     * @return array
     */
    private function makeDepartureIndex($boardingCards = [])
    {
        $departureIndex = [];
        foreach ($boardingCards as $boardingCard) {
            $departureIndex[$boardingCard->getDepartureLocation()] = $boardingCard;
        }
        return $departureIndex;
    }

    /**
     * @param array $boardingCards
     * @return array
     */
    private function makeArrivalIndex($boardingCards = [])
    {
       $arrivalIndex = [];
       foreach ($boardingCards as $boardingCard) {
           $arrivalIndex[$boardingCard->getArrivalLocation()] = $boardingCard;
       }
       return $arrivalIndex;
    }
}