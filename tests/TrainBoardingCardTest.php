<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class TrainBoardingCardTest extends TestCase
{
    public function test_return_text()
    {
        $flightBoardingCard = new \App\TripSorter\BoardingCards\TrainBoardingCard('Madrid', 'Barcelona', '45B', '78A');
        $this->assertEquals($flightBoardingCard->toString(), "Take train 78A from Madrid to Barcelona. Sit in seat 45B.");
    }
}
