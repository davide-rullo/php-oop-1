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
$movie2 = new Movie('Avatar', '2011', ['drammatico', 'storico']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container ">
        <div class="row p-4 m-4">
            <div class="col">
                <div class="card text-center">
                    <h4>Titolo: </h4>
                    <p><?php echo $movie1->title ?></p>
                    <h4>Anno: </h4>
                    <p><?php echo $movie1->year ?></p>
                    <h4>Genere: </h4>
                    <p><?php foreach ($movie1->genre as $value) {
                            echo "$value <br>";
                        } ?></p>

                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <h4>Titolo: </h4>
                    <p><?php echo $movie2->title ?></p>
                    <h4>Anno: </h4>
                    <p><?php echo $movie2->year ?></p>
                    <h4>Genere: </h4>
                    <p><?php foreach ($movie2->genre as $value) {
                            echo "$value <br>";
                        } ?></p>

                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>