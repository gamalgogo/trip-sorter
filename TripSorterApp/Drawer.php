<?php
namespace TripSorterApp;

/**
 * Class Drawer
 * @package TripSorterApp
 */
class Drawer
{
    /**
     * Drawer constructor.
     */
    public function __construct()
    {

    }

    /**
     * @param $cards
     * @return string
     */
    public function drawTrips($cards)
    {
        $html_string = "<ol>";
        foreach ($cards as $card) {
            $html_string .= $this->drawTrip($card);
        }
        $html_string .= '<li>You have arrived at your final destination.</li>';
        $html_string .= "</ol>";

        return $html_string;
    }

    /**
     * @param $trip
     * @return string
     */
    private function drawTrip($trip)
    {
        $html = "<li>Take <b>$trip[transport]</b> from <b>$trip[departure]</b> to <b>$trip[arrival]</b>";
        $html .= empty($trip['gate']) ? : " Gate <b>$trip[gate]</b>";
        $html .= empty($trip['seat']) ? " No seat assignment" : " Sit in seat <b>$trip[seat]</b>";
        return $html;
    }

}