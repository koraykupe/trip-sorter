# Basic Trip Sorter

I used Laravel Lumen that is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax.
But actually i didn't use any tools of the framework. I created the API from scratch.

You can find the codes in app\TripSorted folder.

I used Interfaces and Abstract classes, so it's easy to add new boarding card type, change output format or add a new soting algorithm.

I used some demo data on the task document and you can change them on routes/web.php file.
If you add new sorting algorithms or output formats, you can also change them in this file.

To add a new Boarding Pass, you must extend the BoardingCard abstract class and put your class in app\TripSorter\BoardingCards folder.

To add a new Sorting Algorithm, you must implement the ISorting interface and put your class in app\TripSorter\Sorting folder.

To add a new output format, you must implement the IFormat interface and put your class in app\TripSorter\View folder.

Unit tests are in tests folder.

It's possible to write some more tests. These are just for demonstration.

# Installation
run composer install
duplicate .env.example file and rename it to .env

# Running Tests
run phpunit on root folder

# Running the project
Go to main folder of your local URL.
For example if you set tripsorter.app, go to it's main page to see the results

# Sample Output
- Take train 78A from Madrid to Barcelona. Sit in seat 45B.
- Take the airport bus from Barcelona to Gerona Airport. No seat assignment.
- From Gerona Airport, take flight SK455 to Stockholm. Gate 45B, seat 3A. Baggage drop at ticket counter 344.
- From Stockholm, take flight SK22 to New York, JFK. Gate 22, seat 7B. Baggage will be automatically transferred from your last leg.
- You have arrived at your final destination.

#Requirements
Apache/Nginx
PHP 7.0+
