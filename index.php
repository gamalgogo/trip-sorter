<?php

/**
 * Include all classes
 */

foreach (glob("TripSorterApp/*.php") as $filename) {
    require_once $filename;
}

/**
 * Initiate the App
 */

$tripSorter   = new TripSorterApp\TripSorter();
$tripDetails = $tripSorter->createTrips();

echo "<div style='font-family: Tahoma'>" . $tripDetails . "</div>";
