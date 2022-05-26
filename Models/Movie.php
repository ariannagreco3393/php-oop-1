<?php
/**
 * @author Arianna Greco
 * @copyright 2022 Arianna Greco
 * @license MIT (aggiungere link alla licenza)
 */

class Movie {
    public $title;
    public $year;


      /**
     * function constructor
     * @param title the name of the film
     * @param year the number of the year
     */
    function __construct(String $title, String $year)
    {
        $this->title = $title;
        $this->year = $year;
    }

    /* function getYear() {
        return "$this->year"
    } */
}

?>