<?php

class Movie {
    public $title;
    public $original_title;
    public $year;
    public $country;
    public $direct_by;
    public $cast = [];
    public $genre = [];
    public $music_by;
    public $distribution_home;

    public __constructor ($_title, $_year, $_country; $_directed_by, $_distribution_home) {
        $this->title = $_title;
        $this->year = $_year;
        $this->country = $_country;
        $this->$direct_by = $_directed_by;
        $this->distribution_home = $_distribution_home;
    }
}

$pulp_fiction = new Movie ('Pulp Fiction', '1994', 'USA', 'Q. Tarantino', 'Miramax');
$prova_prendermi = new Movie ('Prova a prendermi', '2002', 'USA', 'S. Spielberg', 'United International');