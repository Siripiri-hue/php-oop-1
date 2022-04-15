<?php

class Movie {
    public $title;
    public $original_title;
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

$pulp_fiction = new Movie ('Pulp Fiction', '1994', 'Q. Tarantino');
&prova_prendermi = new Movie ('Prova a prendermi', '2002', 'S. Spielberg');