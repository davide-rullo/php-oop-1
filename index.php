<?php
class Movie
{
    public $title;
    public $year;

    function __construct($_year)
    {
        $this->year = $_year;
    }
}

$Oppenheimer = new Movie(2023);
$Avatar = new Movie(2011);
