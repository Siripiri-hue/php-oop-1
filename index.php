<?php

class Movie {
    public $title;
    public $year;
    public $direct_by;
    public $cast = [];
    public $genre = [];
    public $music_by;
    public $distribution;

    public __constructor ($_title, $_year, $_distribution) {
        $this->title = $_title;
        $this->year = $_year;
        $this->distribution = $_distribution;
    }
}

