<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class FlightBoardingCardTest extends TestCase
{
    public function testReturnText()
    {
        $flightBoardingCard = new \App\TripSorter\BoardingCards\FlightBoardingCard('Gerona Airport', 'Stockholm', '3A', 'SK455', '45B', '344');
        $this->assertSame($flightBoardingCard->toString(), "From Gerona Airport, take flight SK455 to Stockholm. Gate 45B, seat 3A. Baggage drop at ticket counter 344.");
    }
}
