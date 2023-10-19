<?php
class Movie
{
    public $title;
    public $year;
    public $genre;

    function __construct($_title, $_year, $_genre)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->genre = $_genre;
    }
}
