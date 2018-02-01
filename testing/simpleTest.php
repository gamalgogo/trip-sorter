<?php

/**
 * Include App Classes
 */

require_once 'TripSorterApp/TripSorter.php';
require_once 'TripSorterApp/BoardingCards.php';
require_once 'TripSorterApp/Drawer.php';
use TripSorterApp\TripSorter;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Class simpleTest
 */
final class simpleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * testIsValidJourne Method
     */
    public function testIsValidJourney()
    {
        $tripSorter = new TripSorter();
        $this->assertContains('You have arrived at your final destination', $tripSorter->createTrips());
    }
}



