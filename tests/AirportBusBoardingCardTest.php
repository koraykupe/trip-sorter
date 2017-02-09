<?php

class AirportBusBoardingCardTest extends TestCase
{
    public function testReturnText()
    {
        $airportBusBoardingCard = new \App\TripSorter\BoardingCards\AirportBusBoardingCard('Barcelona', 'Gerona Airport', null);
        $this->assertSame($airportBusBoardingCard->toString(), "Take the airport bus from Barcelona to Gerona Airport. No seat assignment.");
    }
}
