<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class AirportBusBoardingCardTest extends TestCase
{
    public function testReturnText()
    {
        $airportBusBoardingCard = new \App\TripSorter\BoardingCards\AirportBusBoardingCard('Barcelona', 'Gerona Airport', null);
        $this->assertEquals($airportBusBoardingCard->toString(), "Take the airport bus from Barcelona to Gerona Airport. No seat assignment.");
    }
}
