<?php
namespace TripSorterApp;

/**
 * Class BoardingCards
 * @package TripSorterApp
 */
class BoardingCards
{
    /**
     * @var array
     */
    private $cards = [];

    /**
     * BoardingCards constructor.
     */
    public function __construct()
    {
        $this->setCards();
    }

    /**
     * Set Cards
     * Could be a database, user input or even webservice
     * so user can submit a new array of cards
     *
     * @param array $cards
     */
    public function setCards()
    {
        $this->cards = json_decode(file_get_contents("data/cards.json"),true);
    }

    /**
     * @return array
     */
    public function getCards()
    {
        return $this->cards;
    }
}
