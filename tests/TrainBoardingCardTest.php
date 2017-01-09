<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class TrainBoardingCardTest extends TestCase
{
    public function testReturnText()
    {
        $flightBoardingCard = new \App\TripSorter\BoardingCards\TrainBoardingCard('Madrid', 'Barselona', '45B', '78A');
        $this->assertEquals($flightBoardingCard->toString(), "Take train 78A from Madrid to Barcelona. Sit in seat 45B.");
    }
}
