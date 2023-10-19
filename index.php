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

$movie1 = new Movie('Oppenheimer', '2023', ['drammatico', 'storico']);
$movie2 = new Movie('Avatar', '2011', ['avventura', 'fantascienza']);
$movie3 = new Movie('Star Wars', '1997', ['fantascienza', 'azione']);
$movie4 = new Movie('Dunkirk', '2020', ['storico', 'fantascienza']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <header>
        <nav class="navbar bg-dark">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1 text-white">
                    <h2>Lista film</h2>
                </span>
            </div>
        </nav>
    </header>
    <div class="container ">
        <div class="row p-4 m-4 row-cols-2 g-4">
            <div class="col">
                <div class="card text-center">
                    <div class="card-img"> <img src="https://picsum.photos/600/300" alt=""></div>
                    <div class="card-body">
                        <h4>Titolo </h4>
                        <p><?php echo $movie1->title ?></p>
                        <h4>Anno </h4>
                        <p><?php echo $movie1->year ?></p>
                        <h4>Genere </h4>
                        <p><?php foreach ($movie1->genre as $value) {
                                echo "$value <br>";
                            } ?></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-img"> <img src="https://picsum.photos/600/300" alt=""></div>
                    <div class="card-body">
                        <h4>Titolo </h4>
                        <p><?php echo $movie2->title ?></p>
                        <h4>Anno </h4>
                        <p><?php echo $movie2->year ?></p>
                        <h4>Genere </h4>
                        <p><?php foreach ($movie2->genre as $value) {
                                echo "$value <br>";
                            } ?></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-img"> <img src="https://picsum.photos/600/300" alt=""></div>
                    <div class="card-body">
                        <h4>Titolo </h4>
                        <p><?php echo $movie3->title ?></p>
                        <h4>Anno </h4>
                        <p><?php echo $movie3->year ?></p>
                        <h4>Genere </h4>
                        <p><?php foreach ($movie3->genre as $value) {
                                echo "$value <br>";
                            } ?></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-img"> <img src="https://picsum.photos/600/300" alt=""></div>
                    <div class="card-body">
                        <h4>Titolo </h4>
                        <p><?php echo $movie4->title ?></p>
                        <h4>Anno </h4>
                        <p><?php echo $movie4->year ?></p>
                        <h4>Genere </h4>
                        <p><?php foreach ($movie4->genre as $value) {
                                echo "$value <br>";
                            } ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>