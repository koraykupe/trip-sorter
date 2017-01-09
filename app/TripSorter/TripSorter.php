<?php
/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 9.01.2017
 * Time: 09:43
 */

namespace App\TripSorter;


use App\TripSorter\BoardingCards\Common\BoardingCard;
use App\TripSorter\Sorting\Contracts\ISorting;
use App\TripSorter\View\Contracts\IFormat;

class TripSorter
{
    /**
     * @var array
     */
    private $boardingCards = [];
    /**
     * @var
     */
    private $sortedBoardingCards;

    /**
     * @return array
     */
    public function getBoardingCards()
    {
        return $this->boardingCards;
    }

    /**
     * @param ISorting $algorithm
     */
    public function sortCards(ISorting $algorithm)
    {
        $this->sortedBoardingCards = $algorithm->sort($this->boardingCards);
    }

    /**
     * @param BoardingCard $boardingCard
     */
    public function addCard(BoardingCard $boardingCard)
    {
        array_push($this->boardingCards, $boardingCard);
    }

    /**
     * @param IFormat $format
     * @return mixed
     */
    public function view(IFormat $format)
    {
        return $format->view($this->sortedBoardingCards);
    }

}