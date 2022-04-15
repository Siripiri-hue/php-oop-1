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

    function __construct ($_title, $_year, $_country, $_directed_by, $_distribution_home) {
        $this->title = $_title;
        $this->year = $_year;
        $this->country = $_country;
        $this->direct_by = $_directed_by;
        $this->distribution_home = $_distribution_home;
    }

    public function getDetails() {
        return [$this->title, $this->year, $this->country, $this->direct_by, $this->distribution_home];
    }
}

$pulp_fiction = new Movie ('Pulp Fiction', '1994', 'USA', 'Q. Tarantino', 'Miramax');
var_dump($pulp_fiction);
$prova_prendermi = new Movie ('Prova a prendermi', '2002', 'USA', 'S. Spielberg', 'United International');
var_dump($prova_prendermi);

// echo $pulp_fiction->getDetails();