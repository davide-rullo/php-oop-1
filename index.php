<?php
class Movie
{
    public $title;
    public $year;

    function __construct($_title, $_year)
    {
        $this->title = $_title;
        $this->year = $_year;
    }
}

$movie1 = new Movie('Oppenheimer', '2023');
$movie2 = new Movie('Avatar', '2011');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2><?php echo $movie1->title . ' ' . $movie1->year ?></h2>
    <h2><?php echo $movie2->title . ' ' . $movie2->year ?></h2>
</body>

</html>