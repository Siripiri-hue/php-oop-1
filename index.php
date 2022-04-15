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

    public function setDetails ($original_title, $cast, $genre, $music_by) {
        $this->original_title = $original_title;
        $this->cast = $cast;
        $this->genre = $genre;
        $this->music_by = $music_by;
    }

    public function getDetails() {
        // return [$this->title, $this->year, $this->country, $this->direct_by, $this->distribution_home];
        return `<div class="movie">
                    <h2>{$this->title}</h2>
                    <h3>{$this->original_title}</h3>
                    <ul>
                        <li>{$this->year}</li>
                        <li>{$this->country}</li>
                        <li>{$this->direct_by}</li>
                    </ul>
                </div>`;
    }
}

$pulp_fiction = new Movie ('Pulp Fiction', '1994', 'USA', 'Quentin Tarantino', 'Miramax');
$pulp_fiction->setDetails('Pulp Fiction', ['John Travolta', 'Uma Turman', 'Samuel L. Jackson', 'Bruce Willis'], ['noir', 'thriller', 'drama'], 'aa.vv.');
// var_dump($pulp_fiction);

$prova_prendermi = new Movie ('Prova a prendermi', '2002', 'USA', 'S. Spielberg', 'United International');
$prova_prendermi->setDetails('Catch me if you can', ['Leonardo di Caprio', 'Tom Hanks', 'Christopher Walken'], ['commedia', 'drama'], 'John Williams');
// var_dump($prova_prendermi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Class</title>
</head>
<body>
    <main>
        <?php echo $prova_prendermi->getDetails(); ?>
    </main>
</body>
</html>