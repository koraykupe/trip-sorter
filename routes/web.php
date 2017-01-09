<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
use App\TripSorter\TripSorter;
use App\TripSorter\BoardingCards\FlightBoardingCard;
use App\TripSorter\BoardingCards\TrainBoardingCard;
use App\TripSorter\BoardingCards\AirportBusBoardingCard;
use App\TripSorter\View\HtmlOrderedList;
use App\TripSorter\Sorting\LinearSorting;

$app->get('/', function () {
    $trip = new TripSorter();

    $trip->addCard(new FlightBoardingCard('Gerona Airport', 'Stockholm', '3A', 'SK455', '45B', '344'));
    $trip->addCard(new TrainBoardingCard('Madrid', 'Barcelona', '45B', '78A'));
    $trip->addCard(new FlightBoardingCard('Stockholm', 'New York, JFK', '7B', 'SK22', '22', null));
    $trip->addCard(new AirportBusBoardingCard('Barcelona', 'Gerona Airport', null));

    $trip->sortCards(new LinearSorting());

    echo $trip->view(new HtmlOrderedList());

});
